<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;

$suffix = [
'villa',
'Home',
'Luxrey Home',
'Cheap House',
'Rooms',
];

$factory->define(Bookable::class, function (Faker $faker) use($suffix){
    return [
        'title' => $faker->city.' '.Arr::random($suffix) ,
        'description' =>$faker->text()
    ];
});
