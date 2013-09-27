<?php require_once('conect.php');
@$cat=$_REQUEST['id_pds'];
$sql="SELECT * FROM galerias WHERE id_pds = $cat ORDER BY RAND()";
$sql_exec=mysql_query($sql);

?><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="160" height="" valign="middle" align="center"><img src="images/photo_logo.gif" width="150" height="38" /></td>
  </tr>
  <?php $cou=0;
while($row=mysql_fetch_assoc($sql_exec)){  
$pics=$row['ruta'];
$cou=$cou+1;
//----------------------------------------------------- image procesor
$hor=160;// define el acho de la imagen 
$ver=160;// define el alto de la imagen 

$rel_graph=$hor/$ver;
$rel_graph_inv=$ver/$hor;

$blah = getimagesize($pics);
$type = $blah['mime'];
$ancho = $blah[0];
$alto = $blah[1];
$relacion = $ancho/$alto;
$relacion_inv = $alto/$ancho;


if ($relacion > 1){// si es mas ancha que alta
	if ($ancho > $hor){
	$ancho=$hor;
	$alto=$ancho*$relacion_inv;
	} else {
	$ancho=$ancho;
	$alto=$ancho*$relacion_inv;
	}
}
if ($relacion < 1){// si es mas alta que ancha
	if ($alto > $ver){
	
	$alto=$ver;
	$ancho=$alto*$relacion;
	} else {
	$alto=$alto;
	$ancho=$alto*$relacion;
	}

}
if ($relacion == 1){// esta es cuadrada
$alto=$ver;
$ancho=$hor;
}

//------------------------			


?>
  <tr>
    <td width="160" height="<?=$alto+4?>" align="center" valign="middle"><div align="center"><img src="<?=$pics?>" alt="<?=$row['nombre_pds']?>" width="<?=$ancho?>" height="<?=$alto?>" /></div></td>
  </tr>
  <?php if ($cou==8){
	break 1;}}?>
</table>
