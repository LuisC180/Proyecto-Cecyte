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
        <br>
        <br>

        <!--Inicio de contenido de caja de texto-->
        <center>
          <h2 class="card-title">CEDULA DE CONTROL DE INCIDENCIAS</h2>
        </center><br><br>
        <div class="row">
          <div class="col-md">
            <div class="card border-success">
              <div class="card-body">
                <center>
                  <h3 class="card-title">DATOS DEL TRABAJADOR</h3>
                </center>

                <div class="row">
                  <div class="col-xl-8">
                    <STRONG>Nombre del empleado:</STRONG><br><br>
                    <input type="text" class="form-control uppercase" placeholder="Digite Nombre" name="txtN_Nombre"><br>
                  </div>

                  <div class="col-xl-4">
                    <STRONG>Solicitud de fecha:</STRONG><br><br>
                    <input type="date" class="form-control uppercase" placeholder="Digite Puesto" name="txt_Puesto"><br>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xl-8">
                    <STRONG>Puesto:</STRONG><br><br>
                    <input type="text" class="form-control uppercase" placeholder="Digite Puesto" name="txt_Puesto"><br>
                    <!-- <a  href="#" class="btn btn-success">Entrar</a> -->
                  </div>
                  <div class="col-xl-4">
                    <STRONG>No.empleado:</STRONG><br><br>
                    <input type="text" class="form-control uppercase" placeholder="Digite No.Emp" name="txt_Nemp"><br>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>

            <div class="row">
              <div class="col-md">
                <div class="card border-success">
                  <div class="card-body">
                    <center>
                      <h3 class="card-title">SOLICITUD</h3>
                    </center>

                    <div class="row">
                      <div class="col-xl-4">
                        <STRONG>Cláusula CCT:</STRONG><br><br>
                        <input type="text" class="form-control uppercase" placeholder="Digite Cláusula" name="txt_Clausula"><br>
                      </div>

                      <div class="col-xl-8">
                        <STRONG>Asunto:</STRONG><br><br>
                        <input type="text" class="form-control uppercase" placeholder="Digite Asunto" name="txt_Asunto"><br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xl-4">
                        <STRONG>Documentacion que se anexa:</STRONG><br><br>
                        <input type="text" class="form-control uppercase" placeholder="Digite documentación" name="txt_Asunto"><br>
                        <a href="#" class="btn btn-success">GUARDAR</a>
                      </div>

                      <div class="col-xl-8">
                        <STRONG>Lo anterior por los siguientes motivos:</STRONG><br><br>
                        <textarea class="form-control" placeholder="Digite Motivos" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Fin Contenido central-->

            </div>
            <!--Fin Contenedor medio-->

            <!--Inicio de pie de pagina-->
            <div class="container">
              <!-- <?php 
                    ?>-->
            </div>
            <!--fin de pie de pagina-->

</body>

</html>