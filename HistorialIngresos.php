<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>

  <!--Icono en pestaña-->
  <link rel="icon" type="image/vnd.microsoft.icon" href="imagenes/Mapa.ico">

  <!--Estilos-->
  <link rel="stylesheet" type="text/css" href="css/style_menu_alumno.css">
  <link rel="stylesheet" type="text/css" href="css/style_menu_izquierdo_alumno.css">
  <link rel="stylesheet" type="text/css" href="css/style_pie_pagina.css">

  <!--Iconos-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>


<body>

  <!--Inicio contenedor Cabecera-->
  <div class="container">
    <br>
    <?php include "MenuSuperior.php"; ?>



  </div>
  <!--Fin contenedor Cabecera-->


  <!--Inicio Contenedor medio-->
  <div class="container">
    <!-- <center><h2>Historial Egresos</h2></center> -->

    <div class="row">
      <!--Inicio de menu izquierdo-->
      <div class="col-sm-3">
        <?php include 'MenuLateral.php' ?>
      </div>

      <!--Fin inicio menu izquierdo-->


      <!--Inicio Contenido central-->
      <div class="col-sm-9">

        <!--Inicio de contenido de caja de texto-->


        <div class="row">
          <div class="col-sm-12">
            <h2>Historial de ingresos alumnos</h2>
            <br><br>
            <a button type="button" class="btn btn-success" href="AgregarIngreso.php">
              Agregar nuevo Ingreso
              <span class="glyphicon glyphicon-plus"></span>
              </button></a>

            <div id="buscador"></div>
            <div id="tabla"></div>

          </div>
        </div>
      </div>
    </div>

    <!-- Modal para edicion de datos -->

    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
          </div>

          <div class="modal-body">

            <form action="./procesos/guardar_ingresos.php" method="POST">
              <label for="txtapellido">Apellido Paterno: </label>
              <input type="text" class="form-control uppercase" placeholder="Ingresa apellido Paterno" name="txtapellidoP">
              <label for="txtapellido">Apellido Materno: </label>
              <input type="text" class="form-control uppercase" placeholder="Ingresa apellido Materno" name="txtapellidoM">
              <label for="txtnombre">Nombre(s): </label>
              <input class="form-control" type="date" value="2019-05-19" name="datefecha">
              <label for="txtgrado">Grado: </label>
              <input class="form-control" type="grado" class="form-control" placeholder="Grado" name="txtgrado">
              <label "for=" txtgrupo">Grupo: </label>
              <input class="form-control" type="grupo" placeholder="Grupo" name="txtgrupo">
              <label for="cmbsemestre">semestre:</label>
              <select class="form-control" name="cmbsemestre">
                <option></option>
                <option>Febrero-Julio</option>
                <option>Agosto-Diciembre</option>
              </select name=concepto>
              <label for="cmbcarrera">Carrera: </label>
              <select class="form-control" name="cmbcarrera">
                <option></option>
                <option>Soporte y Matenimiento al Equipo de Computo</option>
                <option>Enfermeria General</option>
                <option>Proceso de Gestión Administrativa</option>
              </select>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>