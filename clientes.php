<?php 
$active_inicio = "";
$active_clientes = "active";
$active_productos = "";
$active_facturas = "";
$title = "GeneFacture | clientes"


?>

<!DOCTYPE html>
<html lang="es">
  <!-- head -->
 <head>
    <?php 
    include ('head.php'); ?>
   
 </head>

  <!-- body -->
  <body>
    <!-- header -->
    <?php 
    include ('header.php'); ?>

   
<!-- contenedor principal star-->
    <div class="container-fluid">
      <div class="row">

        <!-- navegacion -->
       <?php include ('navbar.php'); ?>

        <!-- main -->

         <!-- modal -->
         <?php include ("modal/new_cliente.html");
        ?>
       


<section class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">
<button type="button" class="btn btn-sm text-dark bg-info  mb-4 " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <h4>Agregar nuevo Cliente <i class="bi bi-plus-lg"></i></h4>
        </button>
  <table class="table table table-striped table-hover table-bordered">
  <thead class="colors text-light">
    <tr>
      <th >Id clientes</th>
      <th >Nombres</th>
      <th >Apellidos</th>
      <th >cedula</th>
      <th >Email</th>
      <th >Telefono</th>
      <th >Acciones</th>
    </tr>
  </thead>

  <tbody>

  <?php 

  

  include ("config/conectar_db.php");
  $sql="SELECT id_clientes, nombre, apellidos, cedula, correo, telefono  FROM clientes WHERE id_clientes=id_clientes";

  $result=mysqli_query($conexion_db, $sql);

    while ($cliente=mysqli_fetch_array ($result))
    {
    echo '
    <tr>

    <td>' . $cliente["id_clientes"]. '</td>
    
    
    <td>' . $cliente["nombre"]. '</td>
  
    
    <td>' . $cliente["apellidos"]. '</td>
    
    
    <td>' . $cliente["cedula"]. '</td>
    
    
    <td>' . $cliente["correo"]. '</td>
    
    
    <td>' . $cliente["telefono"]. '</td>

    <td><a type="button" class="btn text-dark bg-info" href="acciones/eliminar_cliente.php?id_clientes='. $cliente["id_clientes"].'"><i class="bi-trash-fill"></i></a>
    
     <a type="button" class="btn text-dark bg-info"   href="acciones/modificar_cliente.php?id_clientes='.$cliente["id_clientes"].'"><i class="bi-pencil-square"></i></a></td>
    </tr>';

      }


     
  ?>
        </tbody>
      </table>
    </section>
  </div>
</div>
<!-- navegacion principal end -->

<footer>
  <?php 
  include("footer.php") ?>
</footer>
    
  </body>
</html>


