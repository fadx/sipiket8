<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penalties', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nisn')->references('id')->on('students');
			$table->string('type')->references('id')->on('classes');
			$table->timestamps('time');
			$table->string('reason');
			$table->string('recorder');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penalties');
    }
}
