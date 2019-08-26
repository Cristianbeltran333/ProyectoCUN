<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proyecto;
use Faker\Generator as Faker;

$factory->define(App\Models\Proyecto::class, function (Faker $faker) {
    return [
        
          
          'nombre_proyecto'   => $faker->name,
          'descripcion' => $faker->name,
          'fuente_recurso' => $faker->name,
          'valor'  => $faker->randomDigit,
          'cod_area' => function (){
          	return factory(App\Models\Area::class)->create()->id;
          }
          


    
    ];
});
 