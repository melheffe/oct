<?php 
include ('conect.php');
		if (isset($_POST['grabar'])) {
		//print_r($_POST);
		 extract($_POST);
		 		
		 $errores = array();
		  
		/*   $regex_name = '/^[a-zA-ZñÑàèìòùáéíóúÀÈÌÒÙÁÉÍÓÚüÜ ]{3,}$/';
		if (!preg_match($regex_name,$name)) {
			$errores['name'] = "Su nombre contiene caracteres invalidos";
		}
		
		  $regex_mail = '/^[a-z0-9_\.\-\~]{2,}@[a-z0-9_\.\-\~]{2,}.[a-z0-9]{2,3}$/';
		if (!preg_match($regex_mail, $mail)) {
			$errores['mail'] = "E-mail es invalido";
		}*/
		  
		  
		
			if (empty($errores)) {
			$query="INSERT INTO usuario SET
			nombre = '$name',
			email = '$mail', 
			clave = '$pw',
			id_tipo_usuario = '$tipo'";
			
			mysql_query($query);
			
			$msj="El registro ha sido agregado con exito.";
			}
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
          <form id="form1" name="form1" method="post" action="">
            <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
              <tr>
                <td><div align="center">
                    <?php
	if ( !empty($errores) ) {
		print "Los sig. errores fueron encontrados.<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
	}
?>
                    <?=$msj?>
                  </div>
                    <p>&nbsp;</p>
                  <table width="234" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
                      <tr>
                        <td width="77" class="TxResaltadoVerdeMedio">Name:</td>
                        <td width="212"><input name="name" type="text" id="name" /></td>
                      </tr>
                      <tr>
                        <td class="TxResaltadoVerdeMedio">Email:</td>
                        <td><input name="mail" type="text" id="mail" /></td>
                      </tr>
                      <tr>
                        <td class="TxResaltadoVerdeMedio">Password:</td>
                        <td><input name="pw" type="text" id="pw" /></td>
                      </tr>
                      <tr>
                        <td class="TxResaltadoVerdeMedio">Type</td>
                        <td><label>
                          <select name="tipo" id="tipo">
                            <option value="1" selected="selected">Admin       1</option>
                            <option value="2">Sales        2</option>
                            <option value="3">Consultas 3</option>
                          </select>
                        </label></td>
                      </tr>
                    </table>
                  <br />
                  <div align="center">
                      <input name="grabar" type="submit" id="grabar" value="Save" />
                    </div>
                  <label></label>
                    <label></label>
                    <label></label></td>
              </tr>
            </table>
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
