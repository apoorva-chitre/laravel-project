@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

	<div class="panel-heading"><h1>Edit the Comment</h1></div>

	 <div class="panel-body">

	<form method = "POST" action = "/comments/{{$comment->id}}">

				{{ method_field('PATCH') }}

				<div class = "form-group">

				<textarea name = "body" class = "form-control" >{{ $comment->body }}</textarea>

				<div class = "form-group">

				<br>

				<button type = "submit" class = "btn btn-primary" value = "Add Comment">Update Comment</button>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

	</form>
	  </div>
			</div>
		</div>
	</div>		
</div>

@stop