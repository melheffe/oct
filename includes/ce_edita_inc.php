<?php
include ('../conect.php');

extract($_REQUEST);

@$id_ce=$_REQUEST['id_ce'];
@$titulo = $_REQUEST["titulo"];
@$contenido = $_REQUEST["contenido"];
@$foto = $_REQUEST["foto"];
@$activo = $_REQUEST["activo"];

if (empty($activo)){
			$activo=2;
			}				
				$sql = "UPDATE ce SET
				titulo='$titulo',
				contenido = '$contenido',
				activo = '$activo',
				foto = '$foto' WHERE id_ce=".$id_ce;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_ce.php?status=1");

?>