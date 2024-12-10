<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicion extends Model
{
    protected $table = 'mediciones';
    
    protected $fillable = [
        'planta_id',
        'temperatura',
        'ph',
        'humedad',
    ];

    public function planta()
    {
        return $this->belongsTo(Planta::class);
    }
}