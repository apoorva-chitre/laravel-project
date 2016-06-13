@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

            	<div class="panel-body">
<p>
  You have received a new message from your website contact form.
</p>

<p>
  Here are the details:
</p>

<ul>
  <li>Name: <strong>{{ $name }}</strong></li>
  <li>Email: <strong>{{ $email }}</strong></li>
</ul>

<hr>

<p>
  @foreach ($messageLines as $messageLine)
    {{ $messageLine }}<br>
  @endforeach
</p>

<hr>
</div>

			</div>
		</div>
	</div>		
</div>

@endsection