<?php 
  session_start();

  unset($_SESSION['consulta']);
 ?>
            
<!DOCTYPE html>
<html>
<head>

	<title>Historial Ingresos</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head>

<body>
<div class="row">
  <div class="col-sm-12">
  <h2>Historial de ingresos alumnos</h2>
  <br><br>
    <a button type="button" class="btn btn-success" href="AgregarIngreso.php"  >
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
    <input type="text" class="form-control uppercase"  placeholder="Ingresa apellido Paterno"  name="txtapellidoP">
<label for="txtapellido">Apellido Materno: </label>
    <input type="text" class="form-control uppercase"  placeholder="Ingresa apellido Materno" name="txtapellidoM">
<label for="txtnombre">Nombre(s): </label>
    <input class="form-control" type="date" value="2019-05-19"  name="datefecha">
<label for="txtgrado">Grado: </label>
    <input class="form-control" type="grado"class="form-control" placeholder="Grado" name="txtgrado">
<label "for="txtgrupo">Grupo: </label>
    <input class="form-control" type="grupo"  placeholder="Grupo" name="txtgrupo">
<label for="cmbsemestre">semestre:</label>
    <select class="form-control" name="cmbsemestre">
    <option></option>
    <option>Febrero-Julio</option>
    <option>Agosto-Diciembre</option>
    </select name=concepto>
<label for="cmbcarrera">Carrera: </label>
    <select  class="form-control" name="cmbcarrera">
    <option></option>
    <option>Soporte y Matenimiento al Equipo de Computo</option>
    <option>Enfermeria General</option>
    <option>Proceso de Gestión Administrativa</option>
    </select>

     <!--  <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	<label>Apellido</label>
        	<input type="text" name="" id="apellidou" class="form-control input-sm">
        	<label>Email</label>
        	<input type="text" name="" id="emailu" class="form-control input-sm">
        	<label>telefono</label>
        	<input type="text" name="" id="telefonou" class="form-control input-sm">
      </div> -->
    <!--   <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button> -->
        
      </div>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          apellidoP=$('#apellidoP').val();
          apellidoM=$('#apellidoM').val();
          nombre=$('#nombre').val();
          fecha=$('#fecha').val();
          grado=$('#grado').val();
          grupo=$('#grupo').val();
          semestre=$('#semestre').val();
          carrera=$('#carrera').val();
          concepto=$('#concepto').val();
          precio=$('#precio').val();
            agregardatos(apellidoP,apellidoM,nombre,fecha,grado,grupo,semestre,carrera,concepto,precio);
        });



        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });
</script>