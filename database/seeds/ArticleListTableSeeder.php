<?php

use App\ArticleList;
use Illuminate\Database\Seeder;

class ArticleListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ArticleList::class, 4)->create();
    }
}
