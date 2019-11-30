<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tickets', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('folio');
			$table->string('commentary');
			$table->bigInteger('category_id')->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->timestamps();
		});
		/*Schema::table('tickets', function ($table) {
			$table->foreign('priority_id')->references('id')->on('priorities');
		});*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('tickets');
	}
}
