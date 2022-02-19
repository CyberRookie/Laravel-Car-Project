<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnginesTable extends Migration
{
    /**
     * Run the migrations.
     *2-17-22 define the Engines table linking the
     * foreign key 'model_id' to the 'car_models' table
     * @return void
     */
    public function up()
    {
        Schema::create('engines', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('model_id');
            $table->string('engine_name');
            $table->timestamps();
            $table->foreign('model_id')
                ->references('id')
                ->on('car_models')
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
        Schema::dropIfExists('engines');
    }
}
