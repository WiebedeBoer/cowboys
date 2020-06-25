<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towns', function (Blueprint $table) {
            $table->bigIncrements('town_id');
			$table->string('town_name');
			//population
			$table->integer('population');
			//size
			$table->string('category_size');
			//foundation
			$table->integer('foundation');
			//natives
			$table->string('natives');
			//location
			$table->integer('xcoord');
			$table->integer('ycoord');
			//fk
			$table->unsignedBigInteger('governor')->nullable();
			$table->unsignedBigInteger('marshall')->nullable();
			$table->unsignedBigInteger('sheriff')->nullable();
			//timestamps
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
        Schema::dropIfExists('towns');
    }
}
