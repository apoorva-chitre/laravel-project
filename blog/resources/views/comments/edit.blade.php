@extends('layout')


@section('content')

	<h1>Edit the Comment</h1>

	<form method = "POST" action = "/comments/{{$comment->id}}">

				{{ method_field('PATCH') }}

				<div class = "form-group">

				<textarea name = "body" class = "form-control">{{ $comment->body }}</textarea>

				<div class = "form-group">

				<br>

				<button type = "submit" class = "btn btn-primary" value = "Add Comment">Update Comment</button>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			</form>

@stop