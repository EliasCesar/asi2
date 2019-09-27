<?php
	include 'header.php';
	$empleado= new Database();
	if(isset($_POST) && !empty($_POST)){
		$nombres = $empleado->sanitize($_POST['nombres']);
		$apellidos = $empleado->sanitize($_POST['apellidos']);
		$fecha_nac = $empleado->sanitize($_POST['fecha_nac']);
		$fecha_ingreso = $empleado->sanitize($_POST['fecha_ingreso']);
		$codigo_isss = $empleado->sanitize($_POST['codigo_isss']);
		$id_tipo_licencia = $empleado->sanitize($_POST['id_tipo_licencia']);
		$telefono = $empleado->sanitize($_POST['telefono']);
		$email = $empleado->sanitize($_POST['email']);
		$dui = $empleado->sanitize($_POST['dui']);
		$nit = $empleado->sanitize($_POST['nit']);
		$afp = $empleado->sanitize($_POST['afp']);
		$estadi_civil = $empleado->sanitize($_POST['estadi_civil']);
		$empleado_id = 1;//$empleado->sanitize($_POST['empleado_id']);
		$cargo_id = $empleado->sanitize($_POST['cargo_id']);
		
		$res = $empleado->create($nombres, $apellidos,$fecha_nac, $fecha_ingreso, $codigo_isss, $id_tipo_licencia, $telefono, $email, $dui, $nit, $afp, $estadi_civil, $empleado_id, $cargo_id);
		if($res){
			$message= "Datos insertados con éxito";
			$class="alert alert-success";
		}else{
			$message="No se pudieron insertar los datos";
			$class="alert alert-danger";
		}
		
		?>
	<div class="<?php echo $class?>">
	  <?php echo $message;?>
	</div>	
		<?php
	}

?>	
        <div class="menu">
            <div class="home">
                <i class="fas fa-home"></i>
                <span><a href="/">INICIO</a></span>
            </div>
        <?php 
		if($_SESSION['rol']== "Administrador"){
			include 'menu_admin.php'; 
		}
		?>
        </div>
		<div class="container">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-8"><h2>Agregar <b>empleado</b></h2></div>
						<div class="col-sm-4">
							<a href="empleado_listar.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
						</div>
					</div>
				</div>
				<div class="row">
					<form method="post">
						<div class="col-md-12">
							<label>Nombres:</label>
							<input type="text" name="nombres" id="nombres" class='form-control' maxlength="45" required >
						</div>
						<div class="col-md-12">
							<label>Apellidos:</label>
							<input type="text" name="apellidos" id="apellidos" class='form-control' maxlength="45" required>
						</div>
						<div class="col-md-12">
							<label>Fecha Nacimiento:</label>
							<input type="date" name="fecha_nac" id="fecha_nac" class='form-control' required>
						</div>
						<div class="col-md-12">
							<label>Fecha Ingreso:</label>
							<input type="date" name="fecha_ingreso" id="fecha_ingreso" class='form-control' required>
						</div>
						<div class="col-md-12">
							<label>Código ISSS:</label>
							<input type="number" name="codigo_isss" id="codigo_isss" class='form-control' maxlength="11" required>
						</div>
						<div class="col-md-12">
							<label>Licencia</label>
							<input type="number" name="id_tipo_licencia" id="id_tipo_licencia" class='form-control' maxlength="13" required>
						</div>
						<div class="col-md-12">
							<label>Teléfono:</label>
							<input type="text" name="telefono" id="telefono" class='form-control' maxlength="8" required >
						</div>
						<div class="col-md-12">
							<label>Correo electrónico:</label>
							<input type="email" name="email" id="email" class='form-control' maxlength="45" required>
						
						</div>
						<div class="col-md-12">
							<label>DUI:</label>
							<input type="text" name="dui" id="dui" class='form-control' maxlength="9" required >
						</div>
						<div class="col-md-12">
							<label>NIT:</label>
							<input type="text" name="nit" id="nit" class='form-control' maxlength="13" required >
						</div>
						<div class="col-md-12">
							<label>AFP:</label>
							<input type="text" name="afp" id="afp" class='form-control' maxlength="11" required >
						</div>
						<div class="col-md-12">
							<label>Estado Civil:</label>
							<select name="estadi_civil">
							  <option value="Soltero">Soltero</option>
							  <option value="Divorciado">Divorciado</option>
							  <option value="Casado">Casado</option>
							  <option value="Acompañado">Acompañado</option>
							  <option value="Otro">Otro</option>
							</select>
						</div>
						<div class="col-md-12">
							<label>Cargo:</label>
							<select name="cargo_id">
								<?php
									$listadoCargo=$empleado->ReadCargo();
									var_dump($listadoCargo);
									while ($row=mysqli_fetch_object($listadoCargo)){
										echo '<option value="'.$row->id_cargo.'">'.$row->nom_Cargo.'</option>';
									}
								?>
							</select>
						</div>
						<div class="col-md-12 pull-right">
						<hr>
							<button type="submit" class="btn btn-success">Guardar datos</button>
						</div>
					</form>
				</div>
			</div>
		</div>
<?php include 'footer.php'; ?>