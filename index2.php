<?php include('conect.php');
@$status=$_REQUEST['status'];
if ($status==2) {
$msj="- Please provide a valid email address";
}
if ($status==1) {
$msj="- Registration succesfull";
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Orlando Cheap Tickets ...</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<meta name="Keywords" content="<?php include('keywordslist.php');?>" />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-image: url(images/sw.jpg);
}
-->
</style>
</head>

<body><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="800" height="126" background="images/head.jpg"><table width="798" height="125" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="145" height="84" valign="bottom"><div align="center"><a href="index.php"><img name="logoNEW" src="images/logoNEW.png" width="154" height="100" border="0" id="logoNEW" alt="" /></a></div></td>
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
    <td height="28" valign="top"><?php include('inc_menu.php');?>
        </td>
  </tr>
  <tr>
    <td height="365"><table width="798" height="372" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="177" height="372" valign="top"><table width="0" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/asist.jpg" width="173" height="210" border="0" usemap="#Map2Map" /></td>
          </tr>
          <tr>
            <td><a href="#"><img src="images/beach.jpg" width="173" height="302" border="0" /></a></td>
          </tr>
        </table></td>
        <td width="483" valign="top"><table width="485" border="0" cellpadding="0" cellspacing="0" id="news">
          <tr>
            <td width="483"><?php include('inc_na.php');?></td>
          </tr>
          <tr>
            <td width="483" height="32" background="images/special.jpg"><div align="center" class="style3">
              <div align="center" class="norm">Special Deals </div>
            </div></td>
          </tr>
          <tr>
            <td height="170"><table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="170" valign="middle"><img src="images/spacer.jpg" width="1" height="1" /></td>
                <td valign="middle"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','480','height','200','src','banners/banner - aquatica','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','banners/banner - aquatica' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="480" height="200">
                  <param name="movie" value="banners/banner - aquatica.swf" />
                  <param name="quality" value="high" />
                  <embed src="banners/banner - aquatica.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="480" height="200"></embed>
                </object></noscript></td>
              </tr>
              <tr>
                <td height="108" valign="middle"><img src="images/spacer.jpg" width="1" height="1" /></td>
                <td height="108" valign="middle"><a href="p_screen.php?id_pds=1"><img src="images/banner.jpg" width="480" height="170" border="0" /></a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="21"><?php include('inc_ce.php');?></td>
          </tr>
          
        </table></td>
        <td width="138" valign="top"><table width="0" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="137" height="139" class="peque"><form id="form1" name="form1" method="post" action="includes/mailinglist.php">
              <label>
              <div align="center"><span class="style4"><img src="images/email.jpg" width="131" height="80" /></span><br />
                        <input name="email" type="text" class="peque" id="email" size="20" />
                        <br />
                        <?=$msj?>
                <br />
                        <label></label>
              </div>
              <div align="center">
                <input name="enviar" type="submit" class="peque" id="enviar" value="Submit" />
              </div>
              </label>
            </form></td>
          </tr>
          <tr>
            <td height="139">&nbsp;</td>
          </tr>
          <tr>
            <td height="243"><div align="center">
            </div></td>
          </tr>
          <tr>
            <td height="139"><div align="center"><img src="images/disney.jpg" width="142" height="285" /></div></td>
          </tr>
        </table></td>
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
<map name="Map2Map" id="Map2Map">
  <area shape="rect" coords="1,2,172,208" href="doc.php?id_doc=1" target="_self" />
</map>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
</html>