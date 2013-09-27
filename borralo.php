<?php
include ('conect.php');
@$Id_kw=$_REQUEST['id'];

$query = "DELETE FROM kw WHERE Id_kw = $Id_kw";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: depurador.php");
exit();
?>