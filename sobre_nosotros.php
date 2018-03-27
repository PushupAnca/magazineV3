<?php 


$_SESSION['nombre'] = 'Ana';

if ($_SESSION) { // las sesiones son variables que podemos utilizar en diferentes paginas y mantener su valor en cada una de ellas.
	$nombre = $_SESSION['nombre'];
} else {
	echo "No has iniciado sesion";
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Magazine Sobre nosotros</title>
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
<body>

<header>
<nav class="header navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Magazine</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="sobre_nosotros.php">Sobre nosotros</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
</header>

<main>

     <section class="fondo">
		<div class="textoFondo">
			<h1>Tu tienda on line</h1>
			<h2>Hola, <?php if ($_SESSION) echo "$nombre"; ?></h2>
			<p>Lorem ipsum dolore nisi occaecat laborum tempor sed anim sit dolor reprehenderit pariatur cupidatat cupidatat consectetur laborum velit anim.</p>
		</div>
		<div class="opacity"></div>
	</section>

	<section class="firstColumnFlex col-lg-12">
				<div class="img">
					<img src="img/crema.jpg">
					 <p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="img/crema.jpg">
					<p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="img/crema.jpg">
					<p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="img/crema.jpg">
					<p>Descripción del producto. Magna eu in proident magna cillum cupidatat velit pariatur quis nisi quis do.
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
		</section>
	<div class="container principal col-lg-12">
		<section class="left sidebar col-lg-2">
			<div class="">
				  <div class="list-group">
				    <a href="#" class="list-group-item">Pantalones slim</a>
				    <a href="#" class="list-group-item">Camisas mujer</a>
				    <a href="#" class="list-group-item">Corbatas</a>
				     <a href="#" class="list-group-item">Corbatas para mujer</a>
				    <a href="#" class="list-group-item">Complementos mujer</a>
				    <a href="#" class="list-group-item">Faldas</a>
				     <a href="#" class="list-group-item">Vestidos</a>
				  </div>
            </div>
		</section>
		<section class="contenido flexboxColumn col-lg-8">
			<div class=" flexbox">
				<div class="img">
					<img src="img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/crema.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/gestion.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/Global.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
			</div>
			<div class=" flexbox">
				<div class="img">
					<img src="img/provedor.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/solar.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/usuarios.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
			</div>
			<div>
			
			</div>
			<div class=" flexbox">
				<div class="img">
					<img src="img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
				<div class="img">
					<img src="img/img1.jpg">
					<p><span class="glyphicon glyphicon-thumbs-up"></span></p>
					<p><span class="glyphicon glyphicon-thumbs-down"></span></p>      
					<p>Nombre producto
				        <button type="button" class="btn btn-default btn-sm">
				          <span class="glyphicon glyphicon-shopping-cart"></span>Agregar al carrito
				        </button>
				    </p>
				    <div class="estrellas">
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    	<p><span class="glyphicon glyphicon-star"></span></p>
				    </div>
				</div>
			</div>
			
		</section>
		<section class="right flexboxColumn col-lg-2">
				<div class="img">
					<img src="img/img2.jpg">
					 <p>Productos relacionados
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
				<div class="img">
					<img src="img/img2.jpg">
					<p>Productos relacionados
					    <a href="#" class="btn btn-info btn-lg">
					      <span class="glyphicon glyphicon-shopping-cart"></span> Agregar al carro
					    </a>
					 </p> 
				</div>
		</section>
	</div>
</main>






<script type="text/javascript" src="js/.js"></script>
</body>
</html>