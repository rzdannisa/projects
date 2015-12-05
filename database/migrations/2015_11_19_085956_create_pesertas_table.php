<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesertas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_voting');
			$table->string('nama_p');
<<<<<<< HEAD
			$table->string('token_voting');
			$table->string('pilihan_voting');
			$table->string('status');
			$table->string('keterangan');
=======
>>>>>>> 9e9950285b4af35f34db4324be6ce67f25e4a9c2
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
		Schema::drop('pesertas');
	}

}
