<?php require_once ('conect.php');
include('includes/sesion.php');
@$id_tk=$_REQUEST['id_tk'];

			$sqlt="SELECT * FROM tk WHERE id_tk=$id_tk";
			$sql_exect=mysql_query($sqlt);
			while($rowt=mysql_fetch_assoc($sql_exect)){
				$nombrecito = $rowt['nombre_tk'];
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
<!-- InstanceBeginEditable name="head" -->


<link href="stilalq.css" rel="stylesheet" type="text/css" />
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
<table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="535" height="326"><br />
    <table width="455" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
          <td width="455" class="style3"><div align="center"><?=$msj?></div></td>
        </tr>
      </table>
    <br />
    <table width="457" border="0" align="center" cellpadding="0" cellspacing="0" class="letrasform">
      <tr>
        <td width="393" class="norm"><div align="center"><?=$nombrecito?></div></td>
      </tr>
    </table>
    <br />
    <table width="496" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" valign="top"><?php include('inc_tk_combo_items_OUT.php');?></td>
        <td width="10">&nbsp;</td>
        <td width="242" valign="top"><?php include('inc_tk_combo_items_IN.php');?></td>
      </tr>
      </table>
        <br />
        <p align="center" class="style3"> [ <a href="lista_tk.php">Go back to Ticket  list</a> ] </p>
    </td></tr>
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
