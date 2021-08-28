<?php 

//conectar bade de datos

require ("../config/conectar_db.php");

//recibir datos a modificar

$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$valor_unitario = $_POST['valor_unitario'];
$tipo =  $_POST['tipo'];

//actualizacion de los datos en la base de datos

$sql = "UPDATE productos SET nombre='$nombre',cantidad='$cantidad',valor_unitario='$valor_unitario',tipo='$tipo' WHERE id_producto='$id_producto' ";

$result = mysqli_query($conexion_db, $sql);

if($result){
    header("location: ../productos.php");

}else{
    echo "actualizacion fallida";
    echo "<a href='../productos.php'><center>volver</center></a>";
}



?>