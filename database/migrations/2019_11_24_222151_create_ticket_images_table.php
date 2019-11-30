<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketImagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ticket_images', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('image');

			$table->bigInteger('ticket_id')->unsigned()->nullable();
			$table->foreign('ticket_id')->references('id')->on('tickets');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('ticket_images');
	}
}
