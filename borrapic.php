<?php
include ('conect.php');
@$id_pds=$_REQUEST['id_pds'];
@$id_pic=$_REQUEST['id_pic'];

$query = "DELETE FROM galerias WHERE id_pic = $id_pic";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: add_galery.php?id_pds=$id_pds");
exit();
?>