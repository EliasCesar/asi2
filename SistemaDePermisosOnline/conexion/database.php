<?php
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="asi2";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		/****************************************
		* 		INICIA CRUD EMPLEADOS			*
		*****************************************/
		public function create($nombres, $apellidos,$fecha_nac, $fecha_ingreso, $codigo_isss, $id_tipo_licencia, $telefono, $email, $dui, $nit, $afp, $estadi_civil, $empleado_id, $cargo_id){
			$sql = "INSERT INTO `empleado` (nombre, apellido, fecha_nac, fecha_ingreso, codigo_isss, id_tipo_Licencia, telefono, email, dui, nit, afp, estadi_civil, empleado_id, cargo_id) VALUES ('$nombres', '$apellidos', '$fecha_nac', '$fecha_ingreso', '$codigo_isss', '$id_tipo_licencia', '$telefono','$email', '$dui', '$nit', '$afp', '$estadi_civil', '$empleado_id', '$cargo_id')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function read(){
			$sql = "SELECT * FROM empleado where estado = 1";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
		
		public function single_record($id){
			$sql = "SELECT * FROM empleado where id_empleado='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombres, $apellidos,$fecha_nac, $fecha_ingreso, $codigo_isss, $id_tipo_licencia, $telefono, $email, $dui, $nit, $afp, $estadi_civil, $empleado_id, $cargo_id, $id){
			$sql = "UPDATE empleado SET nombre='$nombres', apellido='$apellidos', telefono='$telefono', email='$email', fecha_nac='$fecha_nac', dui='$dui', nit='$nit', afp='$afp', estadi_civil='$estadi_civil', cargo_id='$cargo_id', fecha_ingreso='$fecha_ingreso', codigo_isss='$codigo_isss', id_tipo_Licencia='$id_tipo_licencia' WHERE id_empleado=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function delete($id){
			try {
				$sql = "UPDATE empleado SET estado=0 WHERE id_empleado=$id";
				$res = mysqli_query($this->con, $sql);
				if($res){
					return true;
				}else{
					return false;
				}
			} catch (Exception $e) {
				die(var_dump($e->getMessage()));
			  return false;
			}
		}
		
		/****************************************
		* 			FIN CRUD EMPLEADOS			*
		*****************************************/
	
		/****************************************
		* 			INICIA CRUD CARGOS			*
		*****************************************/
		
		public function ReadCargo(){
			$sql = "SELECT * FROM cargo where estado = 1";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
        
		/****************************************
		* 			FIN CRUD CARGOS			*
		*****************************************/
	}
?>	

