<?php

use Illuminate\Database\Seeder;
use App\Models\Area;
class Areaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas=[
        	'contabilidad',
        	'finanzas',
        	'recursos humanos',
        	'archivos',
        	'plneacion'
    ];
foreach ($areas as $area) {
	Area::create(['nombre_area'=>$area]);
}
    }
}
