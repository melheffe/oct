<?php
include ('conect.php');
@$id_tk_combo_items=$_REQUEST['id_tk_combo_items'];
@$id_tk=$_REQUEST['id_tk'];

$query = "DELETE FROM tk_combo_items WHERE id_tk_combo_items = $id_tk_combo_items";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: add_tk_combo_2nd.php?status=2&id_tk=$id_tk");
exit();
?>