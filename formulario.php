
<?php 
session_start();

require 'functions.php';



$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];


$errores .= validarNombre($nombre);




	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL); // 

		if(!$correo == filter_var($correo, FILTER_VALIDATE_EMAIL)){      // FILTER_VALIDATE_EMAIL nos rturna false si el email es incorrecto. Si es correcto devueleve el mismo correo. 	   

			$errores .= 'Por favor ingresa un correo valido <br />';  // .= concatenación. Muestra el valor que ya tenia $errores mas lo que le concatenas.
		}
	} else {
		$errores .= 'Por favor ingresa un correo <br />';
	}

	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje); //htmlspecialchars convierte los caracteres especiales en entidades html.
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);  //stripslashes =>  Quita las barras de un string con comillas escapadas
	} else {
		$errores .= 'Por favor ingresa el mensaje <br />';
	}

	if($errores == ''){
		$enviar_a = 'tunombre@tuempresa.com';
		$asunto = 'Correo enviado desde miPagina.com';
		$mensaje_preparado = "De: $nombre \n";             // el \n nos crea un salto de linea 
		$mensaje_preparado .= "Correo: $correo \n";
		$mensaje_preparado .= "Mensaje: " . $mensaje;

		//mail($enviar_a, $asunto, $mensaje_preparado); // esta function no va a functionar si trabajas con xamp-; dara error. Solo pasa en un localhost. Si subiemos a un servidor nuestra pagino de donde recojemos datos debe functionar.
		$enviado = 'ffff';
	}

}elseif(empty($enviado)){
      // header('Location: http://localhost/magazine/magazine.php');
}

// require 'iniciar-sesion.php';




if (isset($_POST['submit-form2'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$codigo = $_POST['codigo'];
	$provincia = $_POST['provincia'];
	$submitForm2 = $_POST['submit-form2'];

	echo 'llego los datos de registro';

	if (!empty($nombre)) {
		$nombre = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);
	}else{
		$errores .= 'Ingresa un nombre valido';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){        

			$errores .= 'Por favor ingresa un correo valido <br />';  
		}
	}else{
		$errores .= 'Ingresa un correo';
	}

	if (!empty($provincia)) {
		$provincia = filter_var($provincia, FILTER_SANITIZE_SPECIAL_CHARS);
		$provincia = trim($provincia);

		$errores .= 'Ingresa una provincia';

	}else{
		$errores .= 'Ingresa una provincia valida';
	}


	if (!empty($codigo)) {
		$codigo = filter_var($codigo, FILTER_VALIDATE_INT);
		$codigo = trim($codigo);

		$errores .= 'Ingresa una codigo postal';

	}else{
		$errores .= 'Ingresa una codigo postal valido';
	}
}


// require 'registro.php';

?>


