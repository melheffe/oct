<?PHP include('conect.php');

@$Id_pg=$_REQUEST['id_pg'];

$sql="SELECT * FROM pg WHERE Id_pg = $Id_pg";
$sql_exec=mysql_query($sql);
$busca=mysql_fetch_assoc($sql_exec);

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
        <td width="676" height="21"><!-- InstanceBeginEditable name="Titulo" -->
          <div align="center" class="orange">Add Principal Groups</div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <form id="form1" name="form1" method="post" action="includes/pg_edita_inc.php?Id_pg=<?=$Id_pg?>">
            <div align="center" class="style3">
              <p>Principal Groups are contentive of the main subjects to organize the type of entertainment </p>
            </div>
            <p align="center" class="norm">
              <?=$msj?>
            </p>
            <p align="center" class="norm">&nbsp;</p>
            <p align="center" class="norm"><br />
            </p>
            <table width="228" border="0" align="center">
              <tr>
                <td width="54" height="24" class="style3"><div align="center">Name:</div></td>
                <td width="230"><label>
                  <input name="nombre_pg" type="text" id="nombre_pg" value="<?php echo $busca['nombre_pg'];?> " />
                </label></td>
              </tr>
              <tr>
                <td height="21" class="style3"><div align="center">Rank: </div></td>
                <td height="21" class="style3"><label>
                  <input name="rank" type="text" id="rank" value="<?php echo $busca['rank'];?> " size="3" />
                  (Higher goes first)</label></td>
              </tr>
              <tr>
                <td height="45" colspan="2"><label>
                    <div align="center">
                      <input type="submit" name="enviar" id="enviar" value="Edit" />
                    </div>
                  </label></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
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
