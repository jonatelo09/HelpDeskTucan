<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTicketsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('tickets', function (Blueprint $table) {
			$table->bigInteger('problem_id')->unsigned()->nullable();
			$table->foreign('problem_id')->references('id')->on('problems');

			$table->bigInteger('client_id')->unsigned()->nullable();

			$table->bigInteger('turn_id')->unsigned()->nullable();

			$table->bigInteger('status_id')->unsigned()->nullable();

			//$table->bigInteger('priority_id')->nullable();

			$table->bigInteger('user_id')->unsigned()->nullable();

		});

		Schema::table('tickets', function (Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients');
			$table->foreign('turn_id')->references('id')->on('turns');
			$table->foreign('status_id')->references('id')->on('statuses');
			//$table->foreign('priority_id')->references('id')->on('priorities');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('tickets', function (Blueprint $table) {
			$table->dropColumn('problem_id');
			$table->dropColumn('client_id');
			$table->dropColumn('turn_id');
			$table->dropColumn('status_id');
			$table->dropColumn('user_id');
		});
	}
}
