<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Message::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(3),
        'user_id' => function() {
            return factory(\App\User::class)->create()->id;
        }
    ];
});
