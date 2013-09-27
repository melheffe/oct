<?php
include ('conect.php');
@$id_tk=$_REQUEST['id_tk'];

$query = "DELETE FROM tk WHERE id_tk = $id_tk";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_tk.php?status=2");
exit();
?>