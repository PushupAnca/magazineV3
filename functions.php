
<?php 

function validarNombre($nombre){
		if (!empty($nombre)) {
		$nombre1 = trim($nombre);
		$nombre1 = filter_var($nombre, FILTER_SANITIZE_STRING); 

		if ($nombre1 == $nombre) {
			return '';
		}else{
			return 'Por favor ingresa un nombre valido <br />';
		}
	} else {
		return 'Por favor ingresa un nombre <br />';
	}
}
function validarCorreo($correo){	
		if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){        

			return  'Por favor ingresa un correo valido <br />';  
		}
	}else{
		return  'Ingresa un correo  <br/>';
	}
}
function validarProvincia($provincia){
		if (!empty($provincia)) {
		$provincia = filter_var($provincia, FILTER_SANITIZE_SPECIAL_CHARS);
		$provincia = trim($provincia);

	}else{
		return 'Ingresa una provincia <br/>';
	}
}
function validarCodigoPostal($codigo){
	
		if (!empty($codigo)) {
		$codigo = filter_var($codigo, FILTER_VALIDATE_INT);
		$codigo = trim($codigo);
	        if(!filter_var($codigo, FILTER_VALIDATE_INT)){        

			return  'Por favor ingresa un codigo postal valido <br />';  
			}

	   }else{
		  return 'Ingresa una codigo postal <br/>';
	    }
}


function validarMensaje($mensaje){
		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje); //htmlspecialchars convierte los caracteres especiales en entidades html.
			$mensaje = trim($mensaje);
			$mensaje = stripslashes($mensaje);  //stripslashes =>  Quita las barras de un string con comillas escapadas
		} else {
			return 'Por favor ingresa el mensaje <br />';
		}
}

function validarPassword($password){
		if(!empty($pass)){
			$password = htmlspecialchars($password); //htmlspecialchars convierte los caracteres especiales en entidades html.
			$password = trim($password);
			$password = stripslashes($password);  //stripslashes =>  Quita las barras de un string con comillas escapadas
		} else {
			return 'Por favor ingresa el password <br />';
		}
}


?>