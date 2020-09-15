<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProfessionalExpercienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professional_experience', function (Blueprint $table){

            $table->string('title');
            $table->string('type');
            $table->string('specialty');
            $table->string('place_of_work');
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
        Schema::table('professional_experience', function(Blueprint $table){

        });
    }
}
