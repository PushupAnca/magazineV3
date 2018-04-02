<?php 
session_start();

$_SESSION['nombre'] = '';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Magazine</title>
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
    
     .carousel-inner>.item>a>img, .carousel-inner>.item>img{
      width: 100%;
     }
     .pager{
      margin-bottom: 0px;
     } 
    .navbar-default .navbar-nav>.active>a:hover{
      background: #ca82ad;
    }
    </style>
</head>

<body>

 <ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    
    </div>
     <div class="collapse navbar-collapse col-lg-4" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../sobre_nosotros.php">Sobre nosotros</a></li>
       
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../magazine.php">Magazine</a></li>
        <li class=""><a href="#shooper">Shooper</a></li>
        <li class=""><a href="#desfiles">Desfiles</a></li>
        <li class=""><a href="#contact">CONTACT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img src="../img/zakupy.jpg" alt="Nuestra tienda" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Nuestra tienda</h3>
          <p>Desde 22 Marzo 2018</p>
        </div>      
      </div>

      <div class="item">
        <img src="../img/comprar.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Fotos tienda</h3>
          <p>Desde 22 Marzo 2018</p>
        </div>      
      </div>
    
      <div class="item active">
        <img src="../img/4e.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Desde 22 Marzo 2018</h3>
          <p>Eventos Magazine 2018</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div id="shooper" class="container text-center">
  <h3>Describe Maria</h3>
  <p><em>Personal Shooper</em></p>
  <p>Los zapatos joya son el calzado estrella de esta temporada, toman todo el protagonismo de nuestro look.  Todo tipo de calzado se apunta a esta tendencia, es mucho más versátil de lo que creemos, ya que no solo son aptos para eventos donde tienes que ir más arreglada, sácale el lado más casual y póntelos.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Ankle strap</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="../img/Global.jpg" class="img person" alt="Descripción producto" width="255" height="170">
      </a>
      <div id="demo" class="collapse">
        <p>Zapato piel</p>
        <p>Numero 37/42</p>
        <p>Fabricante... Color: </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Bluchers</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="../img/Global.jpg" class="img person" alt="Descripción producto" width="255" height="170">
      </a>
      <div id="demo2" class="collapse">
        <p>Zapato piel</p>
        <p>Numero 37/42</p>
        <p>Fabricante... Color: </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Botines</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="../img/Global.jpg" class="img person" alt="Descripción producto" width="255" height="170">
      </a>
      <div id="demo3" class="collapse">
        <p>Zapato piel</p>
        <p>Numero 37/42</p>
        <p>Fabricante... Color: </p>
      </div>
    </div>
  </div>
</div>

<div id="desfiles" class="bg-1">
  <div class="container">
    <h3 class="text-center">Desfiles</h3>
    <p class="text-center">Cada temporada y cada vez que nos necesites<br> Acompañanos en este viaje<br><br></p>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../img/crema.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Desde 22 Marzo 2018</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Comprar Product</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../img/crema.jpg" alt="Fotos tienda" width="400" height="300">
          <p><strong>London</strong></p>
          <p>Desde 22 Marzo 2018</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Comprar Product</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="../img/crema.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>Chicago</strong></p>
          <p>Desde 22 Marzo 2018</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Comprar Product</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Prenda</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Prendas/s </label>
              <input type="number" class="form-control" id="psw" placeholder="Cuantas prendas?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Enviar pedido</label>
              <input type="text" class="form-control" id="usrname" placeholder="Insertar email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p> <a href="#"></a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="contact" class="container">
  <h3 class="text-right">Contácta con nosotros</h3>
  <p class="text-right"><em>En cualquier momento podemos ofrecerte un personal shopper.</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Contáctanos:</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Madrid</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: (34) 91 523 652 142</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required="">
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required="">
        </div>
      </div>
      <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" rows="5" style="max-width: 750px;"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">De nuestros clientes</h3>  
  <ul class="nav nav-tabs">
    <li class=""><a data-toggle="tab" href="#home" aria-expanded="false">Ana</a></li>
    <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false">Daniel</a></li>
    <li class="active"><a data-toggle="tab" href="#menu2" aria-expanded="true">María</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade">
      <h2>Ana, personal Shooper</h2>
      <p>No hay nada que estilice más la figura de una mujer que usar el correcto par de tacones.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Daniel, amante de los zapatos</h2>
      <p>Nada mejor que entrar en tu tienda preferida y enamorarte de unos zapatos... Los hombres también amamos los zapatos.</p>
    </div>
    <div id="menu2" class="tab-pane fade active in">
      <h2>Maria, comprar es necesario</h2>
      <p>Me enamore de la tienda y del trato, es imposible no encontrar lo que estas buscando.</p>
    </div>
  </div>
</div>


<footer class="text-center">
    <p>Magazine by <a href="https://github.com/PushupAnca/tienda" target="_blank" data-toggle="tooltip" title="" data-original-title="">Ana Maria Timsa</a></p> 
</footer>





</body>
</html>