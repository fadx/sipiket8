<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
			$table->increments('id');
			$table->string('nisn');
			$table->string('full_name');
			$table->date('birth_date');
			$table->string('gender');
			$table->string('telephone');
			$table->string('address');
			$table->string('batch');
			$table->integer('point');
			$table->string('class')->references('id')->on('classes');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
