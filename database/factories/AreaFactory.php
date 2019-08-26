<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Area;
use Faker\Generator as Faker;

$factory->define(App\Models\Area::class, function (Faker $faker) {
    return [
       'nombre_area' => $faker->name,
    ];
});
