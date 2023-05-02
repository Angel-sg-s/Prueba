<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
  <a href="http://localhost/Prueba/index.php">regresar</a>
</body>
</html>