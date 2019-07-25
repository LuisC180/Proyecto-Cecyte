<?php
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    }else{
        echo "<h1>Por Favor Inicia Sesión<h1>";
        echo "<script> setTimeout(function () { window.location.href='Login.php'; },3000); </script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <link rel="icon" type="image/vnd.microsoft.icon" href="imagenes/Mapa.ico">

    <link rel="stylesheet" type="text/css" href="css/style_menu_alumno.css">
    <link rel="stylesheet" type="text/css" href="css/style_menu_izquierdo_alumno.css">
    <link rel="stylesheet" type="text/css" href="css/style_pie_pagina.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <?php include "MenuSuperior.php"; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php include 'MenuLateral.php' ?>
            </div>
            <div class="col-sm-9">
            </div>
        </div>
        <div class="container">
</body>

</html>