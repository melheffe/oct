<?php
include ('conect.php');
@$Id_pg=$_REQUEST['id_pg'];

$query = "DELETE FROM pg WHERE Id_pg = $Id_pg";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_pg.php");
exit();
?>