<?php
	include 'header.php'; 
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
                    <div class="col-sm-8"><h2>Listado de  <b>Usuario</b></h2></div>
                    <div class="col-sm-4">
                        <a href="usuario_crear.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Usuario</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Código Empleado</th>
                        <th></th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$usuarios = new Database();
				$listado=$usuarios->readUsuario();
				?>
                <tbody>
				<?php 
					while ($row=mysqli_fetch_object($listado)){
						$id=$row->id_usuario;
						$nickname=$row->nickname;
						$codigo_empleado=$row->empleado_id;
				?>
					<tr>
                        <td><?php echo $nickname;?></td>
                        <td><?php echo $codigo_empleado;?></td>
                        <td>
						    <a href="usuario_update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="usuario_delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>	
				<?php
					}
				?>
                    
                    
                          
                </tbody>
            </table>
        </div>
    </div> 
<?php include 'footer.php'; ?>