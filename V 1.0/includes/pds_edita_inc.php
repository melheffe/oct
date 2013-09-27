<?php
include ('../conect.php');

extract($_REQUEST);


@$id_pds=$_REQUEST['id_pds'];
@$nombre_pds = $_REQUEST["nombre_pds"];
@$pic_pds = $_REQUEST["pic_pds"];
@$cat_pds = $_REQUEST["pg"];
@$cat_pds2 = $_REQUEST["pg2"];
@$description = $_REQUEST["description"];
@$coments = $_REQUEST["coments"];
@$disney = $_REQUEST["disney"];
@$universal = $_REQUEST["universal"];

if ($universal==1 || $disney==1){ header("Location: ../lista_pds.php?status=2"); }	
			
				$sql = "UPDATE pds SET
				nombre_pds = '$nombre_pds',
				cat_pds = '$cat_pds',
				cat_pds2 = '$cat_pds2',
				description = '$description',
				coments = '$coments',
				disney = '$disney',
				universal = '$universal',
				pic_pds = '$pic_pds' WHERE id_pds=".$id_pds;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_pds.php?status=1");

?>