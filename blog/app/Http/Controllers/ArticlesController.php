<?php

namespace App\Http\Controllers;

use App\Article;

use App\Like;

use App\User;

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

    public function likeArticle(Request $request){

        $article_id = $request['articleId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $article = Article::find($article_id);
        if (!$article) {

            return null;

        }

        $user = Auth::user();

        $like = $user->likes()->where('article_id', $article_id)->first();

        if($like) {

            $already_like = $like->like;
            $update = true;

            if($already_like == $is_like) {

                $like->delete();
                return null;

            }

        } else {

            $like = new Like();

        }

        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->article_id = $article->id;

        if($update) {

            $like->update();

        } else {

            $like->save();


        } 

        return null;

    }

}
