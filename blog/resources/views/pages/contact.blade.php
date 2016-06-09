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
                   
                    {!! Form::open(array('route' => 'contact_store', 'class' => 'form', 'id' => 'contact-form')) !!}

                

					<div class = "form-group">

						{!! Form::label('Your Name') !!}
    					{!! Form::text('name', null, 
      					array('required', 
            			'class'=>'form-control', 
              			'placeholder'=>'Your name')) !!}
              		</div>

              		<div class="form-group">
    					{!! Form::label('Your E-mail Address') !!}
    					{!! Form::text('email', null, 
        				array('required', 
              			'class'=>'form-control', 
              			'placeholder'=>'Your e-mail address')) !!}
					</div>

					
					<div class="form-group">
    					{!! Form::label('Your Message') !!}
    					{!! Form::textarea('message', null, 
      					array('required', 
              			'class'=>'form-control', 
              			'placeholder'=>'Your message')) !!}
					</div>

					<div class="form-group">
    					{!! Form::submit('Send!', 
      					array('class'=>'btn btn-primary')) !!}
					</div>

					{!! Form::close() !!}
						
					
                </div>
            </div>
        </div>
    </div>
</div>


@endsection