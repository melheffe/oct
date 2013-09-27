<?PHP include('conect.php');
$fech=date("Y-m-d H:i:s");

@$id_news=$_REQUEST['id_news'];

$sql="SELECT * FROM news WHERE idnews=$id_news";
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
<table width="721" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="721"><table width="720" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>          <table width="620" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
            <tr>
              <td width="620" height="186"><form id="form1" name="form1" method="post" action="includes/news_edita_inc.php?id_news=<?=$id_news?>">
                <p align="center"><br />
                  <?=$msj?></p>
        <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="style3">
          <tr>
            <td width="14%"><span class="style9"></span></td>
            <td width="86%" class="style14"><label>
              <div align="right">                </div>
              <div align="center"></div></td>
          </tr>
          <tr>
            <td height="37"><span class="style14">Title</span></td>
            <td><label>
              <input name="titulo" type="text" id="titulo" value="<?php echo $busca['titulo'];?> " size="40"/>
              </label></td>
          </tr>
          <tr>
            <td valign="top"><span class="style14">News</span></td>
            <td><textarea name="body" cols="50" rows="10" wrap="virtual" id="body"><?php echo $busca['body'];?></textarea></td>
          </tr>
          <tr>
            <td height="46" colspan="2"><label>
              <div align="center">
                <input name="enviar" type="submit" id="enviar" value="Save" />
              </div>
              </label></td>
            </tr>
          </table>
        </form>      </td>
    </tr>
          </table></td>
      </tr>
    </table></td>
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
