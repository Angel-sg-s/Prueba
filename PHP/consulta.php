<?php
require 'conexion.php';

$consulta = $conn ->prepare("SELECT Usuario, passw, email FROM Sesion");
$consulta->execute();
$datos = $consulta ->fetchAll(PDO::FETCH_ASSOC);

    ?>