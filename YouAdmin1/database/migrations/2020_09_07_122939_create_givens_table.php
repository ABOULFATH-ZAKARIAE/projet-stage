<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGivensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('givens', function (Blueprint $table) {
            $table->id();
            $table->string('hardware_id_title');
            $table->string('hardware_id_number');
            $table->date('given_on_date');
            $table->string('trainee_id');
            $table->string('hardware_id');
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
        Schema::dropIfExists('givens');
    }
}
