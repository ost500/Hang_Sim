<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleList extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hashtags()
    {
        return $this->belongsToMany(Hashtag::class, 'article_list_hashtags');
    }

}
