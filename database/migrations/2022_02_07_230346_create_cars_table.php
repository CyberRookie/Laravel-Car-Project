<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 02-9-22 10 minutes in - modified the up function for the columns
     * in the db
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('founded');
            $table->longText('description');
            $table->timestamps();
        });
//2-14-22 Create a new table car models that uses a foreign key to reference the cars table by id on the table cars
        Schema::create('car_models', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('car_id');
            $table->string('model_name');
            $table->timestamps();
            $table->foreign('car_id')
                        ->references('id')
                        ->on('cars')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
