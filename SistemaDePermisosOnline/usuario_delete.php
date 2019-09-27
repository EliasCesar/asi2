<?php 
if (isset($_GET['id'])){
	try {
		require('conexion/database.php');
		$usuario = new Database();
		$id=intval($_GET['id']);
		$res = $usuario->deleteUsuario($id);
		if($res){
			header('location: usuario_listar.php');
		}else{
			return false;
		}
	} catch (Exception $e) {
	  return false;
	}
}
?>