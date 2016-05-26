@extends('layout')


@section('content')

<h1><center> Apoorva Chitre's Blog </center></h1>


	@foreach ($articles as $article)

		<div>

			<a href = "/articles/{{ $article -> path() }}" >{{ $article -> title }}</a>
			<br>
			{{ $article -> category }}
			<br>
			{{ $article -> author }}
			
		</div><hr/>

	@endforeach

@stop