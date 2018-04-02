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
			<input type="password" class="form-control formText" id="contrasena2" name="password2" placeholder="Repite contraseña:" value="<?php if(!$enviado && isset($password2)) echo $password2 ?>">


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
