<?php
include ('conect.php');
@$Id_customer=$_REQUEST['Id_customer'];

$query = "DELETE FROM customers WHERE Id_customer = $Id_customer";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_customers.php?status=2");
exit();
?>