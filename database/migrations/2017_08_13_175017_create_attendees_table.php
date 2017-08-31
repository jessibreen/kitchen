<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendeesTable extends Migration {

	public function up()
	{
		Schema::create('attendees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('event_id')->unsigned()->index();
			$table->string('firstname', 25);
			$table->string('lastname', 25);
			$table->string('email', 50);
			$table->string('role', 25 );
			$table->string('county', 25);
            $table->boolean('newsletter')->default(TRUE);
		});
	}

	public function down()
	{
		Schema::drop('attendees');
	}
}