
<?php
// Conectar a la base de datos
require 'conexion.php';

// Verificar si se ha enviado el ID del registro y el nombre de la tabla
if (isset($_GET['id']) && isset($_GET['tabla'])) {
    $id = $_GET['id'];
    $tabla = $_GET['tabla'];

    // Eliminar un registro
    $sql = "DELETE FROM Sesion WHERE id = :d";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':d', $id);
    $stmt->execute();

    // Devolver respuesta en formato JSON
    $response = array('eliminado' => true);
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    $response = array('eliminado' => false);
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
