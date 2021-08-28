<?php

   require_once '../config/conectar_db.php';

    insertar($conexion_db);

    function insertar($conexion_db){
        $id_producto= $_POST["id_producto"];
        $nombre= $_POST["nombre"]; #enviar campos del formualrio
        $cantidad= $_POST["cantidad"];
        $valor_unitario= $_POST["valor_unitario"];
        $tipo= $_POST["tipo"];
        
    

        $consulta_db = "INSERT INTO  productos (nombre, cantidad, valor_unitario, tipo) VALUES('$nombre', '$cantidad','$valor_unitario','$tipo')";
        mysqli_query($conexion_db, $consulta_db);
        mysqli_close($conexion_db);
        

      // echo (include("../confirmaciones/guardarproducto.php"));
      header ("location: ../productos.php");

    }
             
    


?>