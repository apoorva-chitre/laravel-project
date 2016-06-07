<?php

namespace App\Http\Controllers;

use App\Article;

use App\Comment;

use Illuminate\Http\Request;


class CommentsController extends Controller
{
    //

    public function store(Request $request, Article $article) {

        $this -> validate($request, [


            'body' => 'required|min:10'


            ]);

    
        $comment = new Comment($request->all());

        if ($request->user())
        {

            $comment->user_id = $request->user()->id;

        }

        //$comment->user_id = Auth::user()->id;
        echo $article->addComment($comment);
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
