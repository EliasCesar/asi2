<?php 
if (isset($_GET['id'])){
	try {
		require('conexion/database.php');
		$empleado = new Database();
		$id=intval($_GET['id']);
		$res = $empleado->delete($id);
		if($res){
			header('location: empleado_listar.php');
		}else{
			return false;
		}
	} catch (Exception $e) {
	  return false;
	}
}
?>