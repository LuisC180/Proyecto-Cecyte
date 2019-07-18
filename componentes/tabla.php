
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?> 
 	<!--<form action="./componentes/tabla.php" method="GET">-->
   <form action="./componentes/tabla.php" method="GET">
			<div class="col-sm-3">
				<label>Fecha Inicio: </label>
				<input class="form-control" type="text" placeholder="Fecha de Inicio" name="fecha_inicio">
			</div>
			<div class="col-sm-3">
				<label>Fecha Fin: </label>
				<input class="form-control" type="text" placeholder="Fecha de Fin" name="fecha_fin">
			</div>
			<button type="submit" name="agregar" class="btn btn-success">Consultar</button>
		
		</form>

 		
		<table class="table table-hover table-condensed table-bordered">
		
		<br>		
		<br>
	

			<th>apellido Paterno</th>
			<th>apellido Materno</th>
			<th>nombre</th>
			<th>fecha</th>
			<th>grado</th>
			<th>grupo</th>
			<th>semestre</th>
			<th>carrera</th>
			<th>concepto</th>
			<th>valor</th>
			<th>Imprimir</th>
		   
		   </th>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$id_alumno=$_SESSION['consulta'];
						if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];

							$sql="SELECT id_alumno,apellidoP,apellidoM,nombre,
							fecha,grado,grupo,semestre,carrera,concepto,precio
							from alumno where id_alumno='$id_alumno' and fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
						}else{
								$sql="SELECT id_alumno,apellidoP,apellidoM,nombre,
							fecha,grado,grupo,semestre,carrera,concepto,precio
							from alumno where id_alumno='$id_alumno'";
						}
						
					}else{
						if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];

								$sql="SELECT id_alumno,apellidoP,apellidoM,nombre,
							fecha,grado,grupo,semestre,carrera,concepto,precio
							from alumno where fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
						}else{
							$sql="SELECT id_alumno,apellidoP,apellidoM,nombre,
						fecha,grado,grupo,semestre,carrera,concepto,precio
						from alumno" ;
						}
					}
				}else{
					if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];

							$sql="SELECT id_alumno,apellidoP,apellidoM,nombre,
					fecha,grado,grupo,semestre,carrera,concepto,precio
						from alumno where fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
					}else{
						$sql="SELECT id_alumno,apellidoP,apellidoM,nombre,
					fecha,grado,grupo,semestre,carrera,concepto,precio
						from alumno";
					}
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					// $datos=$ver[0]."||".
					// 	   $ver[1]."||".
					// 	   $ver[2]."||".
					// 	   $ver[3]."||".
					// 	   $ver[4]."||".
					// 	   $ver[5]."||".
					// 	   $ver[6]."||".
					// 	   $ver[7]."||".
					// 	   $ver[8]."||".
					// 	   $ver[9];
			 ?>
			 		<!--inicio Tabla-->
			<tr>

				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[9] ?></td>
				<td><?php echo $ver[10]?></td>
				<td>
	 <a type="button" class="btn btn-success" href="GererarPDF.php?id=<?php echo $ver[0] ?>">
    <span class="glyphicon glyphicon-print"></span>Imprimir</a>
	</td>
				<!-- <td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td> -->
			</tr>
			<?php 
		}
			 ?>
		</table>
		
	</div>
</div>