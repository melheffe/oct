<?php
include ('conect.php');
@$id_pds=$_REQUEST['id_pds'];
@$id_tk=$_REQUEST['id_tk'];

	
	$query="INSERT INTO tk_disney_items SET
	id_tk = '$id_tk',
	id_pds = '$id_pds'";	
						
	mysql_query($query);
						
header("Location: add_tk_disney_2nd.php?id_tk=$id_tk");
?>