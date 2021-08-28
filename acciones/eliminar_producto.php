<?php 

$id_producto = $_GET["id_producto"];

// conectar con la base de datos
require ('../config/conectar_db.php');



//consulta
$sql = "DELETE FROM productos WHERE id_producto=" .$id_producto. "";
$result = mysqli_query($conexion_db, $sql);

if($result){
    header ("location: ../productos.php");

}else{
    echo "error al eliminar el producto";
    echo "<a href='../productos.php'><center>volver</center></a>";
}





?>