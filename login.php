<?php

include_once 'conexion.php';








// Validar datos del formulario
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL para verificar el usuario
    $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $resultado = $db->query($consulta);

    // Verificar si el usuario existe
    if ($resultado->num_rows > 0) {
        // Inicio de sesión exitoso
        echo '¡Inicio de sesión exitoso!';
        // Redirigir a la página principal o área de usuario
        header('Location: menu.php');
        exit; // Terminate the script after redirection
    } else {
        // Credenciales incorrectas
        echo 'Error: Correo electrónico o contraseña incorrectos.';
        header('Location: index.html');
    }
}
