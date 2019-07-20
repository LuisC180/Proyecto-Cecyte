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
          <h2 class="card-title">INVENTARIO</h2>
        </center>
        <div class="card border-success">
          <div class="card-body">
            <!--<form action="./AgregarIngreso.php" method="POST">-->
              <div class="row">

                <div class="col-md-3">
                  <STRONG>Artículo: </STRONG><br>
                  <input type="text" class="form-control uppercase"  name="articulo">
                </div>
                <div class="col-md-6">
                  <STRONG>Descrpcion: </STRONG><br>
                  <input type="text" class="form-control uppercase" name="descripcion">
                </div>
               <div class="col-md-3">
                  <STRONG>Precio Unitario: </STRONG><br>
                  <input type="text" class="form-control uppercase" placeholder="$"  name="articulo">
               </div>

             </div>
              <br>

                <div class="row">
                <div class="col-sm-2">
                  <STRONG>Cantidad:</STRONG><br>
                  <input class="form-control" type="text" name="cantidad">
                </div>
                <div class="col-sm-4">
                  <STRONG>Proveedores:</STRONG><br>
                  <input class="form-control" type="text" name="proveedores">
                </div>
                <div class="col-sm-3">
                  <STRONG>Origenes:</STRONG><br>
                  <input class="form-control" type="text" name="origenes">
                </div>
                <div class="col-sm-3">
                  <STRONG>No de Serie:</STRONG><br>
                  <input class="form-control" type="text" name="serie">
                </div>
                </div>

                <div class="row">
                <div class="col-sm-3">
                  <br>
                  <STRONG>Fecha ingreso Cecyt:</STRONG><br>
                  <input class="form-control" type="date" value="" name="fecha_ingreso">
                </div>
                  <div class="col-sm-3">
                    <br>
                 <STRONG>Tipo de invenatario:</STRONG><br>
                  <input class="form-control" placeholder="Información zac" type="text" name="ano">
                </div> 
              
                <div class="col-sm-3">
                  <br>
                  <STRONG>Fecha de registro Zac:</STRONG><br>
                   <input class="form-control" type="date" value=""  name="datefechaRegistro">
                </div>  
                <div class="col-sm-3">
                  <br>
                  <STRONG>ID estatus:</STRONG><br>
                  <input class="form-control" placeholder="Info zac" type="text" name="ano">
              </div>
              </div>
                <br>

                <div class="row">
                <div class="col-sm-3">
                  <STRONG>Marca:</STRONG><br>
                  <input class="form-control" type="text" name="marca">
                </div>
                <div class="col-sm-3">
                  <STRONG>Modelo:</STRONG><br>
                  <input class="form-control" type="text" name="modelo">
                </div>
                <div class="col-md-4">
                  <STRONG>Agregar codigo QR:</STRONG>
                  <input type="file" id="myFile" name="filename2">
                </div>
                </div>
                  <br>
                
                
              <div class="row">
              <div class="col-md-3">
                <STRONG>Mes:</STRONG>
                <select class="form-control" name="mes">
                  <option></option>
                  <option>Enero</option>
                  <option>Febrero</option>
                  <option>Marzo</option>
                  <option>Abril</option>
                  <option>Mayo</option>
                  <option>Junio</option>
                  <option>Julio</option>
                  <option>Agosto</option>
                  <option>Septiembre</option>
                  <option>Octubre</option>
                  <option>Noviembre</option>
                  <option>Diciembre</option>
                </select name=concepto>
              </div>
             
              <div class="col-sm-3">
              <STRONG>Año:</STRONG><br>
               <input class="form-control" type="text" name="ano">
              </div>       
               

            <div class="col-md-6">

              <STRONG>Agregar Imagen:</STRONG>
              <input type="file" id="myFile" name="filename2">
            </div>
            </div>   
              <br>
       <div class="row">
      <div class="col-sm-6">
       <STRONG>Categorias:</STRONG><br>
        <input class="form-control" type="text" name="categorias">
      </div>
       <div class="col-md-4">
     <STRONG>Estado Fisico:</STRONG>
    <select class="form-control" name="fisico">
    <option></option>
    <option>Bueno</option>
    <option>Regular</option>
    <option>Malo</option>
    </select name=concepto>
     </div>
    </div>
   </div>
  </div>


    
</body>
         
             
<br>
<div class="row">      
 <div class="col-md">        
  <div class="card border-success">
   <div class="card-body">
    
     
  <div class="row">
    <div class="col-md-4">
     <STRONG>Area: </STRONG><br>
       <input type="text" class="form-control uppercase" name="area">
     </div>

  <div class="col-md-4">
   <STRONG>Ubicación:</STRONG><br>
    <input type="text" class="form-control uppercase" name="ubicacion">
  </div>

   <div class="col-md-4">
     <STRONG>Empleado:</STRONG><br>
    <input type="text"class="form-control uppercase" name="txtNum">
     </div>
    </div>

<script>

// Agregue el siguiente código si desea que aparezca el nombre del archivo en seleccionar
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    <br>

 
</div>
           


           


</html>

           