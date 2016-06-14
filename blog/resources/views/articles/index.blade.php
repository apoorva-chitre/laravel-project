@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <div style="float: left;">

                        <h2>Apoorva Chitre's Blog</h2>

                    </div>

                    <br>
                    <div style="float: right;">

                        <a href ="/articles/create"><button id ="new-article" class = "btn btn-primary btn-md" >New Article</button></a>

                    </div>
                    <br><br><br>
                    

                </div>

                

                <div class="panel-body">
                    
                	@foreach ($articles as $article)

					<div>

						<a href = "/articles/{{ $article -> path() }}" >{{ $article -> title }}</a>
                   
						<br>
						{{ $article -> category }}
						<br>
						{{ $article -> author }}
			
					</div>
                    <div id="article-menu">

                        <a href="#">Like</a>|
                        <a href="#">Dislike</a>|
                        <a href="#">Edit</a>|
                        <a href = "/articles/{{ $article -> id }}/delete">Delete</a>

                    </div>

                    <hr/>

					@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
