<?php
include ('../conect.php');

extract($_REQUEST);


@$id_tk=$_REQUEST['id_tk'];
@$ages = $_REQUEST["ages"];
@$conditions = $_REQUEST["conditions"];
@$days = $_REQUEST["days"];
@$gate = $_REQUEST["gate"];
@$nombre_tk = $_REQUEST["nombre_tk"];
@$our = $_REQUEST["our"];
@$status = $_REQUEST["status"];
@$type_tk = $_REQUEST["type_tk"];

	
				$sql = "UPDATE tk SET
				nombre_tk = '$nombre_tk',
				cat_pds = '$cat_pds',
				type_tk = '$type_tk',
				ages = '$ages',
				days = '$days',
				gate = '$gate',
				our = '$our',
				status = '$status',
				conditions = '$conditions' WHERE id_tk=".$id_tk;
				
				//print_r($_REQUEST);
					   
				mysql_query($sql);
				//$qpaso = mysql_affected_rows();
				//echo $qpaso;
				header("Location: ../lista_tk.php?status=1");

?>