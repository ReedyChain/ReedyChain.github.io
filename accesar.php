<?php
// Credenciales válidas
$usuario_valido = "MarcoUvg";
$contrasena_valida = "Warzone";

// Comprobar si se enviaron datos de inicio de sesión
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email_ingresado = $_POST['email'];
    $contrasena_ingresada = $_POST['password'];

    // Verificar las credenciales ingresadas
    if ($email_ingresado == $usuario_valido && $contrasena_ingresada == $contrasena_valida) {
        // Las credenciales son válidas, se ha autenticado con éxito
        echo "Acceso concedido. Bienvenido, MarcoUvg.";
    } else {
        // Las credenciales son incorrectas
        echo "Acceso denegado. Usuario o contraseña incorrectos.";
}
}
?>