<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $table = 'denuncia';
    protected $primaryKey = 'iddenuncia';
    public $timestamps = false;
    
}
