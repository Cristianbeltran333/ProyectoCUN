<?php

use Illuminate\Database\Seeder;
use App\Models\Contrato;

class Contratoseed extends Seeder
{
   
    public function run(){
  
    Contrato::create([
     
    'nombre_contrato'              =>'Vial' ,     
    'tipo_contrato'                =>'Remodelacion',
    'modalidad_contratacion'       =>'Presencial', 
    ]); 


    Contrato::create([
     
    'nombre_contrato'              =>'Arrendamiento' ,     
    'tipo_contrato'                =>'Alquiler',
    'modalidad_contratacion'       =>'Diseño', 
    ]);
   }
}

