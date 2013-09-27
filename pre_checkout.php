<?php include('includes/sesion_customer.php');

setlocale(LC_MONETARY, 'en_US');
require_once('conect.php');
require_once('includes/lib.php');
$Id_customer=$_SESSION['Id_customer'];
$ses_track=$_SESSION['ses_track'];
$nombrecito=$_SESSION['firstname'];

if (isset($_POST['enviar'])){
extract($_POST);
$errores = array();

		if (empty($c_name)) {
		$errores['c_name'] = "Valid Name Required";
		}
		if (empty($c_type)) {
		$errores['c_type'] = "Must select a Credit Card type";
		}
		if (empty($c_number)) {
		$errores['c_number'] = "Valid Credit Card number required";
		}
		if (empty($c_add)) {
		$errores['c_add'] = "Valid Billing address required";
		}
		if (empty($c_country)) {
		$errores['c_country'] = "Country field required";
		}
		if (empty($c_city)) {
		$errores['c_city'] = "City field is required";
		}
		if (empty($c_phone)) {
		$errores['c_phone'] = "Phone field is required";
		}
		if (empty($c_zip)) {
		$errores['c_zip'] = "Valid Zip Code required";
		}
		

if (empty($errores)) {			
	$query = "INSERT INTO cc_info SET
	Id_customer = '$Id_customer',
	c_name = '$c_name',
	c_type = '$c_type',
	c_number = '$c_number',
	c_add = '$c_add',
	c_country = '$c_country',
	c_city = '$c_city',
	c_phone = '$c_phone',
	c_zip= '$c_zip',
	id_ses_track = '$ses_track'";
	
	$res = mysql_query("SHOW TABLE STATUS LIKE 'cc_info'");
	$resultado = mysql_fetch_assoc($res);
	$mesmo=$resultado['Auto_increment']-1;
			
	mysql_query($query);
	
	$qu = "INSERT INTO payment SET
	id_customer = '$Id_customer',
	id_cc_info = '$mesmo',
	status = '0',
	type = '2',
	comments = 'Not Proccesed',
	id_ses_track = '$ses_track'";
			
	mysql_query($qu);
	
	$msj="Ok";
	header("Location: order_resume.php?status=1");
}}
	

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
    <td height="14" colspan="4" valign="top"><?php include('inc_menu.php');?>
<br /></td>
  </tr>
  <tr>
    <td width="163" height="14" valign="top"><script type="text/javascript"><!--
google_ad_client = "pub-1796147256762961";
//120x240, created 1/9/08
google_ad_slot = "7986221293";
google_ad_width = 120;
google_ad_height = 240;
google_cpa_choice = ""; // on file
//--></script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></td>
    <td height="14" colspan="3" valign="top"><p align="center" class="style3">Welcome Mr.(s) <?php echo $nombrecito; ?></p>
    <p class="norm">Credit Payment Information:</p>
    <form id="form1" name="form1" method="post" action="">
        <br />
        <table width="444" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="347" class="style3"><div align="center"><span class="letrasform2">
              <?php if ( !empty($errores) ) {
		print "The Folowing errors where found.<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
		} 
		echo $msj?>
            </span></div></td>
          </tr>
        </table>
        <br />
        <table width="415" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="167" class="style3"><div align="right">Cardholder Name :</div></td>
            <td width="248" valign="bottom" class="style3"><label>
              <div align="center">
                <input type="text" name="c_name" id="c_name" />              
                </label>
            </div></td>
          </tr>
          <tr>
            <td class="style3"><div align="right">Type of card :</div></td>
            <td valign="bottom" class="style3"><label class="style3">
              <div align="center">
                <input type="radio" name="c_type" id="V" value="V" />
              Visa
              <input type="radio" name="c_type" id="M" value="M" />
              Master
              </label>
            </div></td>
          </tr>
          <tr>
            <td class="style3"><div align="right">Credit Card Number :</div></td>
            <td valign="bottom" class="style3"><label>
              <div align="center">
                <input type="text" name="c_number" id="c_number" />              
                </label>
            </div></td>
          </tr>
          <tr>
            <td class="style3"><div align="right">Full Address :</div></td>
            <td valign="bottom" class="style3"><label>
              <div align="center">
                <input type="text" name="c_add" id="c_add" />              
                </label>
            </div></td>
          </tr>
          <tr>
            <td height="34" class="style3"><div align="right">Country :</div></td>
            <td valign="bottom" class="style3"><label>
              <div align="center">
                <input type="text" name="c_country" id="c_country" />
                </label>
            </div></td>
          </tr>
          <tr>
            <td class="style3"><div align="right">City :</div></td>
            <td valign="bottom" class="style3"><label>
              <div align="center">
                <input type="text" name="c_city" id="c_city" />              
                </label>
            </div></td>
          </tr>
          <tr>
            <td class="style3"><div align="right">Zip :</div></td>
            <td valign="bottom" class="style3"><label>
              <div align="center">
                <input type="text" name="c_zip" id="c_zip" />              
                </label>
            </div></td>
          </tr>
          <tr>
            <td class="style3"><div align="right">Phone :</div></td>
            <td valign="bottom" class="style3"><label>
              <div align="center">
                <input type="text" name="c_phone" id="c_phone" />              
                </label>
            </div></td>
          </tr>
        </table>
        <p align="center">
          <label>
          <input type="submit" name="enviar" id="enviar" value="Submit Payment Info" />
          </label>
        </p>
      </form>
      <p>&nbsp;</p>
      <p align="right">&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  
  
  <tr>
    <td height="21" colspan="4" valign="middle"><div align="center"><span class="peque"><a href="#">Conditions of Use</a> | <a href="#">Privacy Notice</a> &copy; 2006-2007,Orlandocheaptickets.com, Inc. or its affiliates </span></div></td>
  </tr>
  <tr>
    <td height="2"></td>
    <td width="214"></td>
    <td width="188"></td>
    <td width="189"></td>
  </tr>
</table>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
</html>
