<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Telefono</title>
    <link rel="stylesheet" href="/eysphp5bapple/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Editar Telefono</h1>
    <form action="/eysphp5bapple/public/telefono/update" method="POST">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($telefono['id']); ?>">
        
        <label for="numero">Numero:</label>
        <input type="text" name="numero" id="numero" value="<?php echo htmlspecialchars($telefono['numero']); ?>" required>
        
        <input type="submit" value="Actualizar">
    </form>

    <a href="/eysphp5bapple/app/views/telefono/index.php">Volver al listado</a>
</div>

</body>
</html>