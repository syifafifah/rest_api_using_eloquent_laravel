<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Menus::class, function (Faker $faker) {
    return [
        'category' => $faker->randomElement($array = array('Appetizers', 'Mains', 'Drinks', 'Desserts')),
        'name' => $faker->unique()->word,
        'desc' => $faker->text($maxChar = 100),
        'prize' => $faker->numberBetween($min = 30000, $max = 100000),
    ];
});
