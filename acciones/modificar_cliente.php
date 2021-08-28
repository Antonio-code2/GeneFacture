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

require ("../config/conectar_db.php");
$id_clientes= $_GET['id_clientes'];
$nombre= $_GET['nombre']; 
$apellidos= $_GET["apellidos"];
$cedula= $_GET["cedula"];
$correo= $_GET["correo"];
$telefono= $_GET["telefono"];

?>
 <div class="formulario_body">
        <div class="contenedor-formulario">
<div class="wrap">
                <form action="modcliente.php" class="formulario" method="POST">
                    <div>
                        <h2>FORMULARIO DE DIAGNOSTICO COVID-19</h2>
                        <h2>editar datos</h2>
                       
                        <div class="input-group">
                        <input type="text" name="id_clientes" hidden="enable"  value="<?=$id_clientes?>" id=""></td>
                        
                            <input type="text" name="nombre" value="<?=$nombre?>" 
                            id="nombre"
                            placeholder="Nombre">
                            <label class="label" for="nombre"></label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="apellidos" name="apellidos" value="<?=$apellidos?>" placeholder="Apellidos">
                            <label class="label" for="apellido"></label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="cedula" name="cedula" placeholder="Cedula" value="<?=$cedula?>" >
                            <label class="label" for="cedula"></label>
                        </div>
                        
                        <div class="input-group">
                            <input type="text" id="correo" name="correo" value="<?=$correo?>" placeholder="Correo">
                            <label class="label" for="correo"></label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="telefono" name="telefono" placeholder="Telefono" value="<?=$telefono?>"  >
                            <label class="label" for="telefono"></label>
                        </div>
                    


                       
                     
                        <input type="submit" id="btn-submit" value="Actualizar"> <input type="reset" id="btn-submit_1" value="Limpiar">
                        <input type="button" onclick="location.href='../clientes.php';" value="Volver">
                    </div>
                </form>
            </div>
        </div>
        </div>
         
</body>
</html>
