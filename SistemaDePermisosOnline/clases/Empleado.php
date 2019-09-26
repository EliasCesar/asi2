<?php 
class Empleado {
    private $id_empleado;
	private $nombre;
	private $apellido;
	private $fecha_nac;
	private $fecha_ingreso;
	private $codigo_isss;
	private $id_tipo_licencia;
	private $telefono;
	private $email;
	private $dui;
	private $nit;
	private $afp;
	private $estadi_civil;
	private $empleado_id;
	private $cargo_id;

    public function __construct($nombre, $apellido, $fecha_nac, $fecha_ingreso, $codigo_isss, $id_tipo_licencia, $telefono, $email, $dui, $nit, $afp, $estadi_civil, $empleado_id, $cargo_id)
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