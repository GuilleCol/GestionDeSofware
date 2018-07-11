<?php
include('cabezera.php');
require('../conexion.php');
?>
<div class="contenedor-form2">    
        <div class="formulario2">
        	<h1>Asignar un Horario</h1>
        	<br>
        	<form method="POST" action="../php_files/crearHorario.php">
<table width="100%" border="0">
  <tbody>
  	<tr>
      <td><h2>CODIGO A ASIGNAR HORARIO</h2> </td>
      <td>
      	<?php
$sql = "SELECT codigo, tipo FROM usuario WHERE tipo='Profesor' || tipo='Estudiante'";
	if ($resultado = mysqli_query($conectar, $sql)) {
    /* obtener array asociativo */
    ?>
    <select name="codigo">
    <?php
    while ($row = mysqli_fetch_assoc($resultado)) {
    ?>
    <option value = " <?php echo $row['codigo']; ?> "><?php echo $row['codigo']; ?></option>

    <?php
    }?></select><?php
}
?>
</td>
    </tr>
      	<tr>
      <td><h2>MATERIA</h2> </td>
      <td>
      	<?php
$sql = "SELECT nombre, ID_materia FROM materia";

	if ($resultado = mysqli_query($conectar, $sql)) {
    /* obtener array asociativo */


    ?>
    <select name="ID_materia">
    <?php
    while ($row = mysqli_fetch_assoc($resultado)) {
    ?>
    <option value = " <?php echo $row['ID_materia']; ?> "><?php echo $row['nombre']; ?></option>

    <?php
    }?></select><?php
}
?>
</td>
    </tr>
    <tr>
    	<td><h2>INGRESE EL AÑO</h2>
    	<td><select name="ano">
           		<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
       </select>
    	</td>
    </tr>
    <tr>
    	<td><h2>INGRESE CURSO</h2>
    	<td><select name="curso">
           		<option value="PRIMERO">PRIMERO</option>
				<option value="SEGUNDO">SEGUNDO</option>
				<option value="TERCERO">TERCERO</option>
				<option value="CUARTO">CUARTO</option>
				<option value="QUINTO">QUINTO</option>
				<option value="SEXTO">SEXTO</option>
				<option value="SEPTIMO">SEPTIMO</option>
				<option value="OCTAVO">OCTAVO</option>
				<option value="NOVENO">NOVENO</option>
				<option value="DECIMO">DECIMO</option>
				<option value="ONCE">ONCE</option>
       </select>
    	</td>
    </tr>
    <tr>
    	<td><h2>INGRESE GRUPO</h2>
    	<td><select name="grupo">
           		<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
       </select>
    	</td>
    </tr>
</tbody>
</table>
<br>
<table width="100%" border="0">
	<tbody>
		<tr>
			<td>HORA
			</td>
			<td>LUNES
			</td>
			<td>MARTES
			</td>
			<td>MIERCOLES
			</td>
			<td>JUEVES
			</td>
			<td>VIERNES
			</td>
		</tr>
		<tr>
			<td>8:00
			</td>
			<td><input type="checkbox" class="block" name="lunes" value="08:00:00">
			</td>
			<td><input type="checkbox" class="block" name="martes" value="08:00:00">
			</td>
			<td><input type="checkbox" class="block" name="miercoles" value="08:00:00">
			</td>
			<td><input type="checkbox" class="block" name="jueves" value="08:00:00">
			</td>
			<td><input type="checkbox" class="block" name="viernes" value="08:00:00">
			</td>
		</tr>
		<tr>
			<td>10:00
			</td>
			<td><input type="checkbox" class="block" name="lunes" value="10:00:00">
			</td>
			<td><input type="checkbox" class="block" name="martes" value="10:00:00">
			</td>
			<td><input type="checkbox" class="block" name="miercoles" value="10:00:00">
			</td>
			<td><input type="checkbox" class="block" name="jueves" value="10:00:00">
			</td>
			<td><input type="checkbox" class="block" name="viernes" value="10:00:00">
			</td>
		</tr>
		<tr>
			<td>12:00
			</td>
			<td><input type="checkbox" class="block" name="lunes" value="12:00:00">
			</td>
			<td><input type="checkbox" class="block" name="martes" value="12:00:00">
			</td>
			<td><input type="checkbox" class="block" name="miercoles" value="12:00:00">
			</td>
			<td><input type="checkbox" class="block" name="jueves" value="12:00:00">
			</td>
			<td><input type="checkbox" class="block" name="viernes" value="12:00:00">
			</td>
		</tr>
		<tr>
			<td colspan="6"><center>DESCANSO</center>
			</td>
		</tr>
		<tr>
			<td>13:00
			</td>
			<td><input type="checkbox" class="block" name="lunes" value="13:00:00">
			</td>
			<td><input type="checkbox" class="block" name="martes" value="13:00:00">
			</td>
			<td><input type="checkbox" class="block" name="miercoles" value="13:00:00">
			</td>
			<td><input type="checkbox" class="block" name="jueves" value="13:00:00">
			</td>
			<td><input type="checkbox" class="block" name="viernes" value="13:00:00">
			</td>
		</tr>
		<tr>
			<td>15:00
			</td>
			<td><input type="checkbox" class="block" name="lunes" value="15:00:00">
			</td>
			<td><input type="checkbox" class="block" name="martes" value="15:00:00">
			</td>
			<td><input type="checkbox" class="block" name="miercoles" value="15:00:00">
			</td>
			<td><input type="checkbox" class="block" name="jueves" value="15:00:00">
			</td>
			<td><input type="checkbox" class="block" name="viernes" value="15:00:00">
			</td>
		</tr>
	</tbody>
</table>
<br>
<input type="submit" name="submit" class="boton" id="submit" value="ASIGNAR HORARIO">
</form>
     		</div>
    	</div>
	</body>
</html>