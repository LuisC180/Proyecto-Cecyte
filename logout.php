<?php
session_start();

unset($_SESSION['loggedin']);
session_destroy();
echo "<h1>Sesion Cerrada<h1>";
echo "<script> setTimeout(function () { window.location.href='index.php'; },3000); </script>";
?>