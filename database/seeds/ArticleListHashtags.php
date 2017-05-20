<?php

use Illuminate\Database\Seeder;

class ArticleListHashtags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ArticleListHashtag::class, 4)->create();
    }
}
