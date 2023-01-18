
	//CAMBIAR LO DE ABAJO CON INDEX.HTM ==================================
	<?php
	$conexion = mysqli_connect('localhost','root', '','Empresas') 
	or die(mysqli_error($mysqli))
	insertar($conexion);

	function insertar ($conexion) {
		
		$nombre = $_POST['name'];
		$apellidos = $_POST['apellidos'];
		$numero = $_POST['telefono'];
		$email = $_POST['email'];
		$desplegable_sala = $_POST['salas'];
		$duracion_evento = $_POST['duracion_evento'];
		$patrocinador = $_POST['patrocinador'];
		$artista = $_POST['artista']
		$trabajadores = $_POST['trabajadores']
		$aceptar_rpg = $_POST['aceptar_rpg'];
		$asunto = 'Formulario Rellenado';


		$consulta = "INSERT INTO Empresas () VALUES ()"
	}

	
	
 ?>
  </body>
</html>