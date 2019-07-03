<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
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
    <?php include "menu_alumno.php"; ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php include 'menu_izquierdo_alumno.php' ?>
      </div>
      <div class="col-sm-9">


        <center>
          <h2 class="page-header text-center">EGRESOS </h2>
        </center>

        <div class="card border-success">
          <div class="card-body">


            <form action="./procesos/guardar_egresos.php" method="POST">

              <div class="row">
                <div class="col-xl-12">
                  <label>Nombre de egreso: </label>
                  <input type="text" class="form-control uppercase" placeholder="Digite egreso" name="txtN_egreso">
                </div>


                <div class="col-xl-12">
                  <label>Detalle egreso: </label>
                  <input type="text" class="form-control uppercase" placeholder="Digite detalle" name="txtD_egreso">
                </div>


                <div class="col-sm-6">
                  <label>Valor $: </label>
                  <input type="text" class="form-control uppercase" name="txtCosto">
                </div>

                <div class="col-sm-6">
                  <label>Fecha: </label>
                  <input class="form-control" type="date" value="2019-08-19" name="dateFecha">
                </div>

              </div>
              <br>

              <!--inicio Boton Editar-->

              <!--Fin Boton Editar-->

              <!--inicio Boton Editar-->
              <button href="egresos.php" type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
          </div>
          <!--Fin Boton Editar-->

        </div>

        <?php
        if (@$_POST['btnguardar']) {
          mysql_query("INSERT INTO alumno(apellido,nombre,fecha,grado,grupo,semestre,carrera,concepto,precio) VALUES('$_POST[txtapellidoP]',$_POST[txtapellidoM]', '$_POST[txtnombre]','$_POST[datefecha]','$_POST[txtgrado]','$_POST[txtgrupo]','$_POST[cmbsemestre]','$_POST[cmbcarrera]','$_POST[cmbconcepto]','$_POST[txtprecio]')");
        }
        ?>
        </form>

      </div>
      <!--Fin Contenido central-->

    </div>
    <!--Fin Contenedor medio-->

    <!--Inicio de pie de pagina-->
    <div class="container">
      <!-- <?php
            ?>-->
    </div>
</body>


</html>