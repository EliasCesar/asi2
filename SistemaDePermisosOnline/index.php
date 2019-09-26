<?php
	require('conexion/connection.php');
  
   
  
  if(!empty($_POST))
  {
	session_start();
	$_SESSION['rol'] = null;
    $nickname = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];
	
    $sql = "SELECT r.rol_nombre as rol, r.id_rol, e.nombre, e.apellido 
	FROM `usuario` u inner JOIN usuario_rol ur on ur.usuario_id = u.id_usuario 
	INNER JOIN rol r on r.id_rol = ur.rol_id
	INNER JOIN empleado e ON u.empleado_id = e.id_empleado
	where u.nickname = '$nickname' and u.psw = '$contrasenia';";
	$result=$conn->query($sql);
    $rows = $result->num_rows;
    
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['rol'] = $row['rol'];
	  $_SESSION['nombre'] = $row['nombre'];
	  $_SESSION['apellido'] = $row['apellido'];
      header("location: dashboard.php");
      } else {
      $error = "El correo o contraseña son incorrectos";
    }
  }
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instituto Salvadoreño del seguro social</title>

    <!-- css -->    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
</head>
<body>
  <div class="contenedor">
    <header>
      <div class="Logo-isss">
        <div class="img-iss">
          <img src="img/isss-logo.jpg" height="140" width="150">
        </div>
        <div class="text-logo">
          <p>INSTITUTO SALVADOREÑO</p>
          <p>DEL SEGURO SOCIAL</p>
        </div>
      </div>
      <div class="logo-sdpo">
        <img src="img/log-sdpo.jpg" height="140" width="600">
      </div>   
    </header>

    <section class="ayuda">
      <i class="far fa-question-circle"></i>
    </section>

    <div class="contenido">

      <div class="menu">
		<?php include 'menu_publico.php'; ?>
      </div>
      <div class="formulario">
        <h1>Sign In</h1>
        <form class="contenido-formulario" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="contenido-input">
            <div class="form-group">
              <input type="text" name="email" class="form-control" id="correo" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="contrasenia" class="form-control" id="contrasenia" placeholder="Password">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">SING IN</button>
        </form>
      </div>
	</div>
 </div>
</body>
</html>