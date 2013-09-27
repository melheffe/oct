<?php
include ('conect.php');
@$id_na=$_REQUEST['id_na'];

$query = "DELETE FROM na WHERE id_na = $id_na";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_na.php");
exit();
?>