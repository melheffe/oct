<?php
include ('conect.php');
@$id_tc=$_REQUEST['id_tc'];

$query = "DELETE FROM tc WHERE id_tc = $id_tc";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_tc.php");
exit();
?>