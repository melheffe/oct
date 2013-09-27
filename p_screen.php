<?php require_once('conect.php');
require_once('includes/lib.php');
if(!isset($ses_track)){ 	
	session_start();
	$ses_track = session_id();
}

@$status=$_REQUEST['status'];
@$id_pds=$_REQUEST['id_pds'];
$combo=findcombo($id_pds);
if ($status==2) {
$msj="- Please provide a valid email address";
}
if ($status==1) {
$msj="- Registration succesfull";
}

$qs="SELECT * FROM pds WHERE id_pds=$id_pds";
$qs_s=mysql_query($qs);
while($fila=mysql_fetch_assoc($qs_s)){
$nombre_pds=$fila['nombre_pds'];
$description=$fila['description'];
$coments=$fila['coments'];
$disney=$fila['disney'];
$universal=$fila['universal'];
$pic_pds=$fila['pic_pds'];

//----------------------------------------------------- image procesor
$hor=120;// define el acho de la imagen 
$ver=120;// define el alto de la imagen 

$rel_graph=$hor/$ver;
$rel_graph_inv=$ver/$hor;

$blah = getimagesize($pic_pds);
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

}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Orlando Cheap Tickets - <?=$nombre_pds?></title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-image: url(images/sw.jpg);
}
-->
</style>
<script src="boxover.js"></script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="css.css" rel="stylesheet" type="text/css" />
<meta name="Keywords" content="<?php include('keywordslist.php');?>" />
</head>

<body>
<table width="791" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="126" colspan="4" valign="top" background="images/head.jpg"><table width="797" height="125" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="147" height="97" valign="bottom"><div align="center"><a href="index.php"><img src="images/logo.png" width="130" height="81" border="0" align="bottom" style="width: 130px; height: 81px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
          <td width="650" valign="bottom"><p><img src="images/oct.png" width="466" height="46" style="width: 466px; height: 46px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></p></td>
        </tr>
      <tr>
        <td height="28" colspan="2" valign="bottom"><div align="right"><a href="login_customer.php"><img src="images/btn-03.png" alt="Shopping Cart" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /><img src="images/btn-01.png" alt="Your Account" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a><a href="doc.php?id_doc=1"><img src="images/btn-02.png" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
        </tr>
      
      
      
      
    </table></td>
  </tr>
  <tr>
    <td height="28" colspan="4" valign="top"><div align="center"><img src="images/orange_bar.jpg" width="754" height="28" /></div></td>
  </tr>
  <tr>
    <td height="28" colspan="4" valign="top"><?php include('inc_menu.php');?></td>
  </tr>
  <tr>
    <td width="157" rowspan="2" valign="middle"><div align="center"><img name="" src="<?=$pic_pds?>" width="<?=$ancho?>" height="<?=$alto?>" alt="<?=$nombre_pds?>" /></div></td>
    <td height="26" colspan="2" valign="middle" class="norm"><div align="center"><?=$nombre_pds?>
    </div></td>
    <td width="222" rowspan="2" valign="middle"><?php include('inc_cart.php')?></td>
  </tr>
  <tr>
    <td height="104" colspan="2" valign="top" class="peque"><div align="left" class="style3"><?php echo substr($description, 0, 500);?>
    </div>      <br /></td>
  </tr>
  
  
  <tr>
    <td height="27" valign="middle" class="norm"><div align="center">Comments :</div></td>
    <td colspan="2" background="images/rating_bc.gif" class="gray_tits"> <div align="center"><!--Rating <img src="images/star_on.gif" width="18" height="18" align="top" /> <img src="images/star_on.gif" width="18" height="18" align="texttop" /> <img src="images/star_on.gif" width="18" height="18" align="texttop" /> <img src="images/star_on.gif" alt="" width="18" height="18" align="texttop" /> <img src="images/star_off.gif" alt="" width="18" height="18" align="top" /> <span class="orange">( <a href="#">123 reviews</a> )</span> --></div></td>
    <td rowspan="5" valign="top"><table width="220" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="210"><div align="center">
              <?php if ($disney==0){include('inc_tk.php');}
										if ($disney==1){include('inc_tk_disney.php');}?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="style3">
              <?php if ($universal==1){include('inc_tk_universal.php');}?>
            </span></div></td>
          </tr>
          <tr>
            <td><div align="center"><span class="style3">
              <?php if (!empty($combo)){include('inc_tk_combo.php');}?>
            </span></div></td>
          </tr>
        </table>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="132" colspan="2" valign="top" class="style3"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><?=nl2br($coments)?></td>
        </tr>
      </table></td>
    <td width="185" rowspan="4" align="center" valign="top"><div align="center">
      <?php include('inc_pics.php');?>
    </div></td>
  </tr>
  
  
  <tr>
    <td height="138" colspan="2" valign="top" background="images/relates.jpg"><br />
      <?php include('inc_related.php');?></td>
  </tr>
  
  <tr>
    <td height="374" colspan="2" valign="top" class="norm"><?php include ('inc_at_p_screen.php');?></td>
  </tr>
  
  
  <tr>
    <td height="344" colspan="2" valign="top"><?php include ('inc_ce_p_screen.php');?></td>
  </tr>
  
  
  <tr>
    <td height="21" colspan="4" valign="middle"><div align="center"><span class="peque"><a href="#">Conditions of Use</a> | <a href="#">Privacy Notice</a> &copy; 2006-2007,Orlandocheaptickets.com, Inc. or its affiliates </span></div></td>
  </tr>
  <tr>
    <td height="2"></td>
    <td width="236"></td>
    <td></td>
    <td></td>
  </tr>
</table>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
</html>
