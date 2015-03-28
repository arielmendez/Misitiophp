<?php 
include './clases/Coneccion.php';
include './clases/Seccion.php';
include './clases/SeccionControlador.php';
$seccionA = new SeccionControlador();
$accion= $_REQUEST['accion'];
switch ($accion) {
	case 'save':
		if(isset($_REQUEST['bot'])){
			$seccionA->setId('NULL');
			$seccionA->setNombre($_REQUEST['nombre']);
			$seccionA->setEscuela($_REQUEST['escuela']);

			$datosObj=array($seccionA->getId(),
				$seccionA->getNombre(),
				$seccionA->getEscuela()
				);
			print $seccionA->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorSecccion.php?accion=con\'>Ver datos</a>';
		}else{
			print 'No se ha enviado datos ';
		}
		break;
	case 'con':
		$sql = 'SELECT * FROM seccion';
		print consultaD($con, $sql, 2, TRUE);
	break;
	case 'del':
		$sql = 'DELETE from seccion WHERE id='.$_REQUEST['id'].';';
		print consultaA($con, $sql);
	break;
	default:
		print 'No hay accion que realizar';
		break;
}
 ?>