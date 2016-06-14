@extends('layouts.app')


@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script type="text/javascript">

        $('#add-comment').on('submit' , function(e) {

        	e.preventDefault();

            $.ajax({

                type: "POST",
                url: "/articles/{{ $article -> id }}/comments",
                data : {newComment: $('#new-comment').val()},
                success: function(data) {

                    alert(data);
                },

        		error: function() {
         		$('#add-comment').html('<p>An error has occurred</p>');
     		 },

     		 complete: function(){
     			$('#add-comment').html('<p>it worked!</p>');
  			 }

            });

            return false;

        });

    </script>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $article -> title}} </h1></div>

                <div class="panel-body">
                    <h3>Category: {{ $article -> category }} &emsp;&emsp; Author: {{ $article ->user->name }} </h3>
	
					<p>
						{{ $article->body }}
					</p>

					<br>

					<h2>User Comments</h2>

				<ul class ="list-group" id="comment">

				@foreach ($article->comments as $comment)


				<li class="list-group-item">

					{{ $comment->body }}

				<span class="pull-right">

					@if ( $comment->user)
					@if ( $comment->user->name )

					<a href="#">{{ $comment->user->name }}</a>
					@endif
					@endif

				</span>
					&nbsp;&nbsp;
					<a href = "/comments/{{$comment->id}}/edit"><button type = "submit" class = "btn btn-primary btn-xs" value = "edit comment">Edit</button></a>
					
				</li>
				
				<hr>

				@endforeach
			</ul>

							<h3>Add a new Comment<h3>

			<form id="add-comment" method = "POST">



				<div class = "form-group">

				<textarea name = "body" id = "new-comment" class = "form-control"></textarea>

				<div class = "form-group">

				<br>

				<button type = "submit" class = "btn btn-primary" value = "Add Comment">Add Comment</button>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

			</form>


			@if (count($errors))

				<ul>
					@foreach ($errors->all() as $error)

					<li>{{ $error }}</li>

					@endforeach
				</ul>

			@endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

	