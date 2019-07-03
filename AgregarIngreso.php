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

				<br>
				<br>

				<center>
					<h2 class="card-title">INGRESOS</h2>
				</center>
				<div class="card border-success">
					<div class="card-body">
						<form action="./procesos/guardar_ingresos.php" method="POST">
							<div class="row">
								<div class="col-md-4">
									<STRONG>Apellido Paterno: </STRONG><br><br>
									<input type="text" class="form-control uppercase" placeholder="Ingresa apellido Paterno" name="txtapellidoP">
								</div>
								<div class="col-md-4">
									<STRONG>Apellido Materno: </STRONG><br><br>
									<input type="text" class="form-control uppercase" placeholder="Ingresa apellido Materno" name="txtapellidoM">
								</div>
								<div class="col-md-4">
									<STRONG>Nombre(s):</STRONG><br><br>
									<input type="text" class="form-control uppercase" placeholder="Ingresa Nombre" name="txtnombre">
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="col-sm-4">
									<STRONG>Fecha:</STRONG><br><br>
									<input class="form-control" type="date" value="" name="datefecha">
								</div>
								<div class="col-sm-4">
									<STRONG>Grado:</STRONG><br><br>
									<input class="form-control" type="grado" class="form-control" placeholder="Grado" name="txtgrado">
								</div>
								<div class="col-sm-4">
									<STRONG>Grupo:</STRONG><br><br>
									<input class="form-control" type="grupo" placeholder="Grupo" name="txtgrupo">
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
									<select class="form-control" name="cmbcarrera">
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
										<option>Reposición o Duplicado de Certificados $250 </option>
										<option>Constancia de estudios $25</option>
										<option>Expedición de títulos de técnico CECyTEZ $250</option>
										<option>Reposición de credencial $100</option>
										<option> Evaluación de extraordinario $100</option>
										<option> Curso intersemestral $150</option>
										<option> Recursamiento de asignatura $300</option>
										<option> Cuotas voluntarias $600</option>
										<option> Credencial $30</option>
										<option> Cuotas Voluntarias con 50% de condonación $300</option>
										<option> Cuotas Voluntarias con 100% de condonación $0</option>
										<option> Cooperación para material de exámenes $70</option>
									</select name=concepto>
								</div>
								<div class="col-md-6">
									<STRONG>Valor $:</STRONG>
									<input class="form-control" type="precio" name="txtprecio"><br>
								</div>
							</div>
							<div class="col-md-6">
								<button href="Historial_Ingresos/index.php" type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
							</div>

					</div>
				</div>
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