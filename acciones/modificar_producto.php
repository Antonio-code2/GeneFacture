<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>modificar</title>
    <link rel="stylesheet" href="../css/formularios.css">
</head>
<body>

<?php

// datos del formulario que se van a editar, se envian con  el metodo GET


$id_producto= $_GET['id_producto'];
$nombre= $_GET['nombre']; 
$cantidad= $_GET['cantidad'];
$valor_unitario= $_GET['valor_unitario'];
$tipo= $_GET["tipo"];


?>
 <div class="formulario_body">
        <div class="contenedor-formulario">
<div class="wrap">
                <form action="modproducto.php" class="formulario" method="POST">
                    <div>
                        <h2>FORMULARIO DE DIAGNOSTICO COVID-19</h2>
                        <h2>editar datos</h2>
                       
                        <div class="input-group">
                        <input type="text" name="id_producto" hidden="enable"  value="<?=$id_producto?>" id=""></td>
                        
                            <input type="text" name="nombre" value="<?=$nombre?>" 
                            id=""
                            placeholder="Nombre del producto">
                            <label class="label" for="nombre"></label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="" name="cantidad" value="<?=$cantidad?>" placeholder="cantidad">
                            <label class="label" for="cantidad"></label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="" name="valor_unitario" placeholder="precio" value="<?=$valor_unitario?>" >
                            <label class="label" for="valor_unitario"></label>
                        </div>
                        
                        <div class="input-group">
                            <input type="text" id="correo" name="tipo" value="<?=$tipo?>" placeholder="tipo de producto">
                            <label class="label" for="tipo"></label>
                        </div>
                      
                        <input type="submit" id="btn-submit" value="Actualizar"> <input type="reset" id="btn-submit_1" value="Limpiar">

                        <input type="button" onclick="location.href='../productos.php';" value="Volver">
                    </div>
                </form>
            </div>
        </div>
        </div>
         
</body>
</html>