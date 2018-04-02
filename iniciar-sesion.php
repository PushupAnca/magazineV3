<?php 
// session_start();


if (isset($_SESSION['nombre'])) {
	// header('Location: iniciar-sesion.php');
	echo 'iniciar-sesion';
}

if (isset($_COOKIE['color'])) {
	$color = htmlspecialchars($_COOKIE['color']);
} else {
	$color = 'green';
}


$enviado = '';
$errores = '';


require 'functions.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$password = $_POST['password'];
	
    $errores .= validarNombre($nombre); 


    try {
			$conexion = new PDO('mysql:host=localhost;dbname=prueba_magazine', 'root', '');
			
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
		
    if (empty($nombre) or empty($password)) {
    	$errores .= '<li>Datos incorrectos</li>';
    }else{
    	
		$statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre = :nombre AND password = :password');
		$statement->execute(array(':nombre' => $nombre,
								  ':password' => $password
								));

		$resultado = $statement->fetch();
		// var_dump($resultado);
		
		if ($resultado != false) { 
			header('Location: sobre_nosotros.php'); // no entiendo por que si dejo la location no me vacia los campos del los input. 
			$enviado = 'true';

		}else{
			$errores .= '<li>Datos incorrectos</li>';
		}


    }
}

require 'views/iniciar-sesion.view.php';


?>

