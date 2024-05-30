<?php   
$db_host = 'localhost';
$db_username = 'scamarenas481';
$db_password = '1234';
$db_name = 'hino';

$db = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$db) {
    echo 'Error al conectar a la base de datos: ' . mysqli_connect_error();
    exit;
}