<?php 
class Usuario {
    private $id_usuario;
	private $mombre_comple;
	private $nickname;
	private $estado;
	private $psw;
	private $empleado_id;

    public function __construct($id_usuario, $mombre_comple, $nickname, $estado, $psw, $empleado_id)
    {
        $this->id_usuario = $id_usuario;
		$this->nombre_comple = $mombre_comple;
		$this->nickname = $nickname;
		$this->estado = $estado;
		$this->psw = $psw;
		$this->empleado_id = $empleado_id;
    }
}
?>