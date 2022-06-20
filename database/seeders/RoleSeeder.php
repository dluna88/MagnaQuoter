<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleGuest = Role::create(['name' => 'Guest']);

        Permission::create(['name' => 'admin.home'])->assignRole($roleAdmin);
        //Permission::create(['name' => 'role name'])->syncRoles([$roleAdmin, $roleGuest]);
    }
}
