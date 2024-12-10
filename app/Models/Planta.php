<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
   
    protected $fillable = [
        'nombre',
        'temperatura_min',
        'temperatura_max',
        'ph_min',
        'ph_max',
        'humedad_min',
        'humedad_max',
    ];


    public function mediciones()
    {
        return $this->hasMany(Medicion::class);
    }
    
    
}
