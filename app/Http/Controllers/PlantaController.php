<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    public function index()
    {
        $plantas = Planta::all();
        return view('plantas.index', compact('plantas'));
    }
    
    public function show($id)
    {
        $planta = Planta::findOrFail($id);
        return view('plantas.show', compact('planta'));
    }
    
    public function create()
    {
        return view('plantas.create');
    }
    
    public function store(Request $request)
    {
        // Validar y almacenar los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'temperatura_min' => 'required|numeric',
            'temperatura_max' => 'required|numeric',
            'ph_min' => 'required|numeric',
            'ph_max' => 'required|numeric',
            'humedad_min' => 'required|numeric',
            'humedad_max' => 'required|numeric',
        ]);
    
        Planta::create($validated);
        return redirect('/plantas')->with('success', 'Planta creada exitosamente.');
    }
    
    public function simulate($id)
    {
        $planta = Planta::findOrFail($id);
    
        // Generar valores aleatorios
        $valoresSimulados = [
            'temperatura' => rand(15, 40),
            'ph' => rand(40, 80) / 10,
            'humedad' => rand(30, 100),
        ];
    
        // Comparar con los rangos ideales
        $rangos = [
            'temperatura' => $valoresSimulados['temperatura'] >= $planta->temperatura_min && $valoresSimulados['temperatura'] <= $planta->temperatura_max,
            'ph' => $valoresSimulados['ph'] >= $planta->ph_min && $valoresSimulados['ph'] <= $planta->ph_max,
            'humedad' => $valoresSimulados['humedad'] >= $planta->humedad_min && $valoresSimulados['humedad'] <= $planta->humedad_max,
        ];
    
        // Determinar el estado de la planta
        $estadoColor = '';
        $valoresEnRango = count(array_filter($rangos));
    
        switch ($valoresEnRango) {
            case 3:
                $estadoColor = 'green';
                break;
            case 2:
                $estadoColor = 'yellow';
                break;
            case 1:
                $estadoColor = 'orange';
                break;
            default:
                $estadoColor = 'red';
                break;
        }
    
        return view('plantas.simulate', compact('planta', 'valoresSimulados', 'rangos', 'estadoColor'));
    }
    

}
