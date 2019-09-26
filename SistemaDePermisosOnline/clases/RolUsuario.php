<?php 
class RolUsuario {
	private $id_usuario_rol
    private $rol_id;
	private $usuario_id;

    public function __construct($id_usuario_rol, $rol_id, $usuario_id)
    {
        $this->id_usuario_rol = $id_usuario_rol;
		$this->rol_id = $rol_id;
		$this->usuario_id = $usuario_id;
    }
}
?>