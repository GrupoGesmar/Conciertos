
	//CAMBIAR LO DE ABAJO CON INDEX.HTM ==================================
	<!DOCTYPE html>
	<html>
	<head><META HTTP-EQUIV="REFRESH" CONTENT="1;URL=https://grupogesmar.github.io/GrupoGesmar-conciertos/index.htm"></head>
	<body>
	<?php
	use function CommonMark\Render\HTML;
	require_once 'pdoconfig.php';
	require_once 'recoger_datos.sql';
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


		$consulta = "INSERT INTO recoger_datos () VALUES ($nombre,$apellidos,$numero,$email
		,$desplegable_sala, $duracion_evento, $patrocinador, $artista, $trabajadores, $aceptar_rpg)";
	}
	try {
		$conn = new mysqli_connect($host,$dbname, $username, $password);
		echo "Connected to $dbname at $host successfully.";
		insertar($conexion);
		
		
	}
	 catch (mysqli_connectException $pe) {
		die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
 ?>
</body>

 </html>
