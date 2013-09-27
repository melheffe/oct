<?php include ('conect.php');
//include('includes/sesion.php');
include('includes/lib.php');
$fech=date("Y-m-d H:i:s");
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Status has been updated succesfuly!";
}

$sql="SELECT * FROM orders ORDER BY order_num AND date ASC";
$sql_exec=mysql_query($sql);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Orlando Cheap Tickets ...</title>
<!-- TemplateEndEditable -->
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
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="800" height="126" background="images/head.jpg"><table width="798" height="125" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="145" height="84" valign="bottom"><div align="center"><a href="index.php"><img src="images/logo.png" width="130" height="81" border="0" align="bottom" style="width: 130px; height: 81px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
        <td width="653" valign="bottom"><p><img src="images/oct.png" width="466" height="46" style="width: 466px; height: 46px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></p>          </td>
      </tr>
      <tr>
        <td height="25" valign="bottom">&nbsp;</td>
        <td valign="bottom"><div align="right"><a href="login_customer.php"><img src="images/btn-01.png" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a><a href="doc.php?id_doc=1"><img src="images/btn-02.png" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28"><img src="images/orange_bar.jpg" alt="barra" width="800" height="28" /></td>
  </tr>
  <tr>
    <td height="28" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="365"><table width="798" height="372" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="142" height="372" valign="top"><p>&nbsp;</p>
        <table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="66">&nbsp;</td>
          </tr>
          <tr>
            <td><p>&nbsp;</p>
              </td>
          </tr>
        </table></td>
        <td width="656" valign="top"><!-- TemplateBeginEditable name="Space" -->
        <div align="center" class="norm">
          <p>&nbsp;</p>
        </div>
        <!-- TemplateEndEditable --></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" class="style1"><div align="center" class="peque"><a href="doc.php?id_doc=2">Conditions of Use</a> | <a href="doc.php?id_doc=3">Privacy Notice</a> &copy; 2006-2007,Orlandocheaptickets.com, Inc. or its affiliates </div></td>
  </tr>
</table>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
</html>
