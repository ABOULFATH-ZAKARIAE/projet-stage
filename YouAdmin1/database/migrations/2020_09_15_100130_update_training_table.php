<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training', function (Blueprint $table){

            
            $table->string('diploma');
            $table->string('speciality');
            $table->string('place_of_trining');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('city');
            $table->string('country');
            $table->integer('tarinee_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training', function (Blueprint $table){

        });
    }
}
