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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
			$table->string('token_voting');
			$table->string('pilihan_voting');
			$table->string('status');
			$table->string('keterangan');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 9e9950285b4af35f34db4324be6ce67f25e4a9c2
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
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
