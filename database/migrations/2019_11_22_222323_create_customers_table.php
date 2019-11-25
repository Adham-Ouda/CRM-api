<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->enum('type', array('individual', 'corporate'));
			$table->string('phone', 255);
			$table->string('email', 255);
			$table->text('address');
			$table->string('website', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('customers');
	}
}