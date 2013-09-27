<?php
//session_destroy();

//login.php: valida la entrada de usuarios....
session_start();
include "../conect.php";
include('lib.php');
$email = strtolower ($_REQUEST["email"]);
$clave = strtolower ($_REQUEST["clave"]);
$ses_track = strtolower ($_REQUEST["ses_track"]);
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
	header("Location: ../login_customer.php");
	}else{

		$sql="select * from customers where email='".$email."' and clave='".$clave."' "; //LOGIN DE USUARIOS
		$sql_exec = mysql_query($sql);
		$rec = mysql_fetch_array($sql_exec);
		//echo mysql_num_rows($sql_exec);
		//echo mysql_error();
				if ($rec['email'] == $email  and $rec['clave'] == $clave  ){
				
									//DEFINO LAS VARIABLES DE SESION QUE VOY A USAR EN EL SISTEMA
									//Y SEGUN ELLAS VALIDO LA ENTRADA A CIERTAS AREAS DEL MISMO,
									//O MOSTRAR DATOS SEGUN EL TIPO DE USUARIO
									$_SESSION['Id_customer']=$rec["Id_customer"];//ID DEL USUARIO
									$_SESSION['firstname']=$rec["firstname"];//nombre del usuario
									$_SESSION['email']=$rec["email"];//email
									$_SESSION['ses_track']=$rec["ses_track"];//ID DEL USUARIO
									
									$carrito=lookintocart($ses_track);
									
									if (empty($carrito)){
									header("Location: ../my_oct_menu.php");
									}else{
									header("Location: ../customer_selector.php");
									}
 
									
				}else{ 
				$msj="Error";
				//error tipo: 2 usuarios no esta registrado en la base de datos	
				header("Location: ../login_customer.php");
				}
	}	
	
?>