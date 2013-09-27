<?php 
include ('conect.php');
@$id_usuario=$_REQUEST['id_usuario'];

$sql="SELECT * FROM usuario WHERE id = $id_usuario";
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
        <p>&nbsp;</p>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <table width="444" height="157" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="444" class="text"><form id="form1" name="form1" method="post" action="includes/usuarios_edita_inc.php?id_usuario=<?=$id_usuario?>">
                  <p align="center">
                    <?=$vln?>
                  </p>
                <table width="298" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="138"><span class="style5">Name </span></td>
                      <td width="262"><label>
                        <input name="nombre" type="text" id="nombre" value="<?php echo $busca['nombre']; ?>" />
                      </label></td>
                    </tr>
                    <tr>
                      <td><span class="style5">email</span></td>
                      <td><label>
                        <input name="email" type="text" id="email" value="<?php echo $busca['email']; ?>" />
                      </label></td>
                    </tr>
                    <tr>
                      <td><span class="style5">Password</span></td>
                      <td><label>
                        <input name="clave" type="text" id="clave" value="<?php echo $busca['clave']; ?>" />
                      </label></td>
                    </tr>
                  </table>
                <p>
                  <label>
                  <div align="center">
                  <div align="center">
                    <input name="editar" type="submit" id="editar" value="Edit" />
                  </div>
                </label>
                  <p align="center"></p>
              </form></td>
            </tr>
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
