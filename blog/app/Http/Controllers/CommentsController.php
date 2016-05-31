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

    public function edit (Comment $comment) {


    	return view('comments.edit' , compact('comment'));

    }

    public function update(Request $request, Comment $comment, Article $article) {

        $comment->update($request->all());


        return redirect('/articles/' . $comment->article_id);
    }
}
