<?php namespace App\Http\Controllers;

use App\Movie;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MoviesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$movies = Movie::all();
		return view('movies.index', compact('movies'));
	}

	
	public function create()
	{
		return view("movies.create");
	}

	
	public function store(MovieRequest $request)
	{
		$input = $request->all();
		$movie = new Movie($input);
		$movie->save($input);
		return redirect('movies');
	}

	
	public function show($id)
	{
		$movie = Movie::find($id);

		return view('movies.show', compact('movie'));
	}

	
	public function edit($id)
	{
		$movie = Movie::find($id);
		return view('movies.edit', compact('movie'));
	}

	
	public function update($id)
	{
		$movie = Movie::find($id);
		$input = $request->all();
		$movie->update($input);
		return redirect('movies');	
	}

	
	public function destroy($id)
	{
		Movie::destroy($id);
		return redirect('movies');
	}

}
