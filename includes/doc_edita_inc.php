<?php
include ('../conect.php');

extract($_REQUEST);

@$id_doc=$_REQUEST['id_doc'];
@$active = $_REQUEST["active"];
@$doc_tit = $_REQUEST["doc_tit"];
@$doc_cont = $_REQUEST["doc_cont"];

if (empty($active)){
			$active=2;
			}
				
				$sql = "UPDATE docs SET
				doc_tit='$doc_tit',
				active = '$active',
				doc_cont = '$doc_cont' WHERE id_doc=".$id_doc;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_docs.php?status=1");

?>