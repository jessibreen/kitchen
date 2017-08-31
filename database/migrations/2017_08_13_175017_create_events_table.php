<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->date('date');
			$table->time('time');
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}