<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Telefono</title>
    <link rel="stylesheet" href="/eysphp5bapple/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Eliminar Telefono</h1>
    <p>¿Estás seguro de que deseas eliminar el teléfono: <?php echo htmlspecialchars($telefono['numero']); ?>?</p>
    <form action="/eysphp5bapple/public/telefono/delete" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($telefono['id']); ?>">
        <input type="submit" value="Eliminar">
    </form>
    <a href="/eysphp5bapple/app/views/telefono/index.php">Cancelar</a>
</div>

</body>
</html>