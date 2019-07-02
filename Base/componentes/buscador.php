<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

	$sql="SELECT id_alumno,
				 apellidoP,
				 apellidoM,
				 nombre,
				 fecha,
				 grado,
				 grupo,
				 semestre,
				 carrera,
				 concepto,
				 precio
	from alumno";
	$result=mysqli_query($conexion,$sql);

 ?>

	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-success ">
			<option value="0">Seleciona uno</option>
			<?php
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[1]." ".$ver[2] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
					}
				});
			});
		});
	</script>