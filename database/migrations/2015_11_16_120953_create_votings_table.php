<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_user');
			$table->string('instansi');
			$table->text('judul');
			$table->text('tujuan');
			$table->string('start');
			$table->string('end');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('votings');
	}

}
