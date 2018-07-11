<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SISTEMA DE GESTIÓN ACADEMICA</title>
    <link rel="stylesheet" href="css/estilologin.css">
</head>
<body>
    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear Cuenta</span>
        </div>
        
        <div class="formulario">
        	<h1>SISTEMA DE GESTIÓN ACADEMICA</h1>
            <h2>Iniciar Sesión</h2>
            <form action="php_files/ingreso.php" method="POST">
                <input type="text" name="codigo" placeholder="Codigo" min="1" pattern="^[0-9]+" required>
                <input type="password" name="clave" placeholder="Contraseña" required>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="php_files/registro.php" method="POST">

            	<input type="text" name="nombre" placeholder="Nombre" required>

            	<input type="text" name="apellido" placeholder="Apellido" required>
                
                <input type="password" name="clave" placeholder="Contraseña" required>

                <input type="number" name="telefono" placeholder="Teléfono" required>
                
                <input type="text" name="direccion" placeholder="Direccion" required>

                <input type="email" name="correo" placeholder="Correo Electronico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
               	
               	<select name="tipo" required>
		        	<option value="">Tipo de usuario</option>
           			<option value="Administrador">Administrador</option>
					<option value="Profesor">Profesor</option>
					<option value="Estudiante">Estudiante</option>
      			 </select>
                
                <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="reset-password">
        	<a>Gestión, calidad, verificación y validación de Software</a><p></p>
            <a>Universidad Distrial - 2018</a>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>