

<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>

<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$id_egreso=$_SESSION['consulta'];
						if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];


	
							$sql="SELECT Fecha
							from egresos where fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
						}else{
								$sql="SELECT Fecha
							from egresos where id_egreso='$id_egreso,'";
						}
						
					}else{
						if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];

								$sql="SELECT Fecha
							from egresos where fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
						}else{
							$sql="SELECT Fecha
							from egresos" ;
						}
					}
				}else{
					if(isset($_GET['fecha_inicio']) AND isset($_GET['fecha_fin'])){
							$fecha_inicio = $_GET['fecha_inicio'];
							$fecha_fin = $_GET['fecha_fin'];

							$sql="SELECT Fecha
							from egresos where fecha >= '$fecha_inicio' and fecha <= '$fecha_fin'";
					}else{
						$sql="SELECT Fecha
						from egresos";
					}
				}



 <?php //Ejemplo aprenderaprogramar.com

$diametro = $_POST['diam'];

$altura = $_POST['altu'];

$radio = $diametro/2;

$Pi = 3.141593;

$volumen = $Pi*$radio*$radio*$altura;

echo "<br/> &nbsp; El volumen del cilindro es de". $volumen. "metros cúbicos";

?>