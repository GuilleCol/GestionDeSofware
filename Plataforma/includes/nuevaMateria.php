<?php
include('cabezera.php');
?>
<div class="contenedor-form2">    
        <div class="formulario2">
        	<h1>Nueva Materia</h1>
        	<br>
        	<form method="POST" action="../php_files/crearMateria.php">
<table width="100%" border="0">
  <tbody>
    <tr>
      <td><h2>NOMBRE DE LA MATERIA</h2><p> </td>
      <td><input type="text" name="nombre" placeholder="Ingrese Nombre - Ejemplo 'Quimica'" required></td>
    </tr>
    <tr>
      <td><h2>NIVEL A QUE CORRESPONDE</h2> </td>
      <td><select name="nivel">
		        <option value="1">Elige una opción</option>
           		<option value="Primaria">Primaria</option>
				<option value="Media">Media</option>
				<option value="Bachillerato">Bachillerato</option>
       </select></td>
    </tr>
  </tbody>
</table>
<br>
<input type="submit" name="submit" class="boton" id="submit" value="CREAR">
</form>
     		</div>
    	</div>
	</body>
</html>