<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Kandidat;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

class KandidatController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function datakandidat()
	{
<<<<<<< HEAD
		$voting = \DB::select('select id as id, judul as judul from votings where id_user='.\Auth::user()->id.'');
		return \View::make('voting.datakandidat')->with('voting', $voting);
=======
		return view('voting.datakandidat');
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new Kandidat;
<<<<<<< HEAD
		$post->id_voting = Input::get('id_voting');
=======
		$post->id_voting = 1;// \Auth::user()->id; blm disetting karna blm ada user malik yg benerin
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
        $post->nama_k = Input::get('nama');
        $post->keterangan = Input::get('keterangan');

        //upload file
		if(Input::hasFile('foto')){
			$foto = date("YmdHis")
			.uniqid()
			."."
			.Input::file('foto')->getClientOriginalExtension();
		
			Input::file('foto')->move(storage_path(),$foto);
			$post->foto = $foto;
		}

        $post->save();

<<<<<<< HEAD
		return redirect(url('/datapeserta'));
=======
		return redirect(url('/datakandidat'));
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
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
