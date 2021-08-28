<?php

   require_once '../config/conectar_db.php';

    insertar($conexion_db);

    function insertar($conexion_db){
        $id_clientes= $_POST["id_clientes"];
        $nombre= $_POST["nombre"]; #enviar campos del formualrio
        $apellidos= $_POST["apellidos"];
        $cedula= $_POST["cedula"];
        $correo= $_POST["correo"];
        $telefono= $_POST["telefono"];
    

        $consulta_db = "INSERT INTO  clientes (nombre, apellidos, cedula, correo, telefono) VALUES('$nombre','$apellidos','$cedula','$correo','$telefono')";
        mysqli_query($conexion_db, $consulta_db);
        mysqli_close($conexion_db);
        

      // echo (include("../confirmaciones/guardarexito.php"));
      header ("location: ../clientes.php");

    }
             
    


?>