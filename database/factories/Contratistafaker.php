<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contratista;
use Faker\Generator as Faker;

$factory->define(App\Models\Contratista::class, function (Faker $faker) {
    return [
          
          'nombre'   => $faker->name,
          'apellido' => $faker->name,
          'celular'  => $faker->randomDigit,
          'estado_contratista' => $faker->lastName,

    ];
});
