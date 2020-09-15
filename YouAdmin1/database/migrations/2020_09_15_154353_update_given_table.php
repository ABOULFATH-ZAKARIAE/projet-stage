<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGivenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('given', function (Blueprint $table){

            $table->integer('hardware_id_title');
            $table->integer('hardware_id_number');
            $table->date('given_on_date');
            $table->integer('trainee_id');
            $table->integer('hardware_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('given', function (Blueprint $table){

        });
    }
}
