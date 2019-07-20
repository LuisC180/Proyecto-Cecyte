<?php
require('../conexion.php');

if (isset($_POST['fecha_inicio']) && isset($_POST['fecha_fin'])) {
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $sql = "SELECT
    ingresos.id,
    ingresos.nombre,
    ingresos.apellido_paterno,
    ingresos.apellido_materno,
    ingresos.fecha_ingreso,
    ingresos.grado,
    ingresos.grupo,
    ingresos.semestre,
    ingresos.carrera,
    ingresos_conceptos.concepto,
    ingresos_conceptos.costo
    FROM ingresos JOIN ingresos_conceptos ON ingresos.concepto = ingresos_conceptos.id WHERE ingresos.fecha_ingreso <= '$fecha_fin' AND ingresos.fecha_ingreso >= '$fecha_inicio'";
    $result = $conexion->query($sql);
}else if(isset($_POST['busqueda'])){
    $sql = "SELECT
    ingresos.id,
    ingresos.nombre,
    ingresos.apellido_paterno,
    ingresos.apellido_materno,
    ingresos.fecha_ingreso,
    ingresos.grado,
    ingresos.grupo,
    ingresos.semestre,
    ingresos.carrera,
    ingresos_conceptos.concepto,
    ingresos_conceptos.costo
    FROM ingresos JOIN ingresos_conceptos ON ingresos.concepto = ingresos_conceptos.id 
    WHERE ingresos.nombre LIKE '%$_POST[busqueda]%' OR ingresos_conceptos.concepto LIKE '%$_POST[busqueda]%'";
    $result = $conexion->query($sql);
} 
echo "<tr>
        <th>Nombre</th>
        <th>Fecha de ingreso</th>
        <th>Grado</th>
        <th>Grupo</th>
        <th>Semestre</th>
        <th>Carrera</th>
        <th>Concepto</th>
        <th>Costo</th>
        <th>Operaciones</th>
    </tr>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>$row[nombre] $row[apellido_paterno] $row[apellido_materno]</td>";
            echo "<td>$row[fecha_ingreso]</td>";
            echo "<td>$row[grado]</td>";
            echo "<td>$row[grupo]</td>";
            echo "<td>$row[semestre]</td>";
            echo "<td>$row[carrera]</td>";
            echo "<td>$row[concepto]</td>";
            echo "<td>$ $row[costo]</td>";
            echo "<td>
            <a type='button' class='btn btn-sm btn-success' href='GuardarIngreso.php?id=$row[id]'>Modificar</a>
            <a type='button' class='btn btn-sm btn-success' href='ImprimirIngreso.php?id=$row[id]'>Imprimir</a>
            <a type='button' class='btn btn-sm btn-success' href='BorrarRegistro.php?id=$row[id]&tabla=ingresos'>Borrar</a>
            </td>";
            echo "</tr>";
        }
    }
?>