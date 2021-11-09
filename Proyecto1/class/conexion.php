<?php

$db_host = 'localhost';
$db_name = 'proyecto1';
$db_user = 'root';
$db_pass = '';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($mysqli->connect_error) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}
?>