<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Telefono</title>
    <link rel="stylesheet" href="/eysphp5bapple/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Crear Nuevo Telefono</h1>
    <form action="/eysphp5bapple/public/telefono/create" method="POST">
        <label for="numero">Numero:</label>
        <input type="text" name="numero" id="numero" required>
        <input type="submit" value="Crear">
    </form>
    <a href="/eysphp5bapple/app/views/telefono/index.php">Volver a la lista</a>
</div>

</body>
</html>