<?php 

//conectar base de datos
require ("../config/conectar_db.php");


//recibir datos a modificar

$id_clientes = $_POST["id_clientes"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$cedula = $_POST["cedula"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];


//actualizacion de los datos en la base de datos

$sql = "UPDATE clientes SET nombre='$nombre', apellidos='$apellidos', cedula='$cedula', correo='$correo', telefono='$telefono' WHERE id_clientes='$id_clientes' ";

$result = mysqli_query($conexion_db, $sql);

if($result){
   
 header ("location: ../clientes.php");
}
else{
    echo "actualizacion fallida";
}








?>