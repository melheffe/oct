<?php
include ('conect.php');
@$id_cart=$_REQUEST['id_cart'];

$query = "DELETE FROM cart WHERE id_cart = $id_cart";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: comprar.php");
exit();
?>