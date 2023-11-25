<?php
session_start();

// Desactivar todas las variables de sesión
$_SESSION = array();

// Borrar la cookie de sesión
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 86400, "/"); // Establece la expiración a tiempo pasado
}

// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio de sesión
header("Location: ../subpages/login.php");
exit();
?>

