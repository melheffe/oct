<?php include ("conect.php");
@$ses_track=$_REQUEST['ses_track'];
@$id_tk=$_REQUEST['id_tk'];
@$cantidad=$_REQUEST['cantidad'];

	$query = "INSERT INTO cart SET
	cantidad = '$cantidad',
	id_ses_track = '$id_ses_track',
	id_tk = '$id_tk'";
			
	mysql_query($query);
	$msj="OK";
echo $msj;
?>
