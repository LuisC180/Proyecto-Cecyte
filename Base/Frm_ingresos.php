<!DOCTYPE html>
<html lang="en">
<body>
	<br>
	<br>
<center><h2 class="card-title">INGRESOS</h2></center>
<div class="card border-success">
   <div class="card-body">
                
	
 	
   	<form action="./procesos/guardar_ingresos.php" method="POST">
	
	
   	<div class="row">
	<div class="col-md-4">
		 <STRONG>Apellido Paterno: </STRONG><br><br>
		<input type="text" class="form-control uppercase"  placeholder="Ingresa apellido Paterno" name="txtapellidoP">
	</div>

	<div class="col-md-4">
		 <STRONG>Apellido Materno: </STRONG><br><br>
		<input type="text" class="form-control uppercase"  placeholder="Ingresa apellido Materno" name="txtapellidoM">
	</div>

		
   	<div class="col-md-4">
		 <STRONG>Nombre(s):</STRONG><br><br>
		<input type="text"class="form-control uppercase"  placeholder="Ingresa Nombre"  name="txtnombre">
	</div>
</div>
<br>
<br>



	<div class="row">
	<div class="col-sm-4">
	   	 <STRONG>Fecha:</STRONG><br><br>
	 	<input class="form-control" type="date" value="2019-05-19"  name="datefecha">
	</div>

	<div class="col-sm-4">
	   	 <STRONG>Grado:</STRONG><br><br>
	 	<input class="form-control" type="grado"class="form-control" placeholder="Grado" name="txtgrado">
	</div>
		 

	<div class="col-sm-4">
		 <STRONG>Grupo:</STRONG><br><br>
		<input class="form-control" type="grupo"  placeholder="Grupo" name="txtgrupo">
	</div>
</div>		
		<br>
		<br>
	
	<div class="row">
	<div class="col-md-6">
		 <STRONG>semestre:</STRONG>
		<select class="form-control" name="cmbsemestre">
		<option></option>
		<option>Febrero-Julio</option>
		<option>Agosto-Diciembre</option>
		</select name=concepto>
	</div>
		
	<div class="col-md-6">
    	 <STRONG>Carrera:</STRONG>
		<select  class="form-control" name="cmbcarrera">
		<option></option>
		<option>Soporte y Matenimiento al Equipo de Computo</option>
		<option>Enfermeria General</option>
		<option>Proceso de Gestión Administrativa</option>
		</select>
	</div>
	</div>
	
<br>
<br>

		</select name=concepto>

	<div class="row">
	<div class="col-md-6">
		 <STRONG>Concepto:</STRONG>
	    <select class="form-control" name="cmbconcepto">
	   	<option></option>
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
	</div>

	<div class="col-md-6">
		 <STRONG>Valor $:</STRONG>
		<input class="form-control" type="precio"  name="txtprecio"><br>
	</div>
</div>


		 
	    
	    
	   <!-- <div class="row">
	    <div class="col-md-5">
    	<label for="cmbMonto">Concepto: </label>
	    <select class="form-control" name="cmbMonto">
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
	    </select>-->
	   
	   

		
		<!--codigo Clave password
			<label></label><input type="password" name="clave"><br><br>-->
	
		<!-- <div class="container">
		<a button type="button" href="Historial_Ingresos/index.php" class="btn btn-success btn-sm">Historial Ingresos</button></a>  -->
	
		<!--<input class="btn btn-outline-danger" type="submit" name="btnguardar"  value="Guardar">-->
  
  

	<div class="col-md-6">
		<button  href="Historial_Ingresos/index.php" type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
	</div>
		  
    </div>
    </div>
    </div>

		<?php 
		if (@$_POST['btnguardar']) {
				mysql_query("INSERT INTO alumno(apellido,nombre,fecha,grado,grupo,semestre,carrera,concepto,precio) VALUES('$_POST[txtapellidoP]',$_POST[txtapellidoM]', '$_POST[txtnombre]','$_POST[datefecha]','$_POST[txtgrado]','$_POST[txtgrupo]','$_POST[cmbsemestre]','$_POST[cmbcarrera]','$_POST[cmbconcepto]','$_POST[txtprecio]')");
			# code...
		}
		 ?>
		</form>
	  <!--<button type="button" class="btn btn-outline-info">Actualizar</button>
  <button type="button" class="btn btn-outline-danger">Eliminar</button>-->
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () Aa
        
   // <!-- YOUR CONTENT ENDS HERE -->


   //<!-- JavaScript: placed at the end of the document so the pages load faster -->
     //   <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


</html>