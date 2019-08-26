<?php

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoFaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Area::class, 5)->create()
        ->each(function ($area) {
        	$area->proyectos()->save(factory(App\Models\Proyecto::class)->make());
        });
    }
}
