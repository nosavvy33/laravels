<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
	protected $table = 'alumno';
     public $timestamps = false;
     protected $primaryKey = 'idalumno';

     public function pasantias(){
     	return $this->hasMany('App\Pasantia','alumno_idalumno','idalumno');
     }

}
