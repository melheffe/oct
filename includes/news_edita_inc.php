<?php
include ('../conect.php');

extract($_REQUEST);

@$id_news=$_REQUEST['id_news'];
$titulo = $_REQUEST["titulo"];
$body = $_REQUEST["body"];
				
				$sql = "UPDATE news SET
				titulo='$titulo',
				body = '$body' WHERE idnews=$id_news";
					   
				mysql_query($sql);
				header("Location: lista_notice.php?status=1");

?>