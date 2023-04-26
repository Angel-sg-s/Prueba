<?php
// Conectar a la base de datos
require 'conexion.php';

$id = $_GET['id'];

// Eliminar un registro
$sql = "DELETE FROM Sesion WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$response = array('eliminado'=>TRUE);
echo json_encode($response);
?>
