@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>{{ $article -> title}} </h1></div>

                <div class="panel-body">
                    <h3>Category: {{ $article -> category }} &emsp;&emsp; Author: {{ $article -> author }} </h3>
	
					<p>
						Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then
					</p>

					<br>

					<h2>User Comments</h2>

				<ul class ="list-group">

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
					<a href = "/comments/{{$comment->id}}/edit"><button type = "submit" class = "btn btn-primary" value = "edit comment">Edit</button></a>
				</li>
				
				<hr>

				@endforeach
			</ul>

							<h3>Add a new Comment<h3>

			<form method = "POST" action = "/articles/{{ $article -> id }}/comments">



				<div class = "form-group">

				<textarea name = "body" class = "form-control">{{ old('body') }}</textarea>

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

	