<?php 
if (isset($_GET['id'])){
	try {
		require('conexion/database.php');
		$rol = new Database();
		$id=intval($_GET['id']);
		$res = $rol->deleteRol($id);
		if($res){
			header('location: rol_listar.php');
		}else{
			return false;
		}
	} catch (Exception $e) {
	  return false;
	}
}
?>