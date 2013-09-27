<?php
require_once ('conect.php');
@$id_pds=$_REQUEST['id_pds'];

$qsq="SELECT * FROM pds WHERE id_pds=$id_pds";
$qs_sq=mysql_query($qsq);
while($fila=mysql_fetch_assoc($qs_sq)){
$cat=$fila['cat_pds'];
}

$qs="SELECT * FROM pds WHERE cat_pds=$cat OR cat_pds2=$cat ORDER BY RAND()";
$qs_s=mysql_query($qs);
?>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<link href="css.css" rel="stylesheet" type="text/css">
<table width="388" border="0" cellspacing="0" cellpadding="0">
  <tr>
<?php $cou=0;
	while($fila=mysql_fetch_assoc($qs_s)){
if ($fila['id_pds']!=$id_pds){	
	$cou=$cou+1;
$pic=$fila['pic_pds'];
//----------------------------------------------------- image procesor
$hor=65;// define el acho de la imagen 
$ver=65;// define el alto de la imagen 

$rel_graph=$hor/$ver;
$rel_graph_inv=$ver/$hor;

$blah = getimagesize($pic);
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
    <td width="392" height="100" valign="middle"><div align="center"><a href="p_screen.php?id_pds=<?=$fila['id_pds']?>"><img src="<?=$pic?>" width="<?=$ancho?>" height="<?=$alto?>" alt="" border="0"><br>
          <span class="peque"><?=$fila['nombre_pds']?></span></a></div></td>
    <?php if ($cou==4){
	break 1;}}}?>
  </tr>
</table>
