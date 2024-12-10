<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Plantas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ0KX0oD7tWvG6XQqG9zB1g9hLg5wKuwF5hb7lDjm6TSz5+0BOu8qqYskjtk" crossorigin="anonymous">
    <link href="{{ asset('css/lista.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Lista de Plantas</h1>
    
    <hr>
    <a href="/" class="add-plant-button">Agregar Planta</a>


    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plantas as $planta)
                <tr>
                    <td>{{ $planta->nombre }}</td>
                    <td>
                        <a href="/plantas/{{ $planta->id }}" class="btn btn-link">Ver Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
