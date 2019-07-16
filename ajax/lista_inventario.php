<?php
require('../conexion.php');

if (isset($_POST['fecha_inicio']) && isset($_POST['fecha_fin'])) {
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $sql = "SELECT * FROM inventario WHERE fecha_ingreso <= '$fecha_fin' AND fecha_ingreso >= '$fecha_inicio'";
}else if(isset($_POST['busqueda'])){
    $sql = "SELECT * FROM inventario WHERE articulo LIKE '%$_POST[busqueda]%' OR descripcion LIKE '%$_POST[busqueda]%'";
} 
$result = $conexion->query($sql);

echo "<tr>
    <th>Articulo</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Fecha Ingreso</th>
    <th>Operaciones</th>
</tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>$row[articulo]</td>";
        echo "<td>$row[descripcion]</td>";
        echo "<td>$row[precio]</td>";
        echo "<td>$row[cantidad]</td>";
        echo "<td>$row[fecha_ingreso]</td>";
        echo "<td>
        <a type='button' class='btn btn-sm btn-success' href='GuardarInventario.php?id=$row[id]'>Modificar</a>
        <a type='button' class='btn btn-sm btn-success' href='ImprimirInventario.php?id=$row[id]'>Imprimir</a>
        <a type='button' class='btn btn-sm btn-success' href='BorrarRegistro.php?id=$row[id]&tabla=inventario'>Borrar</a>
        </td>";
        echo "</tr>";
    }
}
?>