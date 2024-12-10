<?php

use Illuminate\Database\Seeder;
use App\Models\Planta; 

class PlantaSeeder extends Seeder
{
    public function run()
    {
        Planta::create([
            'nombre' => 'Orquídea',
            'temperatura_min' => 18,
            'temperatura_max' => 30,
            'ph_min' => 5.5,
            'ph_max' => 6.5,
            'humedad_min' => 60,
            'humedad_max' => 80,
        ]);
    }
}
