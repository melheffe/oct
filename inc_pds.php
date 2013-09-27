<?php
include ('conect.php');
@$Id_pg=$_REQUEST['id_pg'];
/*if (empty($id_pds)){
$id_pds=4;
}*/


$qs="SELECT * FROM pds WHERE cat_pds=$Id_pg OR cat_pds2=$Id_pg";
$qs_s=mysql_query($qs);
?>
<link href="css.css" rel="stylesheet" type="text/css" />
<?php $cou=0;
	while($fila=mysql_fetch_assoc($qs_s)){
	$cou=$cou+1;
$pics=$fila['pic_pds'];
//----------------------------------------------------- image procesor
$hor=120;// define el acho de la imagen 
$ver=120;// define el alto de la imagen 

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
<table width="464" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" colspan="2" background="images/blue_tab.jpg" class="gray_tits"><div align="center"><a href="p_screen.php?id_pds=<?=$fila['id_pds']?>"><?=$fila['nombre_pds']?></a></div></td>
  </tr>
  <tr>
    <td width="136" height="54"><div align="center"><a href="p_screen.php?id_pds=<?=$fila['id_pds']?>"><img src="<?=$pics?>" width="<?=$ancho?>" height="<?=$alto?>" alt="<?=$fila['nombre_pds']?>" border="0" /></a></div></td>
    <td width="257" valign="top" class="peque"><div align="left">
      <?php echo substr($fila['description'], 0, 450);?>
    </div></td>
  </tr>
  <tr>
    <td height="12" class="peque"><div align="center"><a href="p_screen.php?id_pds=<?=$fila['id_pds']?>" class="peque">[ Details ]</a></div></td>
    <td height="12" class="biga">&nbsp;</td>
  </tr>
</table>
<?php //if ($cou==2){
			//break 1;}
}?>