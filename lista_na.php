<?php include ('conect.php');
include('includes/sesion.php');
$fech=date("Y-m-d H:i:s");
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Registry updated succesfuly";
}

$sql="SELECT * FROM na";
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
<table width="552" height="185" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="552" height="185" valign="top"><br />
      <br />
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
        <tr>
          <td class="sobreblancopeq"><div align="center"><strong>
            <?=$msj?>
            </strong></div></td>
          </tr>
        </table>
          <br />
      <table width="514" height="16" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
        <tr>
          <td width="10">&nbsp;</td>
              <td width="504" class="titulos"><span class="style3">News Article List</span></td>
            </tr>
        </table>
          <br />
      <table width="552" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><table width="542" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
            <tr class="style6">
              <td width="113" class="sobreblanco"><div align="center" class="style3"><strong>Title</strong></div></td>
                    <td width="259" class="sobreblanco"><div align="center"><span class="style3 style1 style2"><strong>Content</strong></span></div></td>
                    <td width="70" class="sobreblanco"><div align="center" class="style2 style3"><strong>Public</strong></div></td>
                  </tr>
            <?php while($row=mysql_fetch_assoc($sql_exec)){?>
            <tr class="sobreblancopeq">
              <td height="17" class="sobreblancopeq"><div align="center" class="style3 style100">
                <?=$row['titulo']?>
                </div></td>
                    <td class="sobreblancopeq"><div align="center"><span class="style3 style100">
                      <?=$row['contenido']?>
                      </span></div></td>
                    <td class="sobreblancopeq"><div align="center" class="style3 style100"><?php if ($row['activo']==1){
				echo "Publicado";
				}else{
				echo "No Publicado";
				}?></div></td>
                    <td width="90" class="sobreblancopeq"><div align="center" class="style3 style100"><span class="style101"><?php echo "<a href='edita_na.php?id_na=".$row['id_na']."'>Edit</a>"; ?> / <?php echo "<a href='borra_na.php?id_na=".$row['id_na']."'>Erase</a>"; ?> </span></div></td>
                  </tr>
            <?php }?>
            </table></td>
            </tr>
        </table>
    </td>
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
