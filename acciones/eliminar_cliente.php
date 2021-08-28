<?php

$id_clientes=$_GET["id_clientes"];
require ('../config/conectar_db.php');

$sql = "DELETE FROM clientes WHERE id_clientes=" .$id_clientes. "";
$result = mysqli_query($conexion_db, $sql);

if($result){
    echo "<script type=\"text/javascript\">alert('Usuario eliminado'); window.location='../clientes.php';</script>";
     header ("location: ../clientes.php");
}
else{
    
    echo "<a href='../clientes.php'>volver</a>";
}



?>
