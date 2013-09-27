<?php include ('conect.php');
include('includes/sesion_customer.php');
include('includes/lib.php');
$fech=date("Y-m-d H:i:s");
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Status has been updated succesfuly!";
}
$val=$_SESSION['Id_customer'];
$sql="SELECT * FROM orders WHERE status = 0 AND Id_customer = $val ORDER BY order_num AND date ASC";
$sql_exec=mysql_query($sql);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/my_oct.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
        <td valign="bottom"><div align="right"><a href="comprar.php"><img src="images/btn-03.png" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /><img src="images/btn-01.png" alt="Your Account" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
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
    <td height="264"><table width="798" height="156" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="142" height="372" rowspan="2" valign="top"><table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="114"><div align="center" class="style3"><a href="sesion_end.php">Log Out</a></div></td>
          </tr>
          <tr>
            <td><p align="center"><span class="style3" class="style3"><a href="my_oct_menu.php">Menu</a></span></p>              </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="656" height="32" valign="top"><!-- InstanceBeginEditable name="Space" -->
          <div align="center" class="norm">
            <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
              <tr>
                <td class="sobreblancopeq"><div align="center"><strong>
                    <?=$msj?>
                </strong></div></td>
              </tr>
            </table>
            <br />
            <table width="473" height="16" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
              <tr>
                <td width="10">&nbsp;</td>
                <td width="690" class="titulos"><div align="center" class="gray_tits">Cancell an Order</div></td>
              </tr>
            </table>
            <br />
            <table width="458" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
              <tr class="norm">
                <td width="163" height="23"><div align="center" class="style3"><strong>Order Number</strong> </div></td>
                <td width="143"><div align="center">Date</div></td>
                <td width="81"><div align="center">Status</div></td>
              </tr>
              <?php while($row=mysql_fetch_assoc($sql_exec)){?>
              <tr class="style3">
                <td height="20" class="style4"><div align="center" class="style3 style100">
                    <?=$row['order_num']?>
                </div></td>
                <td class="style4"><div align="center"><span class="style3 style100">
                    <?=$row['date']?>
                </span></div></td>
                <td class="style4"><div align="center"><span class="style3 style100">
                    <?=status($row['status'])?>
                </span></div></td>
                <td width="61"><div align="center"><span class="style101"><?php echo "<a href='my_oct_cancell_order.php?id_order=".$row['id_order']."'>Cancell</a>"; ?></span></div></td>
              </tr>
              <?php }?>
            </table>
            <p></p>
            <p>&nbsp;</p>
              <p>&nbsp;</p>
          </div>
        <!-- InstanceEndEditable --></td>
        </tr>
      <tr>
        <td height="124" valign="top"><table width="470" border="0" align="center">
          <tr>
            <td width="464"><img src="images/banner.jpg" width="480" height="170" /></td>
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
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
<!-- InstanceEnd --></html>
