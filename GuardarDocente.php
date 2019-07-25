<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    }else{
        echo "<h1>Por Favor Inicia Sesión<h1>";
        echo "<script> setTimeout(function () { window.location.href='Login.php'; },3000); </script>";
        exit;
    }
?>
<?php
if (isset($_POST['nombre'])) {

  require('conexion.php');

  $sql = "INSERT INTO docentes 
	(apellido_paterno, apellido_materno, nombre, rfc, curp, fecha_nacimiento, tipo_sangre, lugar_nacimiento, nss, correo_electronico, telefono_casa, telefono_celular,
  colonia, calle, numero_domicilio, codigo_postal, municipio, estado, numero_empleado, fecha_ingreso, estatus, departamento, puesto, horas, ultimo_grado_estudios, carrera_especialidad)
	VALUES ('$_POST[apellido_paterno]', '$_POST[apellido_materno]', '$_POST[nombre]', '$_POST[rfc]', '$_POST[curp]', '$_POST[fecha_nacimiento]', '$_POST[tipo_sangre]', 
  '$_POST[lugar_nacimiento]', '$_POST[nss]', '$_POST[correo_electronico]',  '$_POST[telefono_casa]', '$_POST[telefono_celular]', '$_POST[colonia]', '$_POST[calle]',
  '$_POST[numero_domicilio]', '$_POST[codigo_postal]',  '$_POST[municipio]', '$_POST[estado]', '$_POST[numero_empleado]', '$_POST[fecha_ingreso]', '$_POST[estatus]',
  '$_POST[departamento]', '$_POST[puesto]', '$_POST[horas]', '$_POST[ultimo_grado_estudios]', '$_POST[carrera_especialidad]')";

  if ($conexion->query($sql) === TRUE) {
    echo "<h1>Operacion Exitosa!<h1>";
    echo "<script> setTimeout(function () { window.location.href='index.php'; },3000); </script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
  }
} else {
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
          <br>
          <br>
          <center>
            <h2 class="card-title">ALTA PERSONAL</h2>
          </center><br><br>
          <form action="./GuardarDocente.php" method="POST">
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
                        <input type="text" class="form-control uppercase" name="apellido_paterno">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Apellido Materno: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="apellido_materno">
                      </div>


                      <div class="col-md-4">
                        <STRONG>Nombre(s):</STRONG><br>
                        <input type="text" class="form-control uppercase" name="nombre">
                      </div>
                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-4">
                        <STRONG>RFC: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="rfc">
                      </div>
                      <div class="col-md-4">
                        <STRONG>CURP: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="curp">
                      </div>
                      <div class="col-sm-4">
                        <STRONG>Fecha de nacimiento:</STRONG><br>
                        <input class="form-control" type="date" value="" name="fecha_nacimiento">
                      </div>
                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-4">
                        <STRONG>Tipo de sangre: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="tipo_sangre">
                      </div>
                      <div class="col-md-4">
                        <STRONG>Lugar de nacimiento: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="lugar_nacimiento">
                      </div>
                      <div class="col-md-4">
                        <STRONG>No.IMSS:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="nss">
                      </div>
                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-4">
                        <STRONG>Correo electronico: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="correo_electronico">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Telefono de casa: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="telefono_casa">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Telefono celular:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="telefono_celular">
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
                        <input type="text" class="form-control uppercase" name="colonia">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Calle:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="calle">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Numero:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="numero_domicilio">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <STRONG>Codigo Postal: </STRONG><br>
                        <input type="text" class="form-control uppercase" name="codigo_postal">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Municipio:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="municipio">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Estado:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="estado">
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
                        <input type="text" class="form-control uppercase" name="numero_empleado">
                      </div>

                      <div class="col-sm-4">
                        <STRONG>Fecha de ingreso:</STRONG><br>
                        <input class="form-control" type="date" value="" name="fecha_ingreso">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Estatus:</STRONG>
                        <select class="form-control" name="estatus">
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
                        <input type="text" class="form-control uppercase" name="departamento">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Puesto:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="puesto">
                      </div>

                      <div class="col-md-4">
                        <STRONG>Horas:</STRONG><br>
                        <input type="text" class="form-control uppercase" name="horas">
                      </div>
                    </div>

                   
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">      
                <div class="col-md">        
                <div class="card border-success">
                <div class="card-body">
                  <center><h3 class="card-title">INFORMACIÓN ACADEMICA</h3></center>

                <div class="row">
                <div class="col-md-4">
                  <STRONG>Último grado de estudios:</STRONG>
                  <select class="form-control" name="ultimo_grado_estudios">
                  <option></option>
                  <option value="3">Primaria</option>
                  <option value="4">Secundaria/sec. técnica</option>
                  <option value="5">Carrera comercial</option>
                  <option value="6">Carrera técnica</option>
                  <option value="7">Profesional técnico (CONALEP)</option>
                  <option value="8">Prepa o vocacional</option>
                  <option value="9">T. superior universitario</option>
                  <option value="10">Licenciatura</option>
                  <option value="11">Maestría</option>
                  <option value="12">Doctorado</option>
                  </select>
                  <br>
    
               </div>


              <div class="col-md-8">
                <STRONG> Carrera o especialidad</STRONG><br>
                <input type="text" class="form-control uppercase" name="carrera_especialidad">
              </div>
              </div> 
 <!--Se agrego INFORMACIÓN ACADEMICA   FIN-->

                    <button type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>   
       
          </form>
          
<!--Se agrego INFORMACIÓN ACADEMICA   inicio-->
                
      </div>
    </div>
  </body>

  </html>
<?php } ?>