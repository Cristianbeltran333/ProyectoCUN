<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contratista extends Model
{
    protected $table = 'contratistas';
	protected $fillable = [
		'nombre',
		'aplellido',
		'celular',
		'estado_contratista'

	];
}
