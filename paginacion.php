<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_magazine', 'root', '');
} catch (PDOException $e) {
	echo "ERROR: " . $e->getMessage();
	die();
}


// Creamos una variable pagina para hacer un condicional en el cual preguntamos si la variable _GET['pagina'] esta seteada ? quieremos obtener el valor entero (int) de este mismo valor. (int)$_GET['pagina'] de otra forma : (los : significa else()) el valor que sea 1;
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ; // es un condicional


// como las paginas cargan de 5 en 5 creamos la var $postPorPagina
$postPorPagina = 3; 


// Aqui hacemos condicional y la condicion es que si la pagina es mayor que 1 siempre y cunado ($pagina * $postPorPagina - $postPorPagina) de otra forma sera = 0. ($pagina * $postPorPagina - $postPorPagina) => significa, pagina por $postporPagina que es 5 - postporPagina que es menos 5. cualquier pagina que sea debe dar el resultado 5 
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;


//Preparando la consulta: de la bbdd articulos quieremos los articulos. Si le ponemos un limit de 0 a 5 siempre en cualquier pagina traera los primeros 5 articulos, para que traiga en cada pagina los siguentes 5 implementamos la var $inicio y $postPorPagina. De esta form se cumple el condicional y en cada pagina tendremos 5 articulos siguentes.  --> con esta 
// SQL_CALC_FOUND_ROWS --> de esta forma podemos contar cuantos articulos tenemos en nuestra bbdd.
$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM articulos
	LIMIT $inicio, $postPorPagina
");



// 
$articulos->execute();
$articulos = $articulos->fetchAll();
// print_r($articulos);



// si el usuario cambia en la url la var pagina= a un numero no existe redirigimos al usuario al index.php.
if (!$articulos) {
	header('Location: index.php');
}

// calculamos el total de articulos que tenemos para saber el numero de pagina que necesitamos para mostrarlos de 5 en 5.
// FOUND_ROWS() es un afunction para encontrar las filas como total. 
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');

// quieremos almacenar las filas de los articulos y con el fetch()  como ['total'];
$totalArticulos = $totalArticulos->fetch()['total'];
// echo $totalArticulos; total de articulos


// calculamos el numero de paginas sera igual a un aoperacion: en esta ocasion tenemos 5 articulos por pagina y resultan 5 paginas, si tendriamos menos de 5 por que el calculo saldria con coma, la function ceil() redondea el numero y nos crea una pagina mas aunque fuera para mostrar un articulo solo. 
$numeroPaginas = ceil($totalArticulos / $postPorPagina);
echo $numeroPaginas;

require 'magazine.php';

?>