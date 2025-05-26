<?php
// URL de API
$url = "http://localhost:3000";

// Obtener el contenido de la respuesta
$response = file_get_contents($url);

// Convertir JSON a array
$users = json_decode($response, true);

// // Mostrar los datos para depuración
// echo "<pre>";
// print_r($users);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api con php</title>
</head>
<body>
    <div class="formulario">
        <H1>Creación de usuario</H1>
        <form action="crear.php" method="post">
            <input type="text" name="name" placeholder="Nombres">
            <input type="text" name="lastName" placeholder="Apellidos">
            <input type="number" name="age" placeholder="Edad">
            <input type="email" name="email" placeholder="Correo electrónico">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="submit" value="Agregar usuario">
        </form>
    </div>

    <div class="tabla">
        <h1>Consulta de usuarios</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre(s)</th>
                    <th>Apellido(s)</th>
                    <th>Edad</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['lastName']; ?></td>
                    <td><?php echo $user['age']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><a href="">Editar</a></td>
                    <td><a href="">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>