<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'lastName' => $_POST['lastName'],
        'age' => $_POST['age'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ];

    $jsonData = json_encode($data);

    $ch = curl_init('http://localhost:3000/register');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $result = json_decode($response, true);

    if ($httpCode === 201) {
        header("Location: login.php");
        exit();
    } else {
        echo "ERROR " . $result['message'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro de usuarios</title>
</head>
<body>
    <form class="form-container" method="POST" action="register.php">
        <h2>Registro</h2>
        <input type="text" name="name" placeholder="Nombre" required><br>
        <input type="text" name="lastName" placeholder="Apellido" required><br>
        <input type="number" name="age" placeholder="Edad" required><br>
        <input type="email" name="email" placeholder="Correo" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
    <button type="submit">Registrar</button>
</form>
</body>
</html>