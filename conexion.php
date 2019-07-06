<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cecyte";

$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
} 
?>