<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->bigInteger('volume');
            $table->integer('days_year');
            $table->integer('shifts');
            $table->double('hours_shift', 4, 2);
            $table->integer('tech_availibility');
            $table->date('kickoff_date');
            $table->integer('operators_required');
            $table->double('total_robots',4,2);
            $table->double('area',10,2);
            $table->integer('cycle_time')->nullable();
            $table->integer('math_data_level')->nullable();
            
            $table->foreignId('user_id')->constrained('users','id')->onDelete('cascade');

            $table->json('layout')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quote_tables');
    }
};
