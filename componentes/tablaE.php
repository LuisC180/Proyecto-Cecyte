
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
 

<!-- <div class="row">
	<div class="col-sm-12">
	<h1>Historial de Egresos</h1> -->


		
		
		<!-- 	<a button type="button" class="btn btn-success" href="/CECYTEZ/egresos.php"  >
				Agregar nuevo Egreso
				<span class="glyphicon glyphicon-plus"></span>
			</button> -->
		
		<table class="table table-hover table-condensed table-bordered">
		<br>		
		<br>
		
		

			
			<th>Nombre del Egreso</td>
			<th>Detalle</th>
			<th>Valor</th>
			<th>fecha</th>
			<th>Editar</th>
						
			</th>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$id_egreso=$_SESSION['consulta'];
						if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];


	
							$sql="SELECT id_egreso,N_egreso,D_egreso,Costo,Fecha
							from egresos where N_egreso='$N_egreso' and fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
						}else{
								$sql="SELECT id_egreso,N_egreso,D_egreso,Costo,Fecha
							from egresos where id_egreso='$id_egreso,'";
						}
						
					}else{
						if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];

								$sql="SELECT id_egreso,N_egreso,D_egreso,Costo,Fecha
							from egresos where fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
						}else{
							$sql="SELECT id_egreso,N_egreso,D_egreso,Costo,Fecha
							from egresos" ;
						}
					}
				}else{
					if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];

							$sql="SELECT id_egreso,N_egreso,D_egreso,Costo,Fecha
							from egresos where fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
					}else{
						$sql="SELECT id_egreso,N_egreso,D_egreso,Costo,Fecha
						from egresos";
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
				<td><button type="button" class="btn btn-success">
    <span class="glyphicon glyphicon-print"></span>Imprimir</button></td>
				
			
						
<!-- 					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button> -->
				
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