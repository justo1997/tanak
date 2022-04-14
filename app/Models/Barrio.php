<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    protected $table = 'GEO_BARRIOS';

    public function ciudades(){
        return $this->belongsTo('App\Ciudad', 'ID_CIUDAD');
    }
}
