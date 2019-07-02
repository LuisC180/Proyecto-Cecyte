<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Historial Egresos</title>
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
  <h2>Historial Egresos</h2>
  <br><br>
    <a button type="button" class="btn btn-success" href="BaseEgreso.php"  >
        Agregar nuevo Egreso
        <span class="glyphicon glyphicon-plus"></span>
    </button></a>
    

	
    <div id="buscadorE"></div>
		<div id="tablaE"></div>
	


	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
        
        <form action="./procesos/guardar_ingresos.php" method="POST">        
        
        <label for="txtapellido">Apellido Paterno: </label>
    <input type="text" class="form-control uppercase"  placeholder="Ingresa apellido Paterno" name="txtapellidoP">

<label for="txtapellido">Apellido Materno: </label>
    <input type="text" class="form-control uppercase"  placeholder="Ingresa apellido Materno" name="txtapellidoM">

<label for="txtnombre">Nombre(s): </label>
    <input type="text"class="form-control uppercase"  placeholder="Ingresa Nombre"  name="txtnombre">

<label for="datefecha">Fecha: </label>
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

<label for="cmbconcepto">Concepto: </label>
      <select class="form-control" name="cmbconcepto">
      <option>Certificado $100</option>
        <option>Reposición o Duplicado de Certificados $250  </option>
        <option>Constancia de estudios $25</option>
        <option>Expedición de títulos de técnico CECyTEZ $250</option>
        <option>Reposición de credencial $100</option>
    <option> Evaluación de extraordinario $100</option>
    <option> Curso intersemestral $150</option>
    <option> Recursamiento de asignatura $300</option>
    <option> Cuotas voluntarias $600</option>
    <option> Credencial $30</option>
    <option> Cuotas Voluntarias con 50% de condonación $300</option>
    <option> Cuotas Voluntarias con 100% de condonación  $0</option>
    <option> Cooperación para material de exámenes $70</option>
    </select name=concepto>
<label "for="txtprecio">Precio: </label>
    <input class="form-control" type="precio"  placeholder="precio $" name="txtprecio"><br>
    </div>
  </div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaE').load('componentes/tablaE.php');
    $('#buscadorE').load('componentes/buscadorE.php');
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