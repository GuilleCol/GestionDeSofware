<?php
$conectar = new mysqli('localhost', 'root', '', 'sga');
	//verificamos la conexion
	if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
	}
?>