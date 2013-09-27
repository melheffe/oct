<?php include('conect.php');
include('includes/lib.php');
 
 if(!isset($ses_track)){ 	
	session_start();
	$ses_track = session_id();
}
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Orlando Cheap Tickets</title>
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
</head>

<body>
<table width="753" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="126" colspan="4" valign="top" background="images/head.jpg"><table width="747" height="125" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="149" height="97" valign="bottom"><div align="center"><a href="index.php"><img src="images/logo.png" width="130" height="81" border="0" align="bottom" style="width: 130px; height: 81px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
          <td width="612" valign="bottom"><p><img src="images/oct.png" width="466" height="46" style="width: 466px; height: 46px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></p></td>
        </tr>
      <tr>
        <td height="28" colspan="2" valign="bottom"><div align="right"><img src="images/btn-01.png" width="104" height="25" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /><img src="images/btn-02.png" width="104" height="25" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></div></td>
        </tr>
      
      
      
      
    </table></td>
  </tr>
  <tr>
    <td height="28" colspan="4" valign="top"><img src="images/orange_bar.jpg" width="754" height="28" /></td>
  </tr>
  <tr>
    <td height="14" colspan="4" valign="top"><br /></td>
  </tr>
  <tr>
    <td width="187" height="601" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="601" colspan="3" valign="top"><p class="tit_tk">Registration Form</p>
      <table width="0" border="0" align="center" cellpadding="0" cellspacing="0" class="style3">
        <tr>
          <td width="486" class="letrasform"><div align="center"><span class="letrasform2">
              <?php if ( !empty($errores) ) {
		print "<p class='norm'>Following errors where found.</p><br />";
		foreach($errores as $e) {
			print "- " . $e . "<br>";
		}
		} 
		echo $msj?>
          </span></div></td>
        </tr>
      </table>
      <br />
      <br />
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
              <input type="password" name="clave" id="clave" />
            </label></td>
          </tr>
          <tr>
            <td class="style3">Re-type Password</td>
            <td><label>
              <input type="password" name="password2" id="password2" />
            </label></td>
          </tr>
          <tr>
            <td class="style3">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="style3">
            <td colspan="2" class="style3"><label>
              <div align="center">
                <input type="checkbox" name="advertise" id="advertise" />
            Do you wish to receive information about promotions and news ?            </div></td>
          </tr>
          <tr class="style3">
            <td height="35" colspan="2" class="style3"><label>
              <div align="center">
                <input type="checkbox" name="agree" id="agree" />
              Agree with the<a href="doc.php?id_doc=2"> Terms and Conditions.</a>
              </div>
            <div align="center"></div></td>
          </tr>
        </table>
        <p align="center">
          <label>
          <input type="submit" name="enviar" id="enviar" value="Submit" />
          </label>
        </p>
      </form>  
      <p>&nbsp; </p>
    <p>&nbsp;</p></td>
  </tr>
  
  
  <tr>
    <td height="21" colspan="4" valign="middle"><div align="center" class="peque"><a href="#">Conditions of Use</a> | <a href="#">Privacy Notice</a> &copy; 2006-2007,Orlandocheaptickets.com, Inc. or its affiliates </div></td>
  </tr>
  <tr>
    <td height="2"></td>
    <td width="477"></td>
    <td width="1"></td>
    <td width="89"></td>
  </tr>
</table>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
</html>
