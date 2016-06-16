@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

	<div class="panel-heading"><h3>Your Account</h></div>

	 <div class="panel-body">

	<form method = "POST" action = " {{ route('account.save') }}" enctype="multipart/form-data">


				<div class = "form-group">

					<label for="name">Name: </label>
					<input type ="text" name="name" class="form-control" value="{{ $user->name}}" id="name">
				</div>

				<div class = "form-group">

					<label for="name">Email: </label>
					<input type ="text" name="email" class="form-control" value="{{ $user->email}}" id="email">
				</div>

				<div class = "form-group">

					<label for="image"> Image (only .jpg)</label>
					<input type= "file" name="image" class= "form-control" id="image">

				</div>

				<br>

				<button type = "submit" class = "btn btn-primary" >Save Account</button>

				<input type="hidden" name="_token" value="{{ Session::token() }}">
	</form>
	  </div>

	  @if (Storage::disk('local')->has( $user->name . '-' . $user->id . '.jpg'))
	  	<section class= "row-new-post">

	  		<div class= "col-md-6 col-md-offset-3">

	  			<img src= "{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}" alt= "" class= "img-responsive">

	  		</div>
	  	</section>
	  	@endif
			</div>
		</div>
	</div>		
</div>

@stop