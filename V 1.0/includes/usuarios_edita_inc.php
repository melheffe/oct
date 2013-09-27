<?php
include ('../conect.php');

extract($_REQUEST);

@$id_usuario=$_REQUEST['id_usuario'];
$nombre = $_REQUEST["nombre"];
$email = $_REQUEST["email"];
$clave = $_REQUEST["clave"];
 		
		$errores = array();
		  
		   $regex_name = '/^[a-zA-ZסÑאטלעשביםףתÀÈÌÒÙÁÉÍÓÚüÜ ]{3,}$/';
			if (!preg_match($regex_name,$nombre)) {
			$errores['name'] = "Su nombre contiene caracteres invalidos";
			}
		
		  $regex_mail = '/^[a-z0-9_\.\-\~]{1,}@[a-z0-9_\.\-\~]{1,}.[a-z0-9]{1,1}$/';
			if (!preg_match($regex_mail, $email)) {
			$errores['mail'] = "E-mail es invalido";
			}
			
				if (empty($errores)) {
				$sql = "UPDATE usuario SET
				nombre='$nombre',
				email = '$email',
				clave = '$clave' WHERE id=$id_usuario";
					   
				mysql_query($sql);
				header("Location: ../lista_usuarios.php?status=1");
				}
				if (!empty($errores)){
				header("Location: ../lista_usuarios.php?status=2");
				}
?>