<?php
include ('conect.php');
@$id_tk_disney_items=$_REQUEST['id_tk_disney_items'];
@$id_tk=$_REQUEST['id_tk'];

$query = "DELETE FROM tk_disney_items WHERE id_tk_disney_items = $id_tk_disney_items";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: add_tk_disney_2nd.php?status=2&id_tk=$id_tk");
exit();
?>