<?php
// URL de la API que consulta todos los usuarios
$apiUrl = "http://localhost:3000";

// Obtener datos desde la API
$response = file_get_contents($apiUrl);

// Validar respuesta
if ($response === false) {
    die("Error al conectar con la API");
}

// Decodificar JSON
$usuarios = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios Registrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 style="text-align:center;">Lista de Usuarios Registrados</h2>
    <table class="table-container">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo htmlspecialchars($usuario['name']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['lastName']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['age']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['password']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
