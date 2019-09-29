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
		}else if($_SESSION['rol']== "Empleado"){
			include 'menu_empleado.php';
		}
		?>
        </div>
        <div class="escritorio">
            <span class="bienvenida">Bienvenido, <?php echo $_SESSION['rol']?></span>
            <img src="img/isss-logo.jpg" height="550" width="550">
        </div>
    </div>
</body>
</html>