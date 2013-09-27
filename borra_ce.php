<?php
include ('conect.php');
@$id_ce=$_REQUEST['id_ce'];

$query = "DELETE FROM ce WHERE id_ce = $id_ce";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_ce.php");
exit();
?>