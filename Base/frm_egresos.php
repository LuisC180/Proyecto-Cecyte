<!DOCTYPE html>
<html lang="en">
  <body>

  
  <center><h2 class="page-header text-center">EGRESOS </h2></center>

  <div class="card border-success">
   <div class="card-body">

  
   <form action="./procesos/guardar_egresos.php" method="POST">
  
    <div class="row">
  <div class="col-xl-12">
    <label>Nombre de egreso: </label>
    <input type="text" class="form-control uppercase"  placeholder="Digite egreso" name="txtN_egreso">
  </div>


  <div class="col-xl-12">
    <label>Detalle egreso: </label>
    <input type="text" class="form-control uppercase"  placeholder="Digite detalle" name="txtD_egreso">
  </div>


  <div class="col-sm-6">
    <label>Valor $: </label>
    <input type="text" class="form-control uppercase"  name="txtCosto">
  </div>  
  
  <div class="col-sm-6">
      <label>Fecha: </label>
    <input class="form-control" type="date" value="2019-08-19"  name="dateFecha">
  </div>

</div>
<br>

  <!--inicio Boton Editar-->
 
  <!--Fin Boton Editar-->

  <!--inicio Boton Editar-->
  <button href="egresos.php" type="submit" name="agregar" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button></div>
  <!--Fin Boton Editar-->

</div>
  </body>

</html>