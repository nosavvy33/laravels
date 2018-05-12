<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasantia extends Model
{
    protected $table = 'pasantia';
    protected $primaryKey = 'idpasantia';
    public $timestamps = false;

    public function alumnos(){
    	return $this->belongsTo('App\Alumno','idalumno','alumno_idalumno');
    }

}
