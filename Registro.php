<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    }else{
        echo "<h1>Por Favor Inicia Sesión<h1>";
        echo "<script> setTimeout(function () { window.location.href='Login.php'; },3000); </script>";
        exit;
    }
?>
<?php
require('conexion.php');
//REGISTRO NUEVO EN LA BASE DE DATOS
if (isset($_POST['nombre']) AND isset($_POST['correo']) AND isset($_POST['contrasena'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

	$sql = "INSERT INTO usuarios 
	(nombre, correo, contrasena)
	VALUES ('$nombre', '$correo', '$contrasena')";

	if ($conexion->query($sql) === TRUE){
		echo "<h1>Operacion Exitosa!<h1>";
		echo "<script> setTimeout(function () { window.location.href='index.php'; },3000); </script>";
	} else {
		echo "Error: ".$sql."<br>".$conexion->error;
	}
}else{
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Registrar Usuario</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!--css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="/css/index.css">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="./imagenes/user.png" th:src="./imagenes/user.png"/>
                </div>
                <form class="col-12" action="Registro.php" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de Usuario" name="nombre"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Correo" name="correo"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="contrasena"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Registrar Usuario </button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
<?php } ?>