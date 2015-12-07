<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Voting;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;


class VotingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function datavoting()
	{
		return view('voting.datavoting');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$post = new Voting;
		$post->instansi = Input::get('instansi');
		$post->id_user = 1;// \Auth::user()->id;
        $post->tujuan = Input::get('tujuan');
        $post->judul = Input::get('judul');
        $post->start = Input::get('start');
        $post->end= Input::get('end');

        $post->save();

<<<<<<< HEAD
		return redirect(url('/datakandidat'));
=======
<<<<<<< HEAD
		return redirect(url('/datakandidat'));
=======
<<<<<<< HEAD
		return redirect(url('/datakandidat'));
=======
		return redirect(url('/datavoting'));
>>>>>>> 67d2cb4d295418d3d6d78524763a4ae8dd600a6d
>>>>>>> c9aa5721ce89b8073da2a90766ef77598778d7ce
>>>>>>> 32641a6ebc35b9eebdf008748274bcbca3e275ba
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
