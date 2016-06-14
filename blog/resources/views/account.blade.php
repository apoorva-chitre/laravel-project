@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

	<div class="panel-heading"><h3>Your Account</h></div>

	 <div class="panel-body">

	<form method = "POST" action = "account.save">


				<div class = "form-group">

					<label for="name">Name: </label>
					<input type ="text" name="name" class="form-control" value="{{ $user->name}}" id="name">
				</div>

				<div class = "form-group">

					<label for=""

				</div>

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