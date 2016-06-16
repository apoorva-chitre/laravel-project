<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{
    //
    


    public function index() {
        $url = route('articles-edit', ['article' => 1]);
    	$articles = Article::orderBy('created_at' , 'desc')->get();

    	return view('articles.index', compact('articles'));

    }

    public function show(Article $article) {


    	$article->load('comments.user');

    
    	return view('articles.show' , compact('article'));

    }

    public function delete($article_id) {

    	$article = Article::where('id', $article_id)->first();
    	$article->delete();

    	return redirect('/articles');

    }

    public function  showCreate() {

        return view('articles.create' , compact('article'));

    }

    public function create(Request $request){

            $this-> validate($request, [

            'article-body' => 'required|max:2000',
            'category' => 'required',
            'title' => 'required'

            ]);

            $article = new Article;

            $article->body = $request['article-body'];

            $article->category = $request['category'];

            $article->title = $request['title'];

            $message = 'There was an error creating an new article';

            if($request->user()->articles()->save($article)){


                $message = 'Article Successfully created!';

            }

        return redirect('/articles')->with(['message' => $message]);

    }

    public function edit(Request $request) {

        $this->validate($request, [

            'body' => 'required',
            'title' => 'required',
            'category' => 'required'

            ]);

        $article = Article::find($request['articleId']);
        $article->body = $request['body'];
        $article->title = $request['title'];
        $article->category = $request['category'];
        $article->update();

        return response()->json(['messsage' => 'edit successful'], 200);


    }

}
