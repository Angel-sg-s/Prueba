<?php
$serverName = "Angel\ANGEL_SUCLUPE";
$connectionOptions = array(
    "Database" => "Prueba",
    "Uid" => "sa",
    "PWD" => "AS261103w"
);

$conn = new PDO("sqlsrv:server=$serverName;Database={$connectionOptions['Database']}",$connectionOptions['Uid'], $connectionOptions['PWD']);

?>