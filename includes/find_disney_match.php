<?php require_once ('../conect.php');
@$ses_track=$_REQUEST['ses_track'];
@$cant=$_REQUEST['cant'];
@$type=$_REQUEST['type'];
@$days=$_REQUEST['days'];
@$h=$_REQUEST['h'];
@$w=$_REQUEST['w'];
@$e=$_REQUEST['e'];
@$id_pds=$_REQUEST['id_pds'];
//print_r($_REQUEST);


		$sql2="SELECT * FROM tk WHERE type_tk = $type AND kind = 3 AND days = $days";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$id_tk = $row2['id_tk'];
		}
		
$cantidad=$cant;
//echo $ses_track;

	header("Location: add_to_temp.php?id_tk=$id_tk&num=$cantidad&ses_track=$ses_track&type=$type&id_pds=$id_pds&h=$h&w=$w&e=$e&kind=3");
	exit();		
?>