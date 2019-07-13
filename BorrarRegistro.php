<?php
require('conexion.php');

if (isset($_GET['id']) && isset($_GET['tabla'])) {
    $sql = "DELETE FROM $_GET[tabla] WHERE ID = $_GET[id]";
    
    if ($conexion->query($sql) === TRUE) {
        echo "<h1>Registro Borrado Correctamente<h1>";
        echo "<script> setTimeout(function () { window.location.href='index.php'; },3000); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}else{
    echo "Error al Borrar Registro";
}
?>