<?php 
$host="localhost";
$user="root";
$pass="";
$db="sistema_login";
$conn=mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>