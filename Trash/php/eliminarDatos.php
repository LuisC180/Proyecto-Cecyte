
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id_alumno=$_POST['id_alumno'];

	$sql="DELETE from comoquieras where id_alumno='$id_alumno'";
	echo $result=mysqli_query($conexion,$sql);
 ?>