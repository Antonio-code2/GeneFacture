<?php
if (isset($_GET['term'])){

include("../config/conectar_db.php");
$return_arr = array();
/* If connection to database, run sql statement. */
if ($conexion_db)
{
	
	$fetch = mysqli_query($conexion_db,"SELECT * FROM clientes where nombre like '%" . mysqli_real_escape_string($conexion_db,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Retrieve and store in array the results of the query.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_clientes=$row['id_clientes'];
		$row_array['value'] = $row['nombre']."|".$row['nombre'];
		$row_array['apellidos']=$row['apellidos'];
		$row_array['cedula']=$row['cedula'];
		$row_array['correo']=$row['correo'];
		$row_array['telefono']=$row['telefono'];
		
		array_push($return_arr,$row_array);
    }
	
}

/* Free connection resources. */
mysqli_close($conexion_db);

/* Toss back results as json encoded array. */
echo json_encode($return_arr);

}
?>


<?php
// if (isset($_GET['term'])){
// 	# conectare la base de datos
//     $con=@mysqli_connect("localhost", "root", "root", "test");
	
// $return_arr = array();
// /* Si la conexión a la base de datos , ejecuta instrucción SQL. */
// if ($con)
// {
// 	$fetch = mysqli_query($con,"SELECT * FROM productos where codigo_producto like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
// 	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
// 	while ($row = mysqli_fetch_array($fetch)) {
// 		$id_producto=$row['id_producto'];
// 		$precio=number_format($row['precio_venta'],2,".","");
// 		$row_array['value'] = $row['codigo_producto']." | ".$row['nombre_producto'];
// 		$row_array['id_producto']=$row['id_producto'];
// 		$row_array['codigo']=$row['codigo_producto'];
// 		$row_array['descripcion']=$row['nombre_producto'];
// 		$row_array['precio']=$precio;
// 		array_push($return_arr,$row_array);
//     }
// }
 
// /* Cierra la conexión. */
// mysqli_close($con);
 
// /* Codifica el resultado del array en JSON. */
// echo json_encode($return_arr);
 
// }
?>