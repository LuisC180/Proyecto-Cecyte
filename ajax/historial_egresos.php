<?php
require('../conexion.php');

if (isset($_POST['fecha_inicio']) && isset($_POST['fecha_fin'])) {
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $sql = "SELECT * FROM egresos WHERE fecha_egreso <= '$fecha_fin' AND fecha_egreso >= '$fecha_inicio'";
}else if(isset($_POST['busqueda'])){
    $sql = "SELECT * FROM egresos WHERE nombre LIKE '%$_POST[busqueda]%' OR detalle LIKE '%$_POST[busqueda]%'";
} 
$result = $conexion->query($sql);

echo "<tr>
    <th>Nombre</th>
    <th>Detalle</th>
    <th>Costo</th>
    <th>Fecha Egreso</th>
    <th>Operaciones</th>
</tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>$row[nombre]</td>";
        echo "<td>$row[detalle]</td>";
        echo "<td>$row[costo]</td>";
        echo "<td>$row[fecha_egreso]</td>";
        echo "<td>
        <a type='button' class='btn btn-sm btn-success' href='GuardarEgreso.php?id=$row[id]'>Modificar</a>
        <a type='button' class='btn btn-sm btn-success' href='ImprimirEgreso.php?id=$row[id]'>Imprimir</a>
        <a type='button' class='btn btn-sm btn-success' href='BorrarRegistro.php?id=$row[id]&tabla=egresos'>Borrar</a>
        </td>";
        echo "</tr>";
    }
}
?>