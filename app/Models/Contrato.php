<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';
	protected $fillable = [
		'id',
		'nombre_contrato',
		'tipo_contrato',
		'modalidad_contratacion'
		
	];
}
