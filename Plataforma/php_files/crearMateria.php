<link href="../css/desing.css" rel="stylesheet" type="text/css">
<?php
	require('../conexion.php');

	$iddrs = $_GET["iddrs"];
	$nombre=$_POST['nombre'];
	$nivel=$_POST['nivel'];

	if($nivel=='1'){
		echo '<script language="javascript">alert("Ingrese un valor NO predeterminado"); window.location.href="../includes/nuevaMateria.php";</script>'; 
	}else{
	$conectar->query("INSERT INTO materia VALUES('', '$nombre', '$nivel')");

	mysqli_close($conectar);
	header("Location:../includes/home.php" . $iddrs);
}
?>
