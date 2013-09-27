<?php include('conect.php');

@$idcliente=$_REQUEST['idcliente'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>.:: MBE Guaparo ::.</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link href="style/CCS.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #000000;
}
-->
</style>
</head>

<body>
<table width="721" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="721"><table width="732" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="732"><img src="up.jpg" width="732" height="115" /></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><!-- InstanceBeginEditable name="editable" --><br />
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
  <tr>
    <td><form id="form1" name="form1" method="post" action="includes/change_pw_inc.php?idcliente=<?=$idcliente?>">
      <p align="center"><?=$msj?></p>
      <table width="278" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="127">Clave anterior </td>
          <td width="151"><label>
            <input name="old" type="password" id="old" />
          </label></td>
        </tr>
        <tr>
          <td>Nueva clave </td>
          <td><label>
            <input name="new1" type="password" id="new1" />
          </label></td>
        </tr>
        <tr>
          <td>Repita Nueva clave </td>
          <td><label>
            <input name="new2" type="password" id="new2" />
          </label></td>
        </tr>
      </table>
      <br />
      <label>
        <div align="center">
          <input name="enviar" type="submit" id="enviar" value="enviar" />
        </div>
      </label>
    </form></td>
  </tr>
</table>
<br />
        <!-- InstanceEndEditable --></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
