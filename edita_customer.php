<?php include('conect.php');
include('includes/lib.php');
 
@$Id_customer =$_REQUEST['Id_customer'];

$sql = "SELECT * FROM customers WHERE Id_customer =$Id_customer ";
$sql_exec=mysql_query($sql);
$busca=mysql_fetch_assoc($sql_exec);

$corporatemail = "cesar@orlandocheaptickets.com";
$pw = generatePassword();
$date=date('Y-n-d G:i:s');
$ip=$_SERVER['REMOTE_ADDR'];

@$status=$_REQUEST['status'];
if ($status==1) {
$msj="An email has been sent to confirm your user and password.";
}

		if (isset($_POST['enviar'])){
		extract($_POST);
		$errores = array();
		
		if (empty($email)) {
		$errores['email'] = "Must provide a valid email address";
		} else {
		$email_xs=email_exist($email);
		if ($email_xs=="NO"){
			$errores['email'] = "The email address already has been registered. If this is your email please try the password recovery link below the loggin box.";
		}
		
		$regex_email = '/^[a-z0-9_\.\-\~]{2,}@[a-z0-9_\.\-\~]{2,}.[a-z0-9]{2,3}$/';
		if (!preg_match($regex_email, $email)) {
			$errores['email'] = "Invalid email address";
		}}
		
		if (empty($firstname)) {
		$errores['firstname'] = "Must Provide your Name";
		}
		if (empty($lastname)) {
		$errores['lastname'] = "Must Provide your Lastname";
		}
		if (empty($add_1)) {
		$errores['add_1'] = "Must Provide your Address";
		}
		if (empty($country)) {
		$errores['country'] = "Must Provide your Country";
		}
		if (empty($phone)) {
		$errores['phone'] = "Must Provide your phone number";
		}
		if (empty($agree)) {
		$errores['agree'] = "Must read the Terms and Conditions and click the checkbox to agree";
		}
	
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
			advertise = '$advertise',
			agree = '$agree'";
			
			mysql_query($query);
		
			$msj="Added Successfuly";
			
			
// comienzo emailpara el cliente ---------------------		
			$headers ="From: registration@orlandocheaptickets.com.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=windows-1253\r\n";
			$subject ="Registration email Orlandocheaptickets.com";
			
			$data = "<p></p>
			<p>Your Account has been created successfuly, now you can log in and proceed with your experience.</p>
			<p>Your new password is : ".$pw."</p>
			<p>At this time you can go to your control panel and monitor the status of your purschase <a href='http://www.orlandocheaptickets.com.com/login_customer.php'>My Account</a></p>
			<p>&nbsp;</p>
			<p>If you recived this email by mistake please dont go further.</p>";
	
			mail($email,$subject,$data,$headers);
// comienzo delemailpara nosotros -----------------

			$headers ="From: registration@orlandocheaptickets.com.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=windows-1253\r\n";
			$subject ="We have a new customer.";
			
			$data = "<p></p>
			<p>We have a new customer.</p>
			<p>Named  : ".$firstname." ".$lastname."</p>
			<p>";
	
			mail($corporatemail,$subject,$data,$headers);
						
			$carrito=lookintocart($ses_track);
									
			if (empty($carrito)){
			header("Location: thanks.php?status=1");
			}else{
			header("Location: includes/login_customer.php?email=$email&clave=clave&ses_track=$ses_track");
			}

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
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" --><br />
          <br />
          <form id="form1" name="form1" method="post" action="">
            <table width="442" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="138" class="style3">Title</td>
                <td width="304"><label>
                  <input name="title" type="text" id="title" value="<?php echo $busca['nombre_at'];?> " />
                  </label>
                    <label></label></td>
              </tr>
              <tr>
                <td class="style3">First Name</td>
                <td><input name="firstname" type="text" id="firstname" value="<?php echo $busca['nombre_at'];?> " /></td>
              </tr>
              <tr>
                <td class="style3">Last Name </td>
                <td><label>
                  <input name="lastname" type="text" id="lastname" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">Address</td>
                <td><label>
                  <input name="add_1" type="text" id="add_1" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">&nbsp;</td>
                <td><label>
                  <input name="add_2" type="text" id="add_2" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">Town</td>
                <td><label>
                  <input name="town" type="text" id="town" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">County</td>
                <td><label>
                  <input name="county" type="text" id="county" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">Zipcode</td>
                <td><label>
                  <input name="postcode" type="text" id="postcode" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">Country</td>
                <td><label>
                  <input name="country" type="text" id="country" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">Phone </td>
                <td><label>
                  <input name="phone" type="text" id="phone" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">Mobile</td>
                <td><label>
                  <input name="mobile" type="text" id="mobile" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="style3">email</td>
                <td><label>
                  <input name="email" type="text" id="email" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td class="style3">Password</td>
                <td><label>
                  <input name="clave" type="text" id="clave" value="<?php echo $busca['nombre_at'];?> " />
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
          <map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
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
