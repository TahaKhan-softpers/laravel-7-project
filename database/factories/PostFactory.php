<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->title,
        'image'=> $faker->randomNumber(),
        'description' => 'this is random text description for post created',
        'user_id'=> factory(App\User::class),
        'location_id' =>'1',
        'update_id' => '1',

    ];
});
