<?php
// +----------------------------------------------------------------------
// | PHP Source                                                           
// +----------------------------------------------------------------------
// | Web-Dveloper (C) 2005 by  <7SETH>
// +----------------------------------------------------------------------
// |
// | Created by: Julio Calvo | jccalvo@gmail.com
// +----------------------------------------------------------------------
//login.php: valida la entrada de usuarios....
session_start();
include "../conect.php";
$email = strtolower ($_REQUEST["email"]);
$clave = strtolower ($_REQUEST["clave"]);
//echo $email."....".$clave;
/*		
		$sql="select * from usuario"; //LOGIN DE USUARIOS
		$sql_exec = mysql_query($sql);
		//$rec = mysql_fetch_array($sql_exec);
		while($rec = mysql_fetch_array($sql_exec)){
		echo $rec['email']."---".$rec['clave']."<br>";
		}
*/


	if(empty($email) or empty($clave)){
	//error tipo: 1 campos vacios.
	header("Location: ../login.php");
	}else{

		$sql="select * from usuario where email='".$email."' and clave='".$clave."' "; //LOGIN DE USUARIOS
		$sql_exec = mysql_query($sql);
		$rec = mysql_fetch_array($sql_exec);
		//echo mysql_num_rows($sql_exec);
		//echo mysql_error();
				if ($rec['email'] == $email  and $rec['clave'] == $clave  ){
				
									//DEFINO LAS VARIABLES DE SESION QUE VOY A USAR EN EL SISTEMA
									//Y SEGUN ELLAS VALIDO LA ENTRADA A CIERTAS AREAS DEL MISMO,
									//O MOSTRAR DATOS SEGUN EL TIPO DE USUARIO
									$_SESSION['id_usuario']=$rec["id"];//ID DEL USUARIO
									$_SESSION['nombre']=$rec["nombre"];//nombre del usuario
									$_SESSION['email']=$rec["email"];//email
									$_SESSION['id_tipo_usuario']=$rec["id_tipo_usuario"];//ID DEL USUARIO
 
									header("Location: ../adminmenu.php");
				}else{ 
				$msj="Error";
				//error tipo: 2 usuarios no esta registrado en la base de datos	
				header("Location: ../login.php");
				}
	}	
	
?>