<?php
session_start();
require('conexion.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = $conexion->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if (password_verify($contrasena, $row['contrasena'])){
        $_SESSION['loggedin'] = true;
        echo "<h1>Bienvenido ".$row['nombre']."<h1>";
        echo "<script> setTimeout(function () { window.location.href='index.php'; },3000); </script>";
    }else{
        echo "<h1>Usuario o Contraseña incorrectos<h1>";
        echo "<script> setTimeout(function () { window.location.href='Login.php'; },3000); </script>";
    }
}else{
    echo "<h1>Usuario o Contraseña incorrectos<h1>";
    echo "<script> setTimeout(function () { window.location.href='Login.php'; },3000); </script>";
}


?>