<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $planta->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ0KX0oD7tWvG6XQqG9zB1g9hLg5wKuwF5hb7lDjm6TSz5+0BOu8qqYskjtk" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="details-card">
        <h1>{{ $planta->nombre }}</h1>

        <p><strong>Temperatura:</strong> {{ $planta->temperatura_min }}°C - {{ $planta->temperatura_max }}°C</p>
        <p><strong>PH:</strong> {{ $planta->ph_min }} - {{ $planta->ph_max }}</p>
        <p><strong>Humedad:</strong> {{ $planta->humedad_min }}% - {{ $planta->humedad_max }}%</p>

        <a href="/plantas/{{ $planta->id }}/simulate">Ver Simulación</a>
    </div>
</body>
</html>
