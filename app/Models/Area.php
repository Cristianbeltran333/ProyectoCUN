<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

	protected $table = 'areas';
	protected $fillable = [
		'nombre_area'

	];

public function proyectos(){

	return $this->hasMany('App\Models\Proyecto','cod_area');
}


}
