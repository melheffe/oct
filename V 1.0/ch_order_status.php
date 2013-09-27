<?php include ('conect.php');
include('includes/sesion.php');
include('includes/lib.php');

$id_order=$_REQUEST['id_order'];

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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" --><form id="form1" name="form1" action="" target="_self" >
      <p align="center">Change Order Status</p>
      <p align="center">&nbsp;</p>
      <table width="268" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="125">Change status to:</td>
          <td width="125"><select name="go" id="go" onchange="this.form.action=this.value; this.form.submit()">
            <option value="#" selected="selected"></option>
            <option value="ch_order_status_inprogress.php">In Process</option>
            <option value="ch_order_status_pending.php">Pending</option>
            <option value="ch_order_status_completed.php">Completed</option>
            <option value="ch_order_status_cancelled.php">Cancelled</option>
          </select>          </td>
        </tr>
        <tr>
          <td><input name="id_order" type="hidden" id="id_order" value="<?=$id_order?>" /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    
    </form><!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="21"><div align="center"><span class="style2"><a href="adminmenu.php" class="style3">Home</a> | </span></div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
