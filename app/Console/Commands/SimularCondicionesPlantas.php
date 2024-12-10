<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Planta;
use App\Models\Medicion;

class SimularCondicionesPlantas extends Command
{



    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'plantas:simular-condiciones';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simula condiciones ambientales para las plantas cada 5 minutos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $plantas = Planta::all();

        foreach ($plantas as $planta) {
            // Generar valores aleatorios para las condiciones ambientales
            $temperatura = rand(15, 40); // Ejemplo: Temperatura entre 15°C y 40°C
            $ph = rand(40, 80) / 10;    // Ejemplo: PH entre 4.0 y 8.0
            $humedad = rand(30, 100);   // Ejemplo: Humedad entre 30% y 100%

            // Guardar las mediciones simuladas
            Medicion::create([
                'planta_id' => $planta->id,
                'temperatura' => $temperatura,
                'ph' => $ph,
                'humedad' => $humedad,
            ]);

            // Comparar con los rangos ideales
            $estado = 'Ideal';

            if (
                $temperatura < $planta->temperatura_min || $temperatura > $planta->temperatura_max ||
                $ph < $planta->ph_min || $ph > $planta->ph_max ||
                $humedad < $planta->humedad_min || $humedad > $planta->humedad_max
            ) {
                $estado = 'Peligro';
            }

            // Mostrar el resultado en la consola
            $this->info("Planta: {$planta->nombre} - Estado: {$estado}");
        }
    }
}
