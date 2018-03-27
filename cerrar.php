<?php 

session_start();
session_destroy();

$_SESSION = array();

header('Location: http://localhost/php/magazineV3/magazineV3/iniciar-sesion.php');
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