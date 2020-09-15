<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
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
            $table->varchar('photo');
            $table->int('classroom-id');
            $table->int('promo-id');
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
        Schema::dropIfExists('trainees');
    }
}
