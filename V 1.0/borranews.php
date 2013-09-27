<?php
include ('conect.php');
@$id_news=$_REQUEST['id_news'];

$query = "DELETE FROM news WHERE idnews = $id_news";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_notice.php");
exit();
?>