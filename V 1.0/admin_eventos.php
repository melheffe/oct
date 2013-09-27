<?php require_once('conect.php');
$qs="SELECT * FROM ce WHERE activo = '1'";
$sql_exec=mysql_query($qs);


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
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" --> <br />
                    <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td class="titulos">Listado de Eventos </td>
                      </tr>
                    </table>
                     
                      <?php while($articulo=mysql_fetch_assoc($sql_exec)) {?>
                      <br />
                      <br />
                      <table width="430" border="0" align="center">
                        <tr>
                          <td height="30" colspan="2" class="general" style="font-weight: bold"><div align="left" style="font-weight: bold">
                              <?=$articulo['titulo']?>
                          </div></td>
                        </tr>
                        <tr>
                          <td width="300" valign="top" class="general"><div align="left">
                              <?=$articulo['contenido']?>
                          </div></td>
                          <td width="120"><div align="center"><img src="<?=$articulo['foto']?>" border="1" /></div></td>
                        </tr>
                      </table>
                      <?php }?>
                      <p>&nbsp;</p>
                    <p>&nbsp;</p>
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
