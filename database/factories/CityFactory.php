<?php

use Faker\Generator as Faker;

$factory->define(App\Model\City::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
