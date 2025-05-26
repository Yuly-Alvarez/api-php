

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
        <form action="">
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
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><a href="">Editar</a></th>
                    <th><a href="">Eliminar</a></th>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>