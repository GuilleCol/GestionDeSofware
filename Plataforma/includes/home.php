<?php
	require('../conexion.php');
	include('cabezera.php');
	$codigo=$_SESSION['codigo'];

	$sql = "SELECT * FROM usuario WHERE codigo=$codigo";

	if ($resultado = mysqli_query($conectar, $sql)) {

    /* obtener array asociativo */
    ?>
    <body class="body2">
    	<H1>PERFIL</H1>
    <center>
	<section  class="puntaje" >

	<table width="100%" border="0" class="todo">
   			 <tr>
    			 <td class="titulos"><strong>CODIGO</strong></td>
     			 <td class="titulos"><strong>NOMBRE</strong></td>
     			 <td class="titulos"><strong>APELLIDO</strong></td>
     			 <td class="titulos"><strong>TELEFONO</strong></td>
     			 <td class="titulos"><strong>DIRECCION</strong></td>
     			 <td class="titulos"><strong>CORREO</strong></td>
    		</tr>
<?php
    while ($row = mysqli_fetch_assoc($resultado)) {

   	echo "<tr>";

	echo "<td class='titulos2'>";
	echo $row['codigo'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['nombre'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['apellido'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['telefono'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['direccion'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['correo'];
	echo "</td>";

	echo "</tr>";
}
}
	?>
</table>
</section>
</center>


</body>
</html>

