<?php include('conect.php');
include('includes/lib.php');
$pw = generatePassword();
$date=date('Y-n-d G:i:s');
$ip='127.0.0.1';

@$status=$_REQUEST['status'];


		if (isset($_POST['enviar'])){
		extract($_POST);
		$errores = array();
	/*
		$regex_name = '/^[a-zA-ZñÑàèìòùáéíóúÀÈÌÒÙÁÉÍÓÚüÜ0-9\.\-\ ]{3,}$/';
		if (!preg_match($regex_name,$nombre)) {
			$errores['nombre'] = "Su nombre contiene caracteres inválidos";
		}
		
		$regex_ci = '/^[a-zA-ZñÑàèìòùáéíóúÀÈÌÒÙÁÉÍÓÚüÜ0-9\.\-\ ]{6,}$/';
		if (!preg_match($regex_ci,$cedula)) {
			$errores['cedula'] = "La cedula ó R.I.F es invalida";
		}
		
		$regex_email = '/^[a-z0-9_\.\-\~]{2,}@[a-z0-9_\.\-\~]{2,}.[a-z0-9]{2,3}$/';
		if (!preg_match($regex_email, $email)) {
			$errores['email'] = "E-mail es invalido";
		}
		
		if (empty($sector)) {
		$errores['sector'] = "Debe seleccionar un Sector Comercial";
		}
*/
		if (empty($errores)) {
		//print_r($_POST);
		$query = "INSERT INTO customers SET
			title = '$title',
			firstname = '$firstname',
			lastname = '$lastname',
			add_1 = '$add_1',
			add_2 = '$add_2',
			town = '$town',
			county = '$county',
			postcode = '$postcode',
			country = '$country',
			clave = '$clave',
			email = '$email',
			phone = '$phone',
			mobile = '$mobile',
			reg_date = '$date',
			reg_ip = '$ip',
			advertise = 'Y',
			agree = 'Y'";
			
			mysql_query($query);
		
			$msj="Added Successfuly";
			}}

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
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />


<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-image: url(images/sw.jpg);
}
-->
</style>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="css.css" rel="stylesheet" type="text/css" />
<meta name="Keywords" content="<?php include('keywordslist.php');?>" />
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
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
<p class="tit_tk">Registration Form:</p>
<table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="412" class="letrasform"><div align="center"><span class="letrasform2">
      <?php if ( !empty($errores) ) {
		print "Los sig. errores fueron encontrados.<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
		} 
		echo $msj?>
    </span></div></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="">
  <table width="442" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="138" class="style3">Title</td>
      <td width="304"><label>
        <input type="text" name="title" id="title" />
        </label>
          <label></label></td>
    </tr>
    <tr>
      <td class="style3">First Name</td>
      <td><input type="text" name="firstname" id="firstname" /></td>
    </tr>
    <tr>
      <td class="style3">Last Name </td>
      <td><label>
        <input type="text" name="lastname" id="lastname" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">Address</td>
      <td><label>
        <input type="text" name="add_1" id="add_1" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">&nbsp;</td>
      <td><label>
        <input type="text" name="add_2" id="add_2" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">Town</td>
      <td><label>
        <input type="text" name="town" id="town" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">County</td>
      <td><label>
        <input type="text" name="county" id="county" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">Zipcode</td>
      <td><label>
        <input type="text" name="postcode" id="postcode" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">Country</td>
      <td><label>
        <input type="text" name="country" id="country" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">Phone </td>
      <td><label>
        <input type="text" name="phone" id="phone" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">Mobile</td>
      <td><label>
        <input type="text" name="mobile" id="mobile" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="style3">email</td>
      <td><label>
        <input type="text" name="email" id="email" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">Password</td>
      <td><label>
        <input type="text" name="clave" id="clave" />
      </label></td>
    </tr>
    <tr>
      <td class="style3">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p align="center">
    <label>
      <input type="submit" name="enviar" id="enviar" value="Submit" />
      </label>
  </p>
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
