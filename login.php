<?php if(!isset($ses_track)){ 	
	session_start();
	$ses_track = session_id();
} 
require_once('conect.php');
require_once('includes/lib.php');

/*
@$status=$_REQUEST['status'];
@$id_pds=$_REQUEST['id_pds'];
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

}*/
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

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="css.css" rel="stylesheet" type="text/css" />
<meta name="Keywords" content="<?php include('keywordslist.php');?>" />
</head>

<body>
<table width="753" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="126" colspan="4" valign="top" background="images/head.jpg"><table width="747" height="125" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="149" height="97" valign="bottom"><div align="center"><a href="index.php"><img src="images/logo.png" width="130" height="81" border="0" align="bottom" style="width: 130px; height: 81px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
          <td width="612" valign="bottom"><p><img src="images/oct.png" width="466" height="46" style="width: 466px; height: 46px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></p></td>
        </tr>
      <tr>
        <td height="28" colspan="2" valign="bottom"><div align="right"><img src="images/btn-01.png" width="104" height="25" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /><img src="images/btn-02.png" width="104" height="25" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></div></td>
        </tr>
      
      
      
      
    </table></td>
  </tr>
  <tr>
    <td height="28" colspan="4" valign="top"><img src="images/orange_bar.jpg" width="754" height="28" /></td>
  </tr>
  <tr>
    <td height="14" colspan="4" valign="top"><?php //include('inc_menu.php');?>
<br /></td>
  </tr>
  <tr>
    <td height="14" colspan="4" valign="top"><p>&nbsp;</p>
      <p><br />
      </p>
      <form id="form1" name="form1" method="post" action="includes/login.php">
        <table width="214" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="66" height="28" class="style3">E-mail</td>
            <td width="148"><label>
              <input type="text" name="email" id="email" />
            </label></td>
          </tr>
          <tr>
            <td height="25" class="style3">Password</td>
            <td><label>
              <input type="password" name="clave" id="clave" />
            </label></td>
          </tr>
          <tr>
            <td height="23" colspan="2"><label>
              <div align="center">
                <input type="submit" name="Log In" id="Log In" value="Log In" />
                </div>
            </label></td>
          </tr>
          <tr>
            <td height="23" colspan="2"><div align="center" class="peque"><a href="#">Forgot your password?</a></div></td>
          </tr>
        </table>
      </form>
    <p>&nbsp;</p></td>
  </tr>
  
  
  <tr>
    <td height="21" colspan="4" valign="middle"><div align="center"><span class="peque"><a href="#">Conditions of Use</a> | <a href="#">Privacy Notice</a> &copy; 2006-2007,Orlandocheaptickets.com, Inc. or its affiliates </span></div></td>
  </tr>
  <tr>
    <td width="175" height="2"></td>
    <td width="202"></td>
    <td width="188"></td>
    <td width="189"></td>
  </tr>
</table>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
</html>
