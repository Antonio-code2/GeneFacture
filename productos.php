<?php 
$active_inicio = "";
$active_clientes = "";
$active_productos = "active";
$active_facturas = "";
$title = "GeneFacture | productos"



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
        <?php include ("modal/new_producto.html"); ?>
       


<section class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">

        <button type="button" class="btn btn-sm text-dark bg-info mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <h4>Agregar nuevo Producto <i class="bi bi-plus-lg"></i></h4>
        </button>
      
    <table class="table table-striped table-hover table-bordered">
    <thead class="colors text-light">
    <tr>
      <th >Id Producto</th>
      <th >Nombres</th>
      <th >Cantidad</th>
      <th >Precio</th>
      <th >Tipo</th>
      <th >Acciones</th>
    </tr>
  </thead>

  <tbody>

  <?php 

  include ("config/conectar_db.php");
  $sql="SELECT id_producto, nombre, cantidad, valor_unitario, tipo  FROM productos WHERE id_producto=id_producto";

  $result=mysqli_query($conexion_db, $sql);

    while ($cliente=mysqli_fetch_array ($result))
    {
    echo '
    <tr>

    <td>' . $cliente["id_producto"]. '</td>
    
    
    <td>' . $cliente["nombre"]. '</td>
  
    
    <td>' . $cliente["cantidad"]. '</td>
    
    
    <td>' . $cliente["valor_unitario"]. '</td>
    
    
    <td>' . $cliente["tipo"]. '</td>
    
    <td><a type="button" class="btn text-dark bg-info" href="acciones/eliminar_producto.php?id_producto='. $cliente["id_producto"].'"><i class="bi-trash-fill"></i></a>
    <a type="button" class="btn text-dark bg-info"   href="acciones/modificar_producto.php?id_producto='.$cliente["id_producto"].'"><i class="bi-pencil-square"></i></a></td>
    </tr>';

      }
  ?>
        </tbody>
      </table>

     

      
    </section>
  </div>
</div>
<!-- navegacion principal end -->

<!-- script funcionalidades -->
    <script src="js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
  </body>
</html>


