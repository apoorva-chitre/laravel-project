<?php

namespace App\Http\Controllers;

use App\Article;

use App\Comment;

use Illuminate\Http\Request;


class CommentsController extends Controller
{
    //

    public function store(Request $request, Article $article) {

    

    	$comment = new Comment;


    	$comment->body = $request->body;

    	$article->comments()->save($comment);

    	return redirect('/articles/' . $article->id);
    }
}
