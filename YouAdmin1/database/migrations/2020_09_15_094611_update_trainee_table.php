<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTraineeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainees', function (Blueprint $table) {

            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday');
            $table->integer('phone');
            $table->string('gender');
            $table->string('marital-status');
            $table->string('email');
            $table->string('address_of_origin');
            $table->string('city_of_origin');
            $table->string('country_of_origin');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('citizenship');
            $table->string('identification');
            $table->string('identification_type');
            $table->string('health_issues');
            $table->string('photo');
            $table->integer('classroom-id');
            $table->integer('promo-id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainees', function (Blueprint $table) {

        });
    }
}
