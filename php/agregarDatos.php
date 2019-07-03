<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$apellidoP=$_POST['txtapellidoP'];
	$apellidoM=$_POST['txtapellidoM'];
	$nombre=$_POST['txtnombre'];
	$fecha=$_POST['datefecha'];
	$grado=$_POST['txtgrado'];
	$grupo=$_POST['txtgrupo'];
    $semestre=$_POST['cmbsemestre'];  
	$carrera=$_POST['cmbcarrera'];
	$concepto=$_POST['cmbconcepto'];
	$precio=$_POST['txtprecio'];
	// $n=$_POST['nombre'];
	// $a=$_POST['apellido'];
	// $e=$_POST['email'];
	// $t=$_POST['telefono'];

	$sql="INSERT into alumno(apellidoP,apellidoM,nombre,fecha,grado,grupo,semestre,carrera,concepto,precio) VALUES('$apellidoP','$apellidoM','$nombre','$fecha','$grado','$grupo','$semestre','$carrera','$concepto','$precio')";
				 
	echo $result=mysqli_query($conexion,$sql);

 ?>