<?php

use App\ArticleList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UserSeeder::class);
//        $this->call(ArticlesSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ArticleListTableSeeder::class);
        $this->call(HashtagsSeeder::class);
        $this->call(ArticleListHashtags::class);
    }
}
