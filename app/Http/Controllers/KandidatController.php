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
		$voting = \DB::select('select id as id, judul as judul from votings where id_user='.\Auth::user()->id.'');
		return \View::make('voting.datakandidat')->with('voting', $voting);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new Kandidat;
		$post->id_voting = Input::get('id_voting');
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