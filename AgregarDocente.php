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
        <br>
        <br>
        <center>
          <h2 class="card-title">ALTA PERSONAL</h2>
        </center><br><br>
        <div class="row">
          <div class="col-md">
            <div class="card border-success">
              <div class="card-body">
                <center>
                  <h3 class="card-title">INFORMACIÓN PERSONAL</h3>
                </center>

                <div class="row">
                  <div class="col-md-4">
                    <STRONG>Apellido Paterno: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtapellidoP">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Apellido Materno: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtapellidoM">
                  </div>


                  <div class="col-md-4">
                    <STRONG>Nombre(s):</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtnombre">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <STRONG>RFC: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtRFC">
                  </div>
                  <div class="col-md-4">
                    <STRONG>CURP: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtCURP">
                  </div>
                  <div class="col-sm-4">
                    <STRONG>Fecha de nacimiento:</STRONG><br>
                    <input class="form-control" type="date" value="" name="datefecha">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <STRONG>Tipo de sangre: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtTipoS">
                  </div>
                  <div class="col-md-4">
                    <STRONG>Lugar de nacimiento: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtLugarN">
                  </div>
                  <div class="col-md-4">
                    <STRONG>No.IMSS:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtIMSS">
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <STRONG>Correo electronico: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtCorreoEle">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Telefono de casa: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtTelefonoCasa">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Telefono celular:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtTelefonoCel">
                  </div>
                </div>
                <br>
              </div>
              <br>
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
                  <h3 class="card-title">DIRECCIÓN</h3>
                </center>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <STRONG>Colonia o Comunidad: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtColonia">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Calle:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtCalle">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Numero:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtNum">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-4">
                    <STRONG>Codigo Postal: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtColonia">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Municipio:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtCalle">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Estado:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtNum">
                  </div>
                </div>
                <br>
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
                  <h3 class="card-title">INFORMACIÓN LABORAL</h3>
                </center>
                <br>

                <div class="row">
                  <div class="col-md-4">
                    <STRONG>No.Empleado: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtNumEmp">
                  </div>

                  <div class="col-sm-4">
                    <STRONG>Fecha de ingreso:</STRONG><br>
                    <input class="form-control" type="date" value="" name="datefecha">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Estatus:</STRONG>
                    <select class="form-control" name="cmbEstatus">
                      <option></option>
                      <option>Empleado Base</option>
                      <option>Empleado Confianza</option>
                      <option>Empleado Interino</option>
                    </select name=concepto>
                  </div>
                </div>
                <br>


                <div class="row">
                  <div class="col-md-4">
                    <STRONG>Departamento: </STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtDepartamento">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Puesto:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtPuesto">
                  </div>

                  <div class="col-md-4">
                    <STRONG>Horas:</STRONG><br>
                    <input type="text" class="form-control uppercase" name="txtHoras">
                  </div>
                </div>
                <br>
                <a href="#" class="btn btn-success">GUARDAR</a>
              </div>
            </div>
          </div>
</body>
</html>