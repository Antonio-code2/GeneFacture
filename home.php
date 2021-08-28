<?php 


$active_inicio = "active";
$active_clientes = "";
$active_productos = "";
$active_facturas = "";
$title = "GeneFacture | inicio"



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
    <header>
    <?php include ('header.php'); ?>
    </header>

   
<!-- contenedor principal star-->
    <div class="container-fluid">
      <div class="row">

        <!-- navegacion -->
        <?php include ('navbar.php'); ?>

        <!-- main -->
        <?php include ('main.php'); ?>


       
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
