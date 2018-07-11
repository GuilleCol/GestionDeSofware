<?php
	require('../conexion.php');
	include('cabezera.php');
	$codigo=$_SESSION['codigo'];

	$sql = "SELECT horario.*, materia.nombre FROM horario, materia WHERE codigo=$codigo && horario.ID_materia=materia.ID_materia ORDER BY ano";

	if ($resultado = mysqli_query($conectar, $sql)) {

    /* obtener array asociativo */
    ?>
    <body class="body2">
    <center>
	<section  class="puntaje" >

	<table width="100%" border="0" class="todo">
   			 <tr>
    			 <td class="titulos"><strong>CURSO</strong></td>
     			 <td class="titulos"><strong>GRUPO</strong></td>
     			 <td class="titulos"><strong>MATERIA</strong></td>
     			 <td class="titulos"><strong>LUNES</strong></td>
     			 <td class="titulos"><strong>MARTES</strong></td>
     			 <td class="titulos"><strong>MIERCOLES</strong></td>
     			 <td class="titulos"><strong>JUEVES</strong></td>
     			 <td class="titulos"><strong>VIERNES</strong></td>
     			 <td class="titulos"><strong>AÑO</strong></td>
    		</tr>
<?php
    while ($row = mysqli_fetch_assoc($resultado)) {

   	echo "<tr>";

	echo "<td class='titulos2'>";
	echo $row['curso'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['grupo'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['nombre'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['lunes'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['martes'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['miercoles'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['jueves'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['viernes'];
	echo "</td>";

	echo "<td class='titulos2'>";
	echo $row['ano'];
	echo "</td>";
	echo "</tr>";
}
}
	?>
</table>
</tbody>
</section>
</center>
</body>
</html>

