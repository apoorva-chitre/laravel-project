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

                    <article class ="article" data-articleId = "{{ $article->id }}" data-articleTitle = "{{ $article->title }}" data-articleCategory = "{{ $article->category }}" data-articleBody = "{{ $article->body }}">

					<div>

						<a href = "/articles/{{ $article -> path() }}" >{{ $article -> title }}</a>
                   
						<br>
						Category :{{ $article -> category }}
						<br>
						By {{ $article ->user->name }}
			
					</div>
                    <div id="article-menu">

                        <a href="#" class="like">{{ Auth::user()->likes()->where('article_id', $article->id)->first() ? Auth::user()->likes()->where('article_id', $article->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'  }}</a>|
                        <a href="#" class="like">{{ Auth::user()->likes()->where('article_id', $article->id)->first() ? Auth::user()->likes()->where('article_id', $article->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'  }}</a>
                        @if(Auth::user() == $article->user)
                        |<a href="#" class="edit-article-button" data-article-id="{{ $article -> id }}">Edit</a>|
                        <a href = "/articles/{{ $article -> id }}/delete">Delete</a>
                        @endif
                    </div>

                    <hr/>
                    </article>
					@endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit-article-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Article</h4>
      </div>
      <div class="modal-body">

        <form>
            <div class="form-group">

                <input type="text" name="title" id="article-title-edit" style="width: 552px; padding: 4px;">

            </div>

            <div class= "form-group">

                <input type="text" name="category" id="article-category-edit" style="width: 552px; padding: 4px;">
            
            </div>

            <div class= "form-group">

                <textarea name = "article-body" class = "form-control" id ="article-body-edit" rows="5"></textarea>
            
            </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id= "modal-save">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
var token = '{{Session::token() }}';
var urlLike = "{{ route('like') }}";
var urlEdit = "{{ route('articles-edit') }}";
 </script>
@endsection
