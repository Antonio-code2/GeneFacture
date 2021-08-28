
<?php 
$active_inicio = "";
$active_clientes = "";
$active_productos = "";
$active_facturas = "active";
$title = "GeneFacture | facturas"

// require_once ("config/conectar_db.php");
?>

<!DOCTYPE html>
<html lang="es">
   <!-- head -->
   <head>
    <?php 
    include ('head.php'); ?>
   
 </head>
  <body>
  <header>
    <?php include ('header.php'); ?>
    </header>

        <!-- navegacion -->
        <?php include ('navbar.php'); ?>

        <!-- modal -->
        <?php 
  include ('modal/new_cliente.html');
  include ('modal/new_producto.html');
  include("modal/buscar_productos.php");
  ?>

    <!-- contenedor principal star--> 
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-5">


<div class="container">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4>Nueva factura</h4>
    </div>

<div class="panel-body">
<form class="row g-3 needs-validation" action="" method="POST">

  
  <div class="col-md-4">
    <input id="id_clientes" type='hidden'>
    <label for="nombre" class="form-label">Cliente</label>
		<input type="text" class="form-control input-sm" id="nombre" placeholder="Selecciona un cliente" required>
		
	</div>

  <div class="col-md-4">
    <label for="apellido" class="form-label">Apellido</label>
		<input type="text" class="form-control input-sm" id="apellido" placeholder="" readonly>
	</div>

  <div class="col-md-4">
    <label for="cedula" class="form-label">cedula</label>
		<input type="text" class="form-control input-sm" id="cedula" placeholder="" readonly>
	</div>

  <div class="col-md-4">
    <label for="correo" class="form-label">Email</label>
    <input type="email" class="form-control" id="correo" placeholder="Email" readonly>
  </div>
 
  <div class="col-md-4">
    <label for="telefono" class="form-label">telefono</label>
    <input type="number" class="form-control" id="telefono" value="" readonly>
  </div>

 

  <div class="col-md-6">
    <label for="fecha" class="form-label">fecha</label>
    <input type="text" class="form-control" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
  </div>
 
<div class="col-md-12">
  <div class="pull-right">
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal2">nuevo producto
    </button>
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">nuevo cliente
		</button>
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">agregar productos
		</button>
  </div>
</div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Guardar Factura</button>
  </div>
</form>

<div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax --></div>
</div>
</div>
</div>
</div>

  <footer>
    <?php include ("footer.php"); ?>
  </footer>  


   </body>
</html>