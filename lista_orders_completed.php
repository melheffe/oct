<?php include ('conect.php');
//include('includes/sesion.php');
include('includes/lib.php');
$fech=date("Y-m-d H:i:s");
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Status has been updated succesfully!";
}

$sql="SELECT * FROM orders WHERE status = 3 ORDER BY order_num ";
$sql_exec=mysql_query($sql);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Admin.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Panel</title>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-color: #E0F1F9;
	background-image: url(images/sw.jpg);
}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<!-- InstanceEndEditable -->
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="750" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="750" height="121" valign="top"><img src="images/head_admin.jpg" alt="s" width="750" height="126" /></td>
  </tr>
  <tr>
    <td height="30" valign="top"><img src="images/orange_bar.jpg" width="750" height="28" /></td>
  </tr>
  <tr>
    <td valign="top"><table width="675" height="84" border="0" align="center">

      <tr>
        <td width="676" height="21"><!-- InstanceBeginEditable name="Titulo" --><!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
<table width="661" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="661" height="242"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
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
          <td width="690" class="titulos"><div align="center"><span class="style3">List of Completed Orders</span></div></td>
        </tr>
      </table>
      <br />
      <table width="652" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
        <tr class="norm">
          <td width="147"><div align="center" class="style3"><strong>Order Number</strong> </div></td>
          <td width="153">Customer</td>
          <td width="118"><div align="center">Date</div></td>
          <td width="75"><div align="center">Status</div></td>
        </tr>
        <?php while($row=mysql_fetch_assoc($sql_exec)){?>
        <tr class="style3">
          <td height="22" class="style4"><div align="center" class="style3 style100">
              <?=$row['order_num']?>
          </div></td>
          <td class="style4"><span class="style3 style100">
            <?=customername($row['Id_customer'])?>
          </span></td>
          <td class="style4"><div align="center"><span class="style3 style100">
              <?=$row['date']?>
          </span></div></td>
          <td class="style4"><div align="center"><span class="style3 style100">
            <?=status($row['status'])?>
          </span></div></td>
          <td width="89"><div align="center" class="style3 style100"><span class="style101"><?php echo "<a href='ch_order_status.php?id_order=".$row['id_order']."'>Change Status</a>"; ?></span></div></td>
          <td width="56"><div align="center"><span class="style101"><?php echo "<a href='order_review.php?id_order=".$row['id_order']."' target='_blank'>Preview</a>"; ?></span></div></td>
        </tr>
        <?php }?>
      </table>
      <p>&nbsp;</p></td>
  </tr>
</table>
<!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="21"><div align="center"><span class="style2"><a href="adminmenu.php" class="style3">Home</a> | </span></div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
