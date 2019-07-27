<?php
require('../conexion.php');

if (isset($_POST['fecha_inicio']) && isset($_POST['fecha_fin'])) {
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $sql = "SELECT * FROM docentes
    WHERE fecha_ingreso <= '$fecha_fin' AND fecha_ingreso >= '$fecha_inicio'";
}else if(isset($_POST['busqueda'])){
    $sql = "SELECT * FROM docentes
    WHERE nombre LIKE '%$_POST[busqueda]%' OR apellido_paterno LIKE '%$_POST[busqueda]%' OR numero_empleado LIKE '%$_POST[busqueda]%'";
} 
$result = $conexion->query($sql);

echo "<tr>
    <th>Nombre</th>
    <th>RFC</th>
    <th>No. Empleado</th>
    <th>Puesto</th>
    <th>Operaciones</th>
</tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>$row[nombre] $row[apellido_paterno] $row[apellido_materno]</td>";
        echo "<td>$row[rfc]</td>";
        echo "<td>$row[numero_empleado]</td>";
        echo "<td>$row[puesto]</td>";
        echo "<td>
        <a type='button' class='btn btn-sm btn-success' href='GuardarDocente.php?id=$row[id]'>Modificar</a>
        <a type='button' class='btn btn-sm btn-success' href='ImprimirDocente.php?id=$row[id]'>Imprimir</a>
        <a type='button' class='btn btn-sm btn-success' href='BorrarRegistro.php?id=$row[id]&tabla=docentes'>Borrar</a>
        </td>";
        echo "</tr>";
    }
}
?>