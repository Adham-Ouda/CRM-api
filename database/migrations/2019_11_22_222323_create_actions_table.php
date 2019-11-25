<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActionsTable extends Migration {

	public function up()
	{
		Schema::create('actions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->enum('type', array('call', 'visit'));
			$table->integer('customer_id')->unsigned();
			$table->text('comment');
			$table->date('date');
			$table->time('time');
			$table->text('next_action')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('actions');
	}
}