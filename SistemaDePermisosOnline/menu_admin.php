<?php
if($_SESSION['rol'] == 'Administrador'){
?>
	<div class="options">
		<div>
			<i class="fas fa-chevron-down"></i>
			<span><a href="usuario_listar.php">Listar Usuarios</a></span>
		</div>
		<div>
			<i class="fa fa-user"></i>
			<span><a href="usuario_listar.php">Gestion Usuarios</a></span>
		</div>
		<div>
			<i class="fa fa-circle-notch"></i>
			<span><a href="rol_listar.php">Asignar Roles</a></span>
		</div>
	</div>
	<div class="options">
		<div>
			<i class="fas fa-chevron-down"></i>
			<span>Gestion Empleados</span>
		</div>
		<div>
			<i class="fas fa-users"></i>
			<span><a href="empleado_listar.php">Empleados</a></span>
		</div>
		<div>
			<i class="fas fa-users"></i>
			<span> Jornadas Laborales</span>
		</div>
		<div>
			<i class="fas fa-users"></i>
			<span> Tipo de permisos</span>
		</div>
	</div>
	<div class="solicitudes">
		<i class="fas fa-envelope"></i>
		<span>Solicitudes de permisos</span>
	</div>
<?php
	}
?>