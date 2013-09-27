<?php
include ('conect.php');
@$id_doc=$_REQUEST['id_doc'];

$query = "DELETE FROM docs WHERE id_doc = $id_doc";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_docs.php");
exit();
?>