<?php 
session_start();


if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

if (isset($_COOKIE['color'])) {
	$color = htmlspecialchars($_COOKIE['color']);
} else {
	$color = 'green';
}





$enviado = '';
$errores = '';


require 'functions.php';
// require 'registro.php';


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
			// header('Location: home.php'); no entiendo por que si dejo la location no me vacia los campos del los input. 
			$enviado = 'true';

		}else{
			$errores .= '<li>Datos incorrectos</li>';
		}


    }
    
   

 //    if($errores == ''){
		

	// 	//mail($enviar_a, $asunto, $mensaje_preparado); // esta function no va a functionar si trabajas con xamp-; dara error. Solo pasa en un localhost. Si subiemos a un servidor nuestra pagino de donde recojemos datos debe functionar.
	// 	$enviado = 'valor';
	// }
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar sesion</title>
	<meta meta="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link src="js/jquery.min.js">
    <script src="js/jquery.js"></script>
</head>
<style type="text/css">
	.error{
		color: red;
	}
	.success{
		color: green;
	}

	p {
	  color: <?php echo $color; ?>;
	}
</style>
<body style="background-image: url('img/solar.jpg') ;background-repeat: no-repeat; background-size: cover; height: 800px;width: 100%; background-position-y: 44px ; margin-top: 0px ;position: fixed;">
<header>
	<nav class="header navbar-inverse">
	    <div class=" navbar-right">
	      <ul class="pager">
		  	<li><a href="cerrar.php">Cerrar sesion</a></li>
	     </ul>
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

	<div class="wrap2">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control formText" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">

			<input type="text" class="form-control formText" id="Password" name="password" placeholder="Contraseña:" value="<?php if(!$enviado && isset($password)) echo $password ?>">

			<!-- <textarea name="mensaje" class="form-control formText" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea> -->

			 <?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Enviado Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
		</form>
	</div>

</main>











</body>
</html>