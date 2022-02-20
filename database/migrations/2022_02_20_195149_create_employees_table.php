<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name');
			$table->string('email')->unique('users_email_unique');
			$table->timestamps();
			$table->boolean('status')->nullable()->default(0);
			$table->string('mobile', 30);
			$table->string('address');
			$table->string('state', 100);
			$table->string('city', 100);
			$table->string('designation', 150)->nullable();
			$table->string('salary', 30)->nullable();
			$table->string('photo', 100)->nullable();
			$table->string('experience', 50)->nullable();
			$table->date('joining_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
