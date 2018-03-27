<?php 
session_start();
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

    // $password = hash('sha512', $password); 



   if (empty($nombre) or empty($correo) or  empty($codigo) or empty($provincia) or empty($password)){
   	  $errores .= "<li>Por favor rellena el formulario</li>";


   }else{

	   	if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){        
               $errores .= "<li>Por favor ingresa un correo valido</li>";
			 }
		}

		if (!empty($codigo)) {
			$codigo = filter_var($codigo, FILTER_VALIDATE_INT);
			$codigo = trim($codigo);
	        if(!filter_var($codigo, FILTER_VALIDATE_INT)){        
			 $errores .=   '<li>Por favor ingresa un codigo postal valido</li>';  
			}
	   }

	   if ($password != $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}


		try {
			$conexion = new PDO('mysql:host=localhost;dbname=prueba_magazine', 'root', '');
			// Si algo esta mal escrito en el nombre d ela bbdd o no existe aparecera un mensaje en pantalla con el error pero solo si pulsamos 'submit'.
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			// $password = hash('sha512', $password);

   	



		$statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre = :nombre LIMIT 1');
		$statement->execute(array(':nombre' => $nombre));
		$resultado = $statement->fetch();

		// var_dump($resultado); 
		if ($resultado != false) { 
			$errores .= '<li>El nombre del usuario ya existe</li>';
		}



		if ($errores == '') {
			$statement = $conexion->prepare('INSERT INTO usuario values(null, :nombre, :correo , :codigo, :provincia, :password)');
			$statement->execute(array(':nombre' => $nombre,
									':correo' => $correo,
									':codigo' => $codigo,
									':provincia' => $provincia,
									':password' => $password));
			// $password = hash('sha512', $password);
			// $enviado = 'true';
			header('Location: iniciar-sesion.php');
		}
   }
    
   


	
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Registrate</title>
	<meta meta="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link src="js/jquery.min.js">
    <script src="js/jquery.js"></script>
    <style type="text/css">
	.error{
		color: red;
	}
	.success{
		color: green;
	}
</style>
</head>
<body style="">

<div class="registro">
<header>
	<nav class="header navbar-inverse">
	  <div class="container-fluid">
	    
	   <div class="">
	</div>
	  </div>
	</nav>
</header>
	

<main>
	 <section class="">
		<div class="textoFondo">
			<h1>Tu tienda on line</h1>
			<p>Lorem ipsum dolore nisi occaecat laborum tempor sed anim sit dolor reprehenderit pariatur cupidatat cupidatat consectetur laborum velit anim.</p>
		</div>
		<div class="opacity"></div>
	</section>


	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control formText" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

			<input type="text" class="form-control formText" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">

			<input type="text" class="form-control formText" id="codigo" name="codigo" placeholder="Codigo Postal:" value="<?php if(!$enviado && isset($codigo)) echo $codigo ?>">

			<input type="text" class="form-control formText" id="provincia" name="provincia" placeholder="Provincia:" value="<?php if(!$enviado && isset($provincia)) echo $provincia ?>">

			<input type="text" class="form-control formText" id="contrasena" name="password" placeholder="Contraseña:" value="<?php if(!$enviado && isset($password)) echo $password ?>">
			<input type="text" class="form-control formText" id="contrasena2" name="password2" placeholder="Repite contraseña:" value="<?php if(!$enviado && isset($password2)) echo $password2 ?>">


			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit-form2" class="btn btn-primary" value="Registrar">
		</form>
	</div>

</main>
</div>











</body>
</html>
