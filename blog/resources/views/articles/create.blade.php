@extends('layouts.app')

@section('content')

    @include('message-block')

<div class= "container">

	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

            	<div class="panel-heading">
            		<h2>Create a new blog article</h2>
            	</div>

            	<div class= "panel-body">

            		<form method = "POST" action="/articles/create">

            			<div class="form-group">

            				<input type="text" name="title" placeholder="Enter the title" style="width: 552px; padding: 4px;">

            			</div>

            			<div class= "form-group">

            			<input type="text" name="category" placeholder="Enter the category of the article" style="width: 552px; padding: 4px;">
            			</div>

            			<div class= "form-group">

            				<textarea name = "article-body" class = "form-control"></textarea>
            			</div>

            			<button type = "submit" class = "btn btn-primary" value = " Create Article">Create Article</button>

            			<input type="hidden" name="_token" value="{{ csrf_token() }}">

            		</form>



            	</div>

            </div>
        </div>
    </div>

</div>

@endsection