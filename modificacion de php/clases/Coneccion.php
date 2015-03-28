<?php

class Coneccion {
  $dsn='mysql:dbname=alumnos;host=127.0.0.1';
  $usuario='root';
  $clave='';
   try{
     $con = new POD($dsn,$usuario, $clave);
   } catch (PODException $e) {
     print $e->getTraceAsString();
   }
function consultaA($coneccion, $sql){
	$ejecutor = $coneccion;
	$msgok = NULL;
	$msgerror = NULL;
	try {
		$condicion = strstr(trim($sql)," ", TRUE);
	} catch (Exception $exc){
	switch ($condicion)
	{
		case 'Insert':
			$msgerror = "No se ja podido insertar los Datos";
			$msgok = "Datos Insertados";
			break;
		case "DELETE":
			$msgerror = "No se ha podido eliminar los datos";
			$msgok = "Datos Eliminardos";
			break;
		case "UPDATE":
			$msgerror = "No se ha podido actualizar los datos";
			$msgok = "Datos actualizados";
			break;
		default:
			$msgerror = "Es posible que no use un estandar de consulta SQL";
			break;
	}
	}
}