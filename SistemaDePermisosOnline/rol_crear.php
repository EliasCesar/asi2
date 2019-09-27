<?php
	include 'header.php';
	$rol= new Database();
	if(isset($_POST) && !empty($_POST)){
		$nombre = $rol->sanitize($_POST['nombre']);
		
		
		$res = $rol->createRol($nombre);
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
						<div class="col-sm-8"><h2>Agregar <b>Rol</b></h2></div>
						<div class="col-sm-4">
							<a href="Rol_listar.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
						</div>
					</div>
				</div>
				<div class="row">
					<form method="post">
						<div class="col-md-12">
							<label>Nombre de Rol:</label>
							<input type="text" name="nombre" id="nombre" class='form-control' maxlength="45" required >
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