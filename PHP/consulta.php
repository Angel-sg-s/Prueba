<?php
require 'conexion.php';

$consulta = $conn ->prepare("SELECT Usuario, Passw, email, id FROM Sesion");
$consulta->execute();
$datos = $consulta ->fetchAll(PDO::FETCH_ASSOC);

// Convertir los datos a JSON y enviarlos como respuesta
header('Content-Type: application/json');
echo json_encode($datos);
?>
