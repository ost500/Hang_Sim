<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function article_lists()
    {
        return $this->hasMany(ArticleList::class);
    }
}
