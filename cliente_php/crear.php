<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        "nombre" => $_POST['nombre'],
        "email" => $_POST['email']
    ];

    $options = [
        "http" => [
            "header"  => "Content-type: application/json",
            "method"  => "POST",
            "content" => json_encode($data)
        ]
    ];

    $context  = stream_context_create($options);
    file_get_contents("http://localhost:3000", false, $context);
    header("Location: index.php");
}
?>

<form method="post">
    Nombre: <input name="nombre"><br>
    Email: <input name="email"><br>
    <button type="submit">Guardar</button>
</form>
