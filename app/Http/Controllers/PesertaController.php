<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

<<<<<<< HEAD
use App\Peserta;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Http\Request;
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d

class PesertaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function datapeserta()
	{
<<<<<<< HEAD
		$voting = \DB::select('select id as id, judul as judul from votings where id_user='.\Auth::user()->id.'');
=======
		$voting = \DB::select('select id as id, judul as judul_voting from voting where id_user='.\Auth::user()->id.'');
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
		return \View::make('voting.datapeserta')->with('voting', $voting);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new Peserta;
		$post->id_voting = Input::get('id_voting');
		$post->nama_p = Input::get('nama_p');
		$post->token_voting = Input::get('token_voting');
        $post->pilihan_voting = "";
        $post->status = "";
        $post->keterangan = "";

        $post->save();

		return redirect(url('/datapeserta'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
