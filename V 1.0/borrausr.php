<?php
include ('conect.php');
@$id_usuario=$_REQUEST['id_usuario'];

$query = "DELETE FROM usuario WHERE id_usuario = $id_usuario";
		mysql_query($query);
		$status = mysql_affected_rows();

header("Location: lista_usuarios.php?status=2");
exit();
?>