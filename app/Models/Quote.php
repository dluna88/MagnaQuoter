<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'volume',
        'days_year',
        'shifts',
        'hours_shift',
        'tech_availibility',
        'kickoff_date',
        'operators_required',
        'total_robots',
        'area',
        'cycle_time',
        // 'math_data_level'
    ];
}
