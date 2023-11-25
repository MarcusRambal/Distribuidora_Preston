<?php
session_start();

// Verificar si hay una sesión iniciada
$sesionIniciada = isset($_SESSION['id']);

// Devolver la información sobre la sesión en formato JSON
echo json_encode(['sesionIniciada' => $sesionIniciada]);
?>
