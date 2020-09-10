<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'description'=> 'this is random text for use in comment section',
        'user_id'=> '1',
        'post_id'=> '2',
    ];
});
