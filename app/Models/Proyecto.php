<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
	protected $fillable = [
		'id',
		'nombre_proyecto',
		'descripcion',
		'fuente_recurso',
		'valor',
		'cod_area'

	];

public function area(){
	return $this->belongsTo('App\Models\Area','cod_area');
}



}
