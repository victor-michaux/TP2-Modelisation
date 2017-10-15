<?php

use Faker\Generator as Faker;

$factory->define(App\Cd::class, function (Faker $faker) {
    return [
        'title' =>  $faker->realText(20),
        'author'    => $faker->name,
        'compositor'    =>  $faker->name,
        'duration'  =>  $faker->numberBetween(10, 200),
    ];
});
