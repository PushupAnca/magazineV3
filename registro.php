<?php 
require 'functions.php';





if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$enviado = '';
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
	$correo = $_POST['correo'];
	$codigo = $_POST['codigo'];
	$provincia = $_POST['provincia'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];


   if (empty($nombre) or empty($correo) or  empty($codigo) or empty($provincia) or empty($password)){
   	  $errores .= "<li>Por favor rellena el formulario</li>";

   }else{
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=prueba_magazine', 'root', '');
			// Si algo esta mal escrito en el nombre d ela bbdd o no existe aparecera un mensaje en pantalla con el error pero solo si pulsamos 'submit'.
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			
			$statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre = :nombre LIMIT 1');
			$statement->execute(array(':nombre' => $nombre));
			$resultado = $statement->fetch();

			if ($resultado != false) { 
				$errores .= '<li>El nombre del usuario ya existe</li>';
			}

			$statement = $conexion->prepare('SELECT * FROM usuario WHERE password = :password LIMIT 1');
			$statement->execute(array(':password' => $password));
			$resultado = $statement->fetch();
			echo $password;
			// var_dump($resultado); 
			if ($resultado != false) { 
				$errores .= '<li>La contraseña ya existe</li>';
			}


			$errores .= validarCorreo($correo); 
			// $password = hash('sha512', $password);
		 //    $password2 = hash('sha512', $password2);
		    echo $password . '<br/>' . $password2;


			if ($password != $password2) {
					$errores .= validarPassword($password);
			}

 
   }
   

   if ($errores == '') {
			$statement = $conexion->prepare('INSERT INTO usuario values(null, :nombre, :correo , :codigo, :provincia, :password)');
			$statement->execute(array(':nombre' => $nombre,
									':correo' => $correo,
									':codigo' => $codigo,
									':provincia' => $provincia,
									':password' => $password));
			
			$enviado = 'true';
			header('Location: iniciar-sesion.php');
		}

	
}

require 'views/registro.view.php';

?>

