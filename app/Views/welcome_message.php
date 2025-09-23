<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>

<body>
<h1>ES MI PRIMER POYECTO</h1>

<p>Si ves esta página, significa que CodeIgniter 4 se ha instalado correctamente.</p>

<!-- Formulario de ejemplo -->
<form action="/matriculas/public/guardar" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono"><br><br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>