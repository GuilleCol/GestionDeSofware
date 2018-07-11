<?php
	require('../conexion.php');

	$iddrs = $_GET["iddrs"];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$clave=$_POST['clave'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$correo=$_POST['correo'];
	$tipo=$_POST['tipo'];
	
	$conectar->query("INSERT INTO usuario VALUES('','$clave', '$nombre', '$apellido', '$telefono', '$direccion', '$correo', '$tipo')");
	mysqli_close($conectar);
	header("Location:../index.php" . $iddrs);
?>
