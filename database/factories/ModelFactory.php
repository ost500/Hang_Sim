<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\ArticleList::class, function (Faker\Generator $faker) {

    $userIds = App\User::pluck('id')->toArray();

    return [
        'title' => $faker->sentence,
        'contents' => $faker->paragraph,
        'user_id' => $faker->randomElement($userIds),
    ];
});
$factory->define(App\Hashtag::class, function (Faker\Generator $faker) {

    return [
        'hashtag' => '#'.$faker->name
    ];
});
$factory->define(App\ArticleListHashtag::class, function (Faker\Generator $faker) {

    $articlelistIds = App\ArticleList::pluck('id')->toArray();
    $hashtagIds = App\Hashtag::pluck('id')->toArray();

    return [
        'article_list_id'=> $faker->randomElement($articlelistIds),
        'hashtag_id'=> $faker->randomElement($hashtagIds),

    ];
});
