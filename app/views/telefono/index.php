<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Telefonos</title>
    <link rel="stylesheet" href="/eysphp5bapple/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Listar Telefonos</h1>
    <a href="/eysphp5bapple/app/views/telefono/create.php"><button>Agregar</button></a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Numero</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($telefonos) && is_array($telefonos)): ?>
                <?php foreach ($telefonos as $telefono): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($telefono['id']); ?></td>
                        <td><?php echo htmlspecialchars($telefono['numero']); ?></td>
                        <td>
    <a href="/eysphp5bapple/public/telefono/edit?id=<?php echo htmlspecialchars($telefono['id']); ?>">
        <button>Editar</button>
    </a>
    <a href="/eysphp5bapple/public/telefono/eliminar?id=<?php echo htmlspecialchars($telefono['id']); ?>" 
       onclick="return confirm('¿Estás seguro de eliminar este registro?');">
        <button>Eliminar</button>
    </a>
</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No hay registros disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="/eysphp5bapple/public/js/script.js"></script>
</body>
</html>