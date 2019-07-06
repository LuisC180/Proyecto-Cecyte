<?php
require('../conexion.php');
$id_concepto = $_POST['id_concepto'];
$sql="SELECT costo FROM ingresos_conceptos WHERE id = '$id_concepto'";
$result = $conexion->query($sql)->fetch_assoc()['costo'];
echo $result;
?>