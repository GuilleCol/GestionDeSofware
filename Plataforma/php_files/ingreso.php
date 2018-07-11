<?php
	require('../conexion.php');

	$codigo=$_POST['codigo'];
	$clave=$_POST['clave'];

	$sql = "SELECT * FROM usuario";

	if ($resultado = mysqli_query($conectar, $sql)) {
    /* obtener array asociativo */
    while ($row = mysqli_fetch_assoc($resultado)) {

   		if($row['codigo'] == $codigo && $row['clave'] == $clave){
			$_SESSION['codigo'] = $row['codigo'];
   			$_SESSION['nombre'] = $row['nombre'];
   			$_SESSION['tipo'] = $row['tipo'];
   			echo "<script language=\"javascript\">window.location.href=\"../includes/home.php\";</script>";
   		}
    }
	mysqli_close($conectar);
		echo "<script language=\"javascript\">window.location.href=\"../index.php\";</script>";
    /* liberar el conjunto de resultados */
   mysqli_free_result($resultado);
   
}

?>
