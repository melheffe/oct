<?php include('conect.php');
include('includes/sesion.php');
$dai=date(d);
$mof=date(m);
$nao=date(Y);

		if (isset($_POST['enviar'])){
		extract($_POST);
		//print_r($_POST);
		$query = "INSERT INTO news SET
			dia = '$dai',
			mes = '$mof',
			anio = '$nao',
			titulo = '$titulo',
			body = '$body'";
			
			mysql_query($query);
		
			$msj="El registro ha sido agregado con exito.";
			}
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
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="style3">
  <tr>
    <td height="186" class="text"><form id="form1" name="form1" method="post" action="">
      <p align="center"><br />
        <?=$msj?></p>
      <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="11%"><span class="style3"></span></td>
          <td width="89%" class="style14"><label>
            <div align="right">
              <?php echo $dai." / ".$mof." / ".$nao?>            </div>
            <div align="center"></div></td>
        </tr>
        <tr>
          <td height="37"><span class="style14 style2 style3">Title</span></td>
          <td><label>
            <input name="titulo" type="text" id="titulo" size="46" />
          </label></td>
        </tr>
        <tr>
          <td valign="top"><span class="style14 style2 style3">News</span></td>
          <td><textarea name="body" cols="35" rows="5" id="body"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"> <br />
            <input name="enviar" type="submit" id="enviar" value="Save" />
              </div>
            </label></td>
          </tr>
      </table>
      <p>&nbsp;</p>
    </form>
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
