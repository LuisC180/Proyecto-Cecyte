<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$apellidoP=$_POST['txtapellidoP'];
	$apellidoM=$_POST['txtapellidoM'];
	$nombre=$_POST['txtnombre'];
	$grado=$_POST['txtgrado'];
	$grupo=$_POST['txtgrupo'];
	$semestre=$_POST['cmbsemestre'];  
	$carrera=$_POST['cmbcarrera'];
	
	// $id_alumno=$_POST['id_alumno'];
	// $apellidoP=$_POST['txtapellidoP'];
	// $apellidoM=$_POST['txtapellidoM'];
	// $nombre=$_POST['txtnombre'];
	// $grado=$_POST['txtgrado'];
	// $grupo=$_POST['txtgrupo'];
 //    $semestre=$_POST['cmbsemestre']

	$sql="UPDATE alumno set apellidoP='$apellidoP',
							apellidoM='$apellidoM',
							nombre='$nombre',
							grado='$grado',
							grupo='$grupo',
							semestre='$semestre',
							carrera='$cmbcarrera'

				where id_alumno='$id_alumno'";
	echo $result=mysqli_query($conexion,$sql);

 ?>