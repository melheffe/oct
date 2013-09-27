<?PHP include('conect.php');


@$id_ce=$_REQUEST['id_ce'];

$sql="SELECT * FROM ce WHERE id_ce=$id_ce";
$sql_exec=mysql_query($sql);
$busca=mysql_fetch_assoc($sql_exec);
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
<table width="493" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="493"><p>&nbsp;</p>
      <p align="center"><span class="norm">Edit Customer Experiences</span></p>
      <form id="form1" name="form1" method="post" action="includes/ce_edita_inc.php?id_ce=<?=$id_ce?>">
        <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="14%" height="31" class="style3"><span class="style14">Title</span></td>
            <td width="86%"><label>
              <input name="titulo" type="text" id="titulo" value="<?php echo $busca['titulo'];?> " size="40"/>                </label></td>
          </tr>
          <tr>
            <td valign="top" class="style3"><span class="style14">Content</span></td>
            <td><div align="left">
              <textarea name="contenido" cols="35" rows="5" wrap="virtual" id="contenido"><?php echo $busca['contenido'];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="32" class="style3"><span class="style9">Picture</span></td>
            <td><label>
              <input name="foto" type="text" id="foto" value="<?php echo $busca['foto'];?> " size="40" />                </label></td>
          </tr>
          <tr>
            <td height="46" class="style3">Available:</td>
            <td><label>
              <input name="activo" type="checkbox" id="activo" value="1" <?php if (!(strcmp($busca['activo'],"1"))) {echo "checked=\"checked\"";} ?> />              </label></td>
          </tr>
          <tr>
            <td height="46" class="general">&nbsp;</td>
            <td><input name="enviar" type="submit" id="enviar" value="Submit" /></td>
          </tr>
        </table>
            </form>    </td>
  </tr>
</table>
<div align="center">
  <p>
    <?=$msj?>
  </p>
</div>
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
