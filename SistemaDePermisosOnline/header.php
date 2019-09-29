<?php
	require('conexion/database.php');
	session_start();
	if($_SESSION['rol'] === '' || $_SESSION == null){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>

    <!-- css -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <header>
        <p><?php echo $_SESSION['nombre'] . " " .  $_SESSION['apellido']; ?><p>
        <div class="search">
            <button class="btn btn-primary"><a href="cerrar_sesion.php">Salir</a></button>
            <i class="fas fa-search"></i>
        </div>
    </header>
    <div class="contenido">