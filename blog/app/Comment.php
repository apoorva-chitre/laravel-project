<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $fillable = ['body'];
	
    //relationship from comment to article

    public function article() {

    	return $this ->belongsTo(Article::class);

    }

    
}
