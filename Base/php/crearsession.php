<?php 
	session_start();

	$id_alumno=$_POST['valor'];

	$_SESSION['consulta']=$id_alumno;

	echo $id_alumno;

 ?>