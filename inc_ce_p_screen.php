<?php
include ('conect.php');
@$id_pds=$_REQUEST['id_pds'];
$qs="SELECT * FROM ce WHERE activo = 1 AND cat_pds=$id_pds";
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
<link href="css.css" rel="stylesheet" type="text/css" />
<table width="394" height="108" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="394" height="36" valign="middle" nowrap="nowrap" background="images/tit_news.jpg"><div align="center" class="norm">Customer's Experience</div>      <div align="center"></div></td>
  </tr>
  <tr>
    <td height="80" valign="top">
	<?php $cou=0;
	while($fila=mysql_fetch_assoc($qs_s)){
	$pic=$fila['foto'];
//----------------------------------------------------- image procesor
$hor=100;// define el acho de la imagen 
$ver=100;// define el alto de la imagen 

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
	$cou=$cou+1;?>
	<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
	  <tr>
	    <td width="27%" rowspan="2" valign="top"><div align="left"><img src="<?=$pic?>" width="<?=$ancho?>" height="<?=$alto?> align="center" /></div></td>
          <td width="73%" height="18" valign="top"><div align="left" class="style3">
              <?=$fila['contenido']?>
            </div></td>
        </tr>
	  <tr>
	    <td height="26" valign="top" class="style3"><div align="right"><em>
	      <?=$fila['titulo']?>
	      &amp; Family</em></div></td>
        </tr>
    </table>	<?php //if ($cou==2){break 1;}
			}?></td>
  </tr>
</table>
