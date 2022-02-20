<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_materials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 191);
			$table->decimal('unit_price', 12, 0);
			$table->timestamps();
			$table->integer('supplier_id');
			$table->decimal('total_amount', 12, 0);
			$table->text('description', 65535)->nullable();
			$table->string('unit', 50);
			$table->date('purchase_date');
			$table->integer('quantity')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_materials');
	}

}
