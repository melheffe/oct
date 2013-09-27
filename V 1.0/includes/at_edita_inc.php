<?php
include ('../conect.php');

extract($_REQUEST);

@$id_at=$_REQUEST['id_at'];
@$nombre_at = $_REQUEST["nombre_at"];
@$description = $_REQUEST["description"];
@$coments = $_REQUEST["coments"];
@$pic_at = $_REQUEST["pic_at"];
@$cat_pds = $_REQUEST["cat_pds"];

if (empty($activo)){
			$activo=2;
			}
				
				$sql = "UPDATE at SET
				nombre_at='$nombre_at',
				cat_pds = '$cat_pds',
				description = '$description',
				coments = '$coments',
				pic_at = '$pic_at' WHERE id_at=".$id_at;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_at.php?status=1");

?>