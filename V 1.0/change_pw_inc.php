<?php 
include ('../conect.php');

extract($_REQUEST);

@$idcliente=$_REQUEST['idcliente'];
@$old=$_REQUEST['old'];	
@$new1=$_REQUEST['new1'];
@$new2=$_REQUEST['new2'];

		if ($new1==$new2){
		$sql_2 = "SELECT * FROM clientes WHERE IdCliente = $idcliente";
		$cat_2=mysql_query($sql_2);
		$buscalo=mysql_fetch_assoc($cat_2);
		$new1=strtolower($new1);
			if ($old==$buscalo['pw']){
			
				$sql = "UPDATE clientes SET
				pw = '$new1' WHERE IdCliente=$idcliente";
	   
				mysql_query($sql);	
		
				$mensaje = "
			Gracias Sr(a). $nombre $apellido
			Su nueva contraseña es : $new1

			Mensaje enviado desde: {$_SERVER['REMOTE_ADDR']}
			Mensaje enviado el: ".strftime('%A,%d %b %Y');
			
			$headers = "From: MBE Guaparo <secure@mbeguaparo.com>";
			$stato = @mail($email, 'Recordatorio de contraseña de MBE', $mensaje, $headers);
				
				
				$status=1;
				header('Location: ../hist.php?id='.$idcliente.'&status='.$status);
			}else{
			$status=4;
				header('Location: ../hist.php?id='.$idcliente.'&status='.$status);
			}
		}else {
		$status=3;
				header('Location: ../hist.php?id='.$idcliente.'&status='.$status);
		}	
//--------------------------------------------------------------------------------------------------
		

?>