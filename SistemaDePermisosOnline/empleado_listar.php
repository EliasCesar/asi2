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
                    <div class="col-sm-8"><h2>Listado de  <b>Empleados</b></h2></div>
                    <div class="col-sm-4">
                        <a href="empleado_crear.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar empleado</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Teléfono</th>
                        <th>Código ISSS</th>
						<th>E-mail</th>
                        <th></th>
                    </tr>
                </thead>
				<?php 
				include ('database.php');
				$empleados = new Database();
				$listado=$empleados->read();
				?>
                <tbody>
				<?php 
					while ($row=mysqli_fetch_object($listado)){
						$id=$row->id_empleado;
						$nombres=$row->nombre." ".$row->apellido;
						$telefono=$row->telefono;
						$codigo_isss=$row->codigo_isss;
						$email=$row->email;
				?>
					<tr>
                        <td><?php echo $nombres;?></td>
                        <td><?php echo $telefono;?></td>
                        <td><?php echo $codigo_isss;?></td>
						<td><?php echo $email;?></td>
                        <td>
						    <a href="empleado_update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="empleado_delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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