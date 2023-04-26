<?php

require 'conexion.php';

// Obtener los valores enviados desde el formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];

// Preparar la consulta SQL
$sql = "INSERT INTO Sesion (Usuario, Passw, email)
VALUES ('$nombre', '$apellido', '$email')";

// Ejecutar la consulta SQL
if ($conn->query($sql) == TRUE) {
  echo "Datos agregados correctamente";
} else {
  echo "Error al agregar datos: ";
}

?>