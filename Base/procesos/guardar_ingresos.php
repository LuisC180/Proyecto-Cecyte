<?php
	require_once "../php/conexiones.php";
	
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


	//$clave=md5($_POST['clave']);

	$query="INSERT INTO alumno(apellidoP,apellidoM,nombre,fecha,grado,grupo,semestre,carrera,concepto,precio) VALUES('$apellidoP','$apellidoM','$nombre','$fecha','$grado','$grupo','$semestre','$carrera','$concepto','$precio')";   
	if($mysqli->query($query)){
		echo "Datos guardados";
	}else{
		echo "Ocurrio error";
	}

    
    $query=mysqli_query($mysqli,"SELECT semestre FROM alumno");  
    if(isset($_POST['semestre']))
    {
        $semestre=$_POST['semestre'];
        echo $semestre;
    }


    
?>





	   