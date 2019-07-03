<?php
	require_once "../php/conexiones.php";
	
	$N_egreso=$_POST['txtN_egreso'];
	$D_egreso=$_POST['txtD_egreso'];
	$Costo=$_POST['txtCosto'];
	$Fecha=$_POST['dateFecha'];	
	//$clave=md5($_POST['clave']);
	
	$query="INSERT INTO egresos(
		N_egreso,D_egreso,Costo,Fecha)
		VALUES('$N_egreso','$D_egreso','$Costo','$Fecha')";   
	
	if($mysqli->query($query)){
		echo "Datos guardados";
	}else{
		echo "Ocurrio error";
	}


    
?>





	   