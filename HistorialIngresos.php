<?php
require('conexion.php');

$sql = "SELECT * FROM ingresos";
$result = $conexion->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <link rel="icon" type="image/vnd.microsoft.icon" href="imagenes/Mapa.ico">
  <link rel="stylesheet" type="text/css" href="css/style_menu_alumno.css">
  <link rel="stylesheet" type="text/css" href="css/style_menu_izquierdo_alumno.css">
  <link rel="stylesheet" type="text/css" href="css/style_pie_pagina.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>


<body>
  <div class="container">
    <br>
    <?php include "MenuSuperior.php"; ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php include 'MenuLateral.php' ?>
      </div>
      <div class="col-sm-9">
        <div class="row">
          <div class="col-sm-12">
            <h2>Historial de ingresos alumnos</h2>
            <br><br>
            <a button type="button" class="btn btn-success" href="AgregarIngreso.php">
              Agregar nuevo Ingreso
              <span class="glyphicon glyphicon-plus"></span>
              </button>
            </a>
            <table class="table table-sm table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Grado</th>
                <th>Grupo</th>
                <th>Semestre</th>
                <th>Carrera</th>
                <th>Concepto</th>
                <th>Costo</th>
              </tr>
              <?php
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
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
              ?>

              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>