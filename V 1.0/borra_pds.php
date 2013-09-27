<?php
include ('conect.php');
@$id_pds=$_REQUEST['id_pds'];

$query = "DELETE FROM pds WHERE id_pds = $id_pds";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_pds.php");
exit();
?>