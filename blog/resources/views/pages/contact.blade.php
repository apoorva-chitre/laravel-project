@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Connect with me!</h3></div>

				<div class="panel-body">

					<ul>
   					 	@foreach($errors->all() as $error)
        				<li>{{ $error }}</li>
    					@endforeach
					</ul>
                   
                    
                    <form method = "POST" action = "/contacts">

					<div class = "form-group">

						Your Name:  <input type="text" class = "form-control" name="name" ><br>
						Your Email:  <input type ="text" class = "form-control" name="email"></input><br>

						Your Message:<br><textarea name = "message" class = "form-control"></textarea>

						<br>
						<button type = "submit" class = "btn btn-primary" value = "submit">Send</button>

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection