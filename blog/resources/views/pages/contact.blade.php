@extends('layout')


@section('content')

<h1><center>Connect with me!</center></h1>

<form method = "POST" action = "/pages/contact">

				<div class = "form-group">

				Your Name:  <input type="text" class = "form-control" name="name" ><br>
				Your Email:  <input type ="text" class = "form-control" name="email"></input><br>

				Your Message:<br><textarea name = "message" class = "form-control"></textarea>

				<br>
				<button type = "submit" class = "btn btn-primary" value = "submit">Send</button>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>
</form>


@stop