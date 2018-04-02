<?php 

session_start();
session_destroy();

$_SESSION = array();

header('Location: http://localhost/php/tienda/iniciar-sesion.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cerrar sesion</title>
</head>
<body>

<h1>Has Cerrado sesion correctamente</h1>


</body>
</html>