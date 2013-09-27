<?php
include ('conect.php');
include('includes/sesion.php');

@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Registry updated succesfully";
}
if ($status==2) {
$msj="Can't process your request";
}

$sql="SELECT * FROM pg";
$sql_exec=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<link href="style/CCS.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style4 {font-weight: bold}
-->
</style>
<style type="text/css">
<!--
.style5 {font-weight: bold}
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
        <td width="676" height="21"><!-- InstanceBeginEditable name="Titulo" -->
          <div align="center" class="style3">List of Principal Groups</div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
          <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
            <tr>
              <td class="style4"><div align="center">
                  <?=$msj?>
              </div></td>
            </tr>
          </table>
          <br />
          <table width="393" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
            <tr class="text2">
              <td width="40" height="19"><div align="center" class="style3 style4">
                  <div align="center">Id </div>
              </div></td>
              <td width="216"><div align="center" class="style3 style5">
                  <div align="center">Group Name </div>
              </div></td>
              <td width="129" class="style3"><div align="center"><strong>Edit / Erase</strong></div></td>
            </tr>
            <?php
while($row=mysql_fetch_array($sql_exec)){?>
            <tr class="style3">
              <td><div align="center">
                  <?=$row['Id_pg']?>
              </div></td>
              <td><div align="center">
                  <?=$row['nombre_pg']?>
              </div></td>
              <td><div align="center"><span class="style4"><?php echo "<a href='edita_pg.php?id_pg=".$row['Id_pg']."'>Edit</a>"; ?> / <?php echo "<a href='borra_pg.php?id_pg=".$row['Id_pg']."'>Erase</a>"; ?> </span></div></td>
            </tr>
            <?php }?>
          </table>
          <p>&nbsp;</p>
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
