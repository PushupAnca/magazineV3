
<?php 

$id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_magazine', 'root', '');
	// echo "Conexion OK";

	// Metodo Query
	// $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = 5");

	// foreach ($resultados as $fila) {
	// 	echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
	// }

	// Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM  articulos');
	$statement->execute(array());

	$resultados = $statement->fetchAll();
	
	foreach ($resultados as $articulos) {
		echo $articulos['id'] . '<br/>';
	}

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>