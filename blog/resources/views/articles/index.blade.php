@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Apoorva Chitre's Blog</div>

                <div class="panel-body">
                    
                	@foreach ($articles as $article)

					<div>

						<a href = "/articles/{{ $article -> path() }}" >{{ $article -> title }}</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href = "/articles/{{ $article -> id }}/delete"><button class="btn btn-danger btn-xs" name = "deleteArticle">Delete</button></a>
                   
						<br>
						{{ $article -> category }}
						<br>
						{{ $article -> author }}
			
					</div>

                    <hr/>

					@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
