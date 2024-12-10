<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Planta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ0KX0oD7tWvG6XQqG9zB1g9hLg5wKuwF5hb7lDjm6TSz5+0BOu8qqYskjtk" crossorigin="anonymous">
    <!-- Estilo personalizado -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <div class="card">
        <h1>Crear nueva planta</h1>
        <form action="/plantas" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="temperatura_min" class="form-label">Temperatura Mínima:</label>
                <input type="number" class="form-control" name="temperatura_min" required>
            </div>

            <div class="mb-3">
                <label for="temperatura_max" class="form-label">Temperatura Máxima:</label>
                <input type="number" class="form-control" name="temperatura_max" required>
            </div>

            <div class="mb-3">
                <label for="ph_min" class="form-label">PH Mínimo:</label>
                <input type="number" class="form-control" name="ph_min" required>
            </div>

            <div class="mb-3">
                <label for="ph_max" class="form-label">PH Máximo:</label>
                <input type="number" class="form-control" name="ph_max" required>
            </div>

            <div class="mb-3">
                <label for="humedad_min" class="form-label">Humedad Mínima:</label>
                <input type="number" class="form-control" name="humedad_min" required>
            </div>

            <div class="mb-3">
                <label for="humedad_max" class="form-label">Humedad Máxima:</label>
                <input type="number" class="form-control" name="humedad_max" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Crear Planta</button>
            <a href="/plantas" class="btn btn-success">Volver a la lista de plantas</a>
        </form>
    </div>

</body>
</html>
