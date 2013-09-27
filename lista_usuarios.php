<?php
include ('conect.php');
include('includes/sesion.php');
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Registry updated succesfuly";
}
if ($status==2) {
$msj="Deleted Succesfuly";
}

$sql="SELECT * FROM usuario";
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
<p class="text">&nbsp;</p>
<!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><span class="style3">Users List:</span></td>
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
          <table width="679" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
            <tr class="text2">
              <td width="37"><div align="center" class="style3">
                  <div align="center">Id </div>
              </div></td>
              <td width="184"><div align="center" class="style3">
                  <div align="center">Name </div>
              </div></td>
              <td width="142"><div align="center" class="style3">
                  <div align="center">email</div>
              </div></td>
              <td width="188"><div align="center" class="style3">
                  <div align="center">Password</div>
              </div></td>
              <td width="30"><div align="center" class="style3">
                  <div align="center">type</div>
              </div></td>
              <td width="105" class="style3"><div align="center">Edit / Erase</div></td>
            </tr>
            <?php
while($row=mysql_fetch_array($sql_exec)){?>
            <tr class="style3">
              <td height="21"><div align="center">
                  <?=$row['id']?>
              </div></td>
              <td><div align="center">
                  <?=$row['nombre']?>
              </div></td>
              <td><div align="center">
                  <?=$row['email']?>
              </div></td>
              <td><div align="center">
                  <?=$row['clave']?>
              </div></td>
              <td><div align="center">
                  <?=$row['id_tipo_usuario']?>
              </div></td>
              <td><div align="center"><?php echo "<a href='editausuario.php?id_usuario=".$row['id']."'>Edit</a>"; ?> / <?php echo "<a href='borrausr.php?id_usuario=".$row['id']."'>Erase</a>"; ?> </div></td>
            </tr>
            <?php }?>
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
