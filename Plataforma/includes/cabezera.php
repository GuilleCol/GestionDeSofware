<?php
require('mantenerLogin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>SISTEMA DE GESTIÓN ACADEMICA</title>
<meta charset="utf-8">
<link href="../css/desing.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="../img/favicon.ico" />
</head>

<?php 
if($_SESSION['tipo']=='Administrador'){
	 ?>
<header>
  <section class="wrapper">
  	<label><h1 style="margin-top: 10px;">SISTEMA DE GESTIÓN ACADEMICA - ADMINISTRADOR</h1></label>
       <img src="/img/logo.png" alt="" width="50" height="50" class="logoud"/>
        <nav>
            <ul>
            	<li><a href="home.php">Inicio</a></li>
            	<li><a href="nuevaMateria.php">Nueva Materia</a></li>
            	<li><a href="nuevoHorario.php">Asignar Horario</a></li>
   				<li><a>Hola <?php echo $_SESSION['nombre']?></a></li>
                <li><a>Codigo: <?php echo $_SESSION['codigo']?></a></li>
                <li><a>Usted es: <?php echo $_SESSION['tipo']?></a></li>
                <li><a href="salir.php">Salir</a></li>
        </ul>
    </nav>
  </section>
</header>
<body>
<?php
}elseif($_SESSION['tipo']=='Profesor'){
	 ?>
<header>
  <section class="wrapper">
  	<label><h1 style="margin-top: 10px;">SISTEMA DE GESTIÓN ACADEMICA - PROFESOR</h1></label>
       <img src="/img/logo.png" alt="" width="50" height="50" class="logoud"/>
        <nav>
            <ul>
            	<li><a href="home.php">Inicio</a></li>
            	<li><a href="verHorario.php">Ver Horario</a></li>
            	<li><a href="#">Calificar</a></li>
   				<li><a>Hola <?php echo $_SESSION['nombre']?></a></li>
                <li><a>Codigo: <?php echo $_SESSION['codigo']?></a></li>
                <li><a>Usted es: <?php echo $_SESSION['tipo']?></a></li>
                <li><a href="salir.php">Salir</a></li>
        </ul>
    </nav>
  </section>
</header>
<body>
<?php
}elseif($_SESSION['tipo']=='Estudiante'){
	 ?>
<header>
  <section class="wrapper">
  	<label><h1 style="margin-top: 10px;">SISTEMA DE GESTIÓN ACADEMICA - ESTUDIANTE</h1></label>
       <img src="/img/logo.png" alt="" width="50" height="50" class="logoud"/>
        <nav>
            <ul>
            	<li><a href="home.php">Inicio</a></li>
            	<li><a href="verHorario.php">Ver Horario</a></li>
            	<li><a href="#">Seleccionar Horario</a></li>
   				<li><a>Hola <?php echo $_SESSION['nombre']?></a></li>
                <li><a>Codigo: <?php echo $_SESSION['codigo']?></a></li>
                <li><a>Usted es: <?php echo $_SESSION['tipo']?></a></li>
                <li><a href="salir.php">Salir</a></li>
        </ul>
    </nav>
  </section>
</header>
<body>
<?php
}
?>

