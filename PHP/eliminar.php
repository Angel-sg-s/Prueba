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

// if ($stmt->rowCount() > 0) {
//     // Si la eliminación fue exitosa, devolver una respuesta JSON con el indicador "eliminado" igual a true
//     $response = array('eliminado' => true);
//     
// } else {
//     // Si la eliminación falló, devolver una respuesta JSON con el indicador "eliminado" igual a false
//     $response = array('eliminado' => false);
//     echo json_encode($response);
// }
?>
