<?php
include ('../conect.php');

extract($_REQUEST);


@$id_na=$_REQUEST['id_na'];
@$titulo = $_REQUEST["titulo"];
@$contenido = $_REQUEST["contenido"];
@$foto = $_REQUEST["foto"];
@$activo = $_REQUEST["activo"];

if (empty($activo)){
			$activo=2;
			}
				
				$sql = "UPDATE na SET
				titulo='$titulo',
				contenido = '$contenido',
				activo = '$activo',
				foto = '$foto' WHERE id_na=".$id_na;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_na.php?status=1");

?>