<?php

use Faker\Generator as Faker;
use App\User;
use App\Model\State;
use App\Model\City;

$factory->define(App\Model\Property::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return User::all()->random();
        },
        'name' => $faker->name,
        'address' => $faker->address,
        'beds' => $faker->numberBetween(1,5),
        'bathrooms' => $faker->numberBetween(1,3),
        'price' => $faker->numberBetween(500,5000),
        'property_type' => 'For Sale',
        'img' => '',
        'img1' => '',
        'img2' => '',
        'img3' => '',
        'img4' => '',
        'state_id' => function(){
            return State::all()->random();
        },
        'city_id' => function(){
            return City::all()->random();
        },
        'description' => $faker->paragraph,
        'property_space' => $faker->numberBetween(500,5000),
        'property_age' => $faker->numberBetween(0,30),
        'air_conditioners' => $faker->boolean,
        'telephone' => $faker->phoneNumber,
        'suitable_for' => $faker->randomElement(['Individual','Family','Professional']),
        'wifi' => $faker->boolean,
        'laundry_room' => $faker->boolean,
        'playground' => $faker->boolean,
        'kitchen' => $faker->boolean,
        'parking_space' => $faker->randomElement(['Two Wheelers','Three Wheelers','Four Wheelers']),
        'transportation' => $faker->randomElement(['Bus Stand', 'Railway Station', 'Airport']),
    ];
});
