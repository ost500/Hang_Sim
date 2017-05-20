<?php

use Illuminate\Database\Seeder;

class HashtagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hashtag::class, 4)->create();
    }
}
