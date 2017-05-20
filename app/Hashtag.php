<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    public function article_lists()
    {
        return $this->belongsToMany(ArticleList::class, 'article_list_hashtags');
    }

}
