@extends('app')

@section('content')

	<h1>Movies</h1>

	<hr/>
	
	@foreach ($movies as $movie)
		<article>
			<h2> 
				{{ $movie->name }}</a>
			</h2>
			
			<div > {{ $movie->description }} </div>
		</article>
	@endforeach

@stop