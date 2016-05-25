@extends('layout')


@section('content')

<h1> Apoorva Chitre's Blog </h1>


	@foreach ($articles as $article)

		<div>

			{ $article -> title }}
			<br>
			{{ $article -> category }}
			<br>
			{{ $article -> author }}
			
		</div><hr/>

	@endforeach

@stop