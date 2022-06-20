<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\QuoteTable;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Guest');

        User::create([
            'name' => 'Jorge Genis',
            'email' => 'genis@mail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Admin');
        
        // QuoteTable::create([
        //     'volume' => '120000',
        //     'days_year' => '235',
        //     'shifts' => '2',
        //     'hours_shift' => '7.25',
        //     'tech_availibility' => '0',
        //     'kickoff_date' => '2022/09/06',
        //     'operators_required' => '1',
        //     'total_robots' => '0.00',
        //     'area' => '49.00',
        //     'cycle_time' => '0',
        //     'math_data_level' => '1'
        // ]);

    }
}
