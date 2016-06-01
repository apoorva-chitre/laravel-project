<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    //

    public function index() {

    	$articles = Article::all();

    	return view('articles.index', compact('articles'));

    }

    public function show(Article $article) {


    	$article->load('comments.user');

    
    	return view('articles.show' , compact('article'));

    }
}
