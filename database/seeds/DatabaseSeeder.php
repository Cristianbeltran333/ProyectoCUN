<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(FakerAreaTableSeeder::class);   
         //$this->call(Areaseed::class);
         //$this->call(Contratoseed::class);
         //$this->call(ContratistaFactory::class);
         $this->call(ProyectoFaker::class);
         
    }


}
