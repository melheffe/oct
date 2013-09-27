<?php
include ('conect.php');
@$id_at=$_REQUEST['id_at'];

$query = "DELETE FROM at WHERE id_at = $id_at";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_at.php");
exit();
?>