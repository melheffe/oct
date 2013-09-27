<?php include ('conect.php');
include('includes/sesion.php');
include('includes/lib.php');
extract($_POST);
$id_order=$_REQUEST['id_order'];
$date=date('Y-n-d G:i:s');
$dia=date('d');
$mes=date('n');
$anio=date('Y');

if (isset($_POST['enviar'])){
$errores = array();
				
				$sql = "UPDATE orders SET
				status = '3' WHERE id_order=".$id_order;
				mysql_query($sql);
				
				
				
				$query = "INSERT INTO order_track SET
				id_order = '$id_order',
				comments = '$comments',
				status = '3',
				date = '$date'";	
				mysql_query($query);				
			
				header("Location: lista_orders.php?status=1");
				
}

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
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <form id="form1" name="form1" method="post" action="">
            <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="121" height="24" class="style3">New Status</td>
                <td width="479" class="style3"><strong>Completed</strong></td>
              </tr>
              <tr>
                <td height="92" class="style3">Comments (*)</td>
                <td><textarea name="comments" id="comments" cols="45" rows="5"></textarea></td>
              </tr>
              <tr>
                <td height="37" colspan="2"><div align="center">
                    <input type="submit" name="enviar" id="enviar" value="Submit" />
                </div></td>
              </tr>
            </table>
                    </form>
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
