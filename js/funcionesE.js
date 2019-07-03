

function agregardatos (N_egreso,D_egreso,Costo,
						Fecha){//(nombre,apellido,email,telefono)


	cadena="N_egreso=" + apellidoP +
			"D_egreso=" + apellidoM +
			"Costo=" + nombre +
			"Fecha=" + fecha;
			
			

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tablaE').load('componentes/tablaE.php');
				 $('#buscadorE').load('componentes/buscadorE.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#id_egreso').val(d[0]);
	$('#N_egreso').val(d[1]);
	$('#D_egreso').val(d[2]);
	$('#Costo').val(d[3]);
	$('#Fecha').val(d[4]);
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
				$('#tablaE').load('componentes/tablaE.php');
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
					$('#tablaE').load('componentes/tablaE.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}