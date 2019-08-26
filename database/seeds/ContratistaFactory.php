<?php

use Illuminate\Database\Seeder;

class ContratistaFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

    $contratista = factory(App\Models\Contratista::class, 2)->create();
                                  
                 
                  
    }
}
