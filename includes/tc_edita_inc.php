<?php
include ('../conect.php');

extract($_REQUEST);


@$id_tc=$_REQUEST['id_tc'];
@$name = $_REQUEST["name"];


				
				$sql = "UPDATE tc SET
				name='$name' WHERE id_tc=".$id_tc;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_tc.php?status=1");

?>