<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' =>  $faker->realText(20),
        'author'    => $faker->name,
        'pages'  =>  $faker->numberBetween(50, 1500),
        'ISBN'    =>  $faker->isbn13,
    ];
});
