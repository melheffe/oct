<?php setlocale(LC_MONETARY, 'en_US');
require_once('conect.php');
require_once('includes/lib.php');

if(!isset($ses_track)){ 	
	session_start();
	$ses_track = session_id();
}
//echo $ses_track;
//include('includes/sesion_customer.php');
$cuenta=0;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Plantilla1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Orlando Cheap Tickets ...</title>
<!-- InstanceEndEditable -->
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
<!-- InstanceBeginEditable name="head" -->
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />


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
<!-- InstanceEndEditable -->
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
        <td valign="bottom"><div align="right"><a href="comprar.php"><img src="images/btn-03.png" alt="Shopping Cart" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a><a href="login_customer.php"><img src="images/btn-01.png" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a><img src="images/btn-02.png" width="104" height="25" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></div></td>
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
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="images/asist.jpg" width="173" height="210" border="0" /></td>
          </tr>
          <tr>
            <td height="285"><img src="images/banner1.jpg" width="172" height="271" /></td>
          </tr>
          <tr>
            <td><img src="images/banner3.jpg" width="172" height="308" /></td>
          </tr>
        </table></td>
        <td width="483" valign="top"><!-- InstanceBeginEditable name="Main" --><br />
          <table width="409" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="37" height="17" bgcolor="#FFD291" class="style3"><div align="center">Qty.</div></td>
              <td width="256" bgcolor="#FFD291" class="style3"><div align="center">Atraction</div></td>
              <td width="87" bgcolor="#FFD291" class="style3"><div align="center">Price</div></td>
              <td width="29" class="style3">&nbsp;</td>
            </tr>
            <?php 	

$qs="SELECT * FROM cart WHERE id_ses_track = '$ses_track'";
$qs_s=mysql_query($qs);

while($fila=mysql_fetch_assoc($qs_s)){
$pric=get_price($fila['id_item']);
$prize=($pric*$fila['cantidad']);
$prize=number_format($prize, 2, '.', '');
$counter=($counter+$prize);
$counter=number_format($counter, 2, '.', '');
$cuenta=$cuenta+1;?>
            <tr>
              <td height="39" valign="middle" class="style3"><div align="center"><?php echo $fila['cantidad']." X";?></div></td>
              <td valign="middle" class="style3"><?php echo item_name($fila['type'], $fila['id_item']);?></td>
              <td valign="middle" class="style3"><div align="center"><?php echo "$ ".$prize; ?></div></td>
              <td valign="middle" class="style3"><div align="center"><a href="borra_checkout_item.php?id_cart=<?php echo $fila['id_cart'];?>"><img src="images/remove.jpg" alt="Remove from this List" width="16" height="16" border="0" /><br />
                Remove</a></div></td>
            </tr>
            <?php }?>
          </table>
          <br />
          <?php if (!empty($cuenta)){?><table width="408" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="167" height="31" valign="bottom" class="style3"><div align="right"></div></td>
              <td width="110" valign="bottom" class="style3"><div align="right">Sub-Total :</div></td>
              <td width="86" valign="bottom" class="style3"><div align="center"><strong><?php echo "$ ".$counter ; ?>&nbsp;</strong></div></td>
              <td width="45" valign="bottom">&nbsp;</td>
            </tr>
          </table><?php } else {?>
          <table width="399" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td class="style3"><div align="center">Your cart is empty</div></td>
            </tr>
          </table>
          <?php }?>
          <br />
          <br />
          <table width="414" border="0" align="center" cellpadding="0" cellspacing="0">

            <tr>
              <td width="260" height="42" class="style3"><a href="index.php">&lt;-- Keep Shopping </a></td>
              <td width="154"><div align="center">
                  <?php if (!empty($counter)) {?>
                  <a href="login_customer.php"><img src="images/check.jpg" alt="Checkout&ccedil;" width="113" height="33" border="0" /></a>
                  <?php }?>
              </div></td>
            </tr>
          </table>
          <p></p>
          <map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
<!-- InstanceEndEditable --></td>
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
              <script type="text/javascript"><!--
									google_ad_client = "pub-1796147256762961";
									google_ad_width = 120;
									google_ad_height = 240;
									google_ad_format = "120x240_as_rimg";
									google_cpa_choice = "CAAQ6euXhAIaCIFnFr5EW3qAKPG193MwAA";
									google_ad_channel = "";
									//-->
									</script>
              <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
									</script>
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
    <td height="19" class="style1"><div align="center" class="peque"><a href="#">Conditions of Use</a> | <a href="#">Privacy Notice</a> &copy; 2006-2007,Orlandocheaptickets.com, Inc. or its affiliates </div></td>
  </tr>
</table>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
<!-- InstanceEnd --></html>
