<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Define the relationship between articles and comments

    public function comments() {

    	return $this -> hasMany(Comment::class);

    }


    public function path() {

    	return $this->id;

    }
}
