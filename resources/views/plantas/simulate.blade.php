<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de Condiciones</title>
    <link href="{{ asset('css/planta.css') }}" rel="stylesheet">
</head>

<body>
    <h1>Simulación para: {{ $planta->nombre }}</h1>

    <!-- Estado de la planta -->
    <div class="box {{ $estadoColor }}" id="estado-planta">
        @if ($estadoColor == 'green') 😊 ¡Todo bien!
        @elseif ($estadoColor == 'yellow') 😐 En cuidado
        @elseif ($estadoColor == 'orange') 😟 Preocupado
        @else 😭 Necesito ayuda
        @endif
    </div>

    <hr>
    <hr>
    <hr>
    <hr>

    <!-- Planta -->
    <div class="wrap">
        <div class="base">
            <div class="flowerpot"></div>
            <div class="blade blade-center"></div>
        </div>
    </div>

    <!-- Tabla de condiciones -->
    <table id="tabla-condiciones">
        <thead>
            <tr>
                <th>Condición</th>
                <th>Valor Actual</th>
                <th>Rango Ideal</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Temperatura</td>
                <td>{{ $valoresSimulados['temperatura'] }}°C</td>
                <td>{{ $planta->temperatura_min }}°C - {{ $planta->temperatura_max }}°C</td>
                <td>{{ $rangos['temperatura'] ? '✔️' : '❌' }}</td>
            </tr>
            <tr>
                <td>PH</td>
                <td>{{ $valoresSimulados['ph'] }}</td>
                <td>{{ $planta->ph_min }} - {{ $planta->ph_max }}</td>
                <td>{{ $rangos['ph'] ? '✔️' : '❌' }}</td>
            </tr>
            <tr>
                <td>Humedad</td>
                <td>{{ $valoresSimulados['humedad'] }}%</td>
                <td>{{ $planta->humedad_min }}% - {{ $planta->humedad_max }}%</td>
                <td>{{ $rangos['humedad'] ? '✔️' : '❌' }}</td>
            </tr>
        </tbody>
    </table>

    <!-- Botón para generar nuevos valores -->
    <div class="button-container">
        <button onclick="generarNuevosValores()">Generar Nuevos Valores</button>
    </div>

    <script>
        function generarNuevosValores() {
            location.reload();  // Recarga la página para generar nuevos valores
        }
    </script>
</body>
</html>
