<?php

use Faker\Generator as Faker;

$factory->define(App\Dvd::class, function (Faker $faker) {
    return [
        'title' =>  $faker->realText(20),
        'producer'    => $faker->name,
        'actors'    =>  $faker->name . ', ' . $faker->name . ', ' . $faker->name,
        'duration'  =>  $faker->numberBetween(60, 300),
    ];
});
