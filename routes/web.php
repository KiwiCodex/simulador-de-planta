<?php

use Illuminate\Support\Facades\Route;
use App\Models\Planta;
use App\Http\Controllers\PlantaController;


Route::get('/', function () {
    $plantas = Planta::all();
    return view('plantas.create', compact('plantas'));
});

Route::get('/plantas/{id}', function ($id) {
    $planta = Planta::findOrFail($id);
    return view('plantas.show', compact('planta'));
});

Route::get('/plantas/crear', function () {
    return view('plantas.create');  
});



Route::get('/plantas', [PlantaController::class, 'index']); // Lista de plantas
Route::get('/plantas/crear', [PlantaController::class, 'create']); // Formulario de creación de planta
Route::post('/plantas', [PlantaController::class, 'store']); // Almacenar nueva planta
Route::get('/plantas/{id}', [PlantaController::class, 'show']); // Mostrar planta individual
Route::get('/plantas/{id}/simulate', [PlantaController::class, 'simulate']); //Simulación de Planta

