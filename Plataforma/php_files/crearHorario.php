<link href="../css/desings.css" rel="stylesheet" type="text/css">
<?php
	require('../conexion.php');

	$iddrs = $_GET["iddrs"];
	$codigo =$_POST['codigo'];
	$curso =$_POST['curso'];
	$grupo =$_POST['grupo'];
	$ID_materia =$_POST['ID_materia'];
	$lunes =$_POST['lunes'];
	$martes =$_POST['martes'];
	$miercoles =$_POST['miercoles'];
	$jueves =$_POST['jueves'];
	$viernes =$_POST['viernes'];
	$ano=$_POST['ano'];

	$conectar->query("INSERT INTO horario VALUES('', '$codigo', '$curso', '$grupo', '$ID_materia', '', '$lunes', '$martes', '$miercoles', '$jueves', '$viernes', '$ano' )");

	mysqli_close($conectar);
	header("Location:../includes/home.php" . $iddrs);

?>
