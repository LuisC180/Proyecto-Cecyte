<?php
require('../conexion.php');

if (isset($_POST['fecha_inicio']) && isset($_POST['fecha_fin'])) {
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $sql = "SELECT * FROM ingresos JOIN ingresos_conceptos ON ingresos.concepto = ingresos_conceptos.id WHERE fecha_ingreso <= '$fecha_fin' AND fecha_ingreso >= '$fecha_inicio'";
    $result = $conexion->query($sql);

    echo "<tr>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Grado</th>
        <th>Grupo</th>
        <th>Semestre</th>
        <th>Carrera</th>
        <th>Concepto</th>
        <th>Costo</th>
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
            echo "</tr>";
        }
    }
}
?>