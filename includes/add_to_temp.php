<?php include ("../conect.php");
@$ses_track=$_REQUEST['ses_track'];
@$id_item=$_REQUEST['id_tk'];
@$cantidad=$_REQUEST['num'];
@$type=$_REQUEST['type'];
@$id_pds=$_REQUEST['id_pds'];
@$h=$_REQUEST['h'];
@$w=$_REQUEST['w'];
@$e=$_REQUEST['e'];
@$kind=$_REQUEST['kind'];

$sql="SELECT * FROM cart WHERE id_item = $id_item AND id_ses_track ='".$ses_track."'";
$sql_exec=mysql_query($sql);
while($row=mysql_fetch_assoc($sql_exec)){
  $prop = $row['id_cart'];
  $old = $row['cantidad'];
  $oh = $row['h'];
  $ow = $row['w'];
  $oe = $row['e'];
} 

if (empty($h)) {$h=0;}
if (empty($w)) {$w=0;}
if (empty($e)) {$e=0;}
/* if ($h==$oh || $e==$oe || $w==$ow) {
echo $same="y";
} */
if (empty($prop)){

	$query = "INSERT INTO cart SET
	cantidad = '$cantidad',
	id_ses_track = '$ses_track',
	type = '$type',
	h = '$h',
	w = '$w',
	e = '$e',
	kind = '$kind',
	id_item = '$id_item'";
			
	mysql_query($query);
	
	} else {
	
//solo hopper

//solo NE

//solo waterpark

// Hopper y Waterparks

	
	$cantidad=$old+$cantidad;
	$sqla = "UPDATE cart SET
	cantidad = '$cantidad' WHERE id_cart = $prop";
					   
	mysql_query($sqla);
	
	
	}
	
	$msj="OK";
	header("Location: ../p_screen.php?id_pds=".$id_pds);
?>
