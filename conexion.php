
	//CAMBIAR LO DE ABAJO CON INDEX.HTM ==================================
	<?php
	require_once 'pdoconfig.php';
	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		echo "Connected to $dbname at $host successfully.";
		insertar($conexion);

	function insertar ($conexion) {
		
		$nombre = $_POST['name'];
		$apellidos = $_POST['apellidos'];
		$numero = $_POST['telefono'];
		$email = $_POST['email'];
		$desplegable_sala = $_POST['salas'];
		$duracion_evento = $_POST['duracion_evento'];
		$patrocinador = $_POST['patrocinador'];
		$artista = $_POST['artista'];
		$trabajadores = $_POST['trabajadores'];
		$aceptar_rpg = $_POST['aceptar_rpg'];
		$asunto = 'Formulario Rellenado';


		$consulta = "INSERT INTO Empresas () VALUES ($nombre,$apellidos,$numero,$email
		,$desplegable_sala, $duracion_evento, $patrocinador, $artista, $trabajadores, $aceptar_rpg)"
	
	} catch (PDOException $pe) {
		die("Could not connect to the database $dbname :" . $pe->getMessage());
	}

	
	

	
	
 ?>
