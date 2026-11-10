
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera actividad Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">
        <h1>Bienvenido a mi proyecto Laravel</h1>
        <p>Esta es mi actividad de HTML, CSS y JavaScript.</p>

        <button onclick="saludar()">Haz clic aquí</button>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
