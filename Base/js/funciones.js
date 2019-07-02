

function agregardatos (apellidoP,apellidoM,nombre,
						fecha,grado,grupo,semestre,carrera,concepto,precio){//(nombre,apellido,email,telefono)

	cadena="apellidoP=" + apellidoP +
			"apellidoM=" + apellidoM +
			"nombre=" + nombre +
			"fecha=" + fecha +
			"grado=" + grado +
			"grupo=" + grupo +
			"semestre=" + semestre+
			"carrera=" + carrera+
			"concepto=" + concepto +
			"precio=" + precio;
			
			

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 $('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#id_alumno').val(d[0]);
	$('#apellidoP').val(d[1]);
	$('#apellidoM').val(d[2]);
	$('#nombre').val(d[3]);
	$('#fecha').val(d[4]);
	$('#grado').val(d[5]);
	$('#grupo').val(d[6]);
	$('#semestre').val(d[7]);
	$('#carrera').val(d[8]);
	$('#concepto').val(d[9]);
	$('#precio').val(d[10]);
}

function actualizaDatos(){


	id_alumno=$('#id_alumno').val();
	apellidoP=$('#apellidoP').val();
    apellidoM=$('#apellidoM').val();
    nombre=$('#nombre').val();
    grado=$('#grado').val();
    grupo=$('#grupo').val();
    semestre=$('#semestre').val();
    carrera=$('#carrera').val();
    
	
	// nombre=$('#nombre').val();
	// apellido=$('#apellidou').val();
	// email=$('#emailu').val();
	// telefono=$('#telefonou').val();
	cadena= "id_alumno=" + id_alumno +
			"txtapellidoP=" + apellidoP +
			"txtapellidoM=" + apellidoM +
			"txtnombre=" + nombre +
			"txtgrado=" + grado +
			"txtgrupo=" + grupo +
			"cmbsemestre=" + semestre+
			"cmbcarrera=" + carrera;

	// cadena= "id=" + id +
	// 		"&nombre=" + nombre + 
	// 		"&apellido=" + apellido +
	// 		"&email=" + email +
	// 		"&telefono=" + telefono;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}