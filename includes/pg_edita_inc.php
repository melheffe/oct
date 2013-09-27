<?php
include ('../conect.php');

extract($_REQUEST);


@$Id_pg=$_REQUEST['Id_pg'];
@$nombre_pg = $_REQUEST["nombre_pg"];
@$rank = $_REQUEST["rank"];


				
				$sql = "UPDATE pg SET
				nombre_pg='$nombre_pg',
				rank ='$rank' WHERE Id_pg=".$Id_pg;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_pg.php?status=1");

?>