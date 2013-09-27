<?php include('conect.php');
include('includes/lib.php');
include('includes/sesion_customer.php');
$pw = generatePassword();
$date=date('Y-n-d G:i:s');
$ip=$_SERVER['REMOTE_ADDR'];
$cus= $_SESSION['Id_customer'];

@$status=$_REQUEST['status'];
if ($status==1) {
$msj="An email has been sent toiyour email account. Thanks.";
}

		if (isset($_POST['enviar'])){
		extract($_POST);
		$errores = array();
		
		$sql2="SELECT * FROM customers WHERE Id_customer = $cus";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$oldreal = $row2['clave'];
		}
		if ($old==$oldreal){
		if ($new == $new2){
			$sqla = "UPDATE customers SET
				clave = '$new2' WHERE Id_customer = $cus";				   
				mysql_query($sqla);
				
				$msj="An email has been sent to your email account. Thanks.";
				
			} else {$errores['coincidencia'] = "New password doesnt match";}
		}else {$errores['pelaste'] = "Old password doesnt match";}

		
		
			$headers ="From: registration@orlandocheaptickets.com.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=windows-1253\r\n";
			$subject ="Password exchange Orlandocheaptickets.com";
			
			$data = "<p></p>
			<p>Your password has been changed successfuly, now you can log in and proceed with your experience.</p>
			<p>Your new password is : ".$new2."</p>
			<p>At this time you can go to your control panel and monitor the status of your purschase <a href='http://www.orlandocheaptickets.com.com/login_customer.php'>My Account</a></p>
			<p>&nbsp;</p>
			<p>If you recived this email by mistake please dont go further.</p>";
	
			mail($email,$subject,$data,$headers); 
			
		
			/* header("Location: thanks.php?status=1");
			exit(); */
			}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/my_oct.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="verify-v1" content="6nBd2xPn/Wpxw+0G1cwvlvwcjSvHM0LjBuUN47+gwlk=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Orlando Cheap Tickets ...</title>
<!-- InstanceEndEditable -->
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
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="800" height="126" background="images/head.jpg"><table width="798" height="125" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="145" height="84" valign="bottom"><div align="center"><a href="index.php"><img src="images/logo.png" width="130" height="81" border="0" align="bottom" style="width: 130px; height: 81px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
        <td width="653" valign="bottom"><p><img src="images/oct.png" width="466" height="46" style="width: 466px; height: 46px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></p>          </td>
      </tr>
      <tr>
        <td height="25" valign="bottom">&nbsp;</td>
        <td valign="bottom"><div align="right"><a href="comprar.php"><img src="images/btn-03.png" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /><img src="images/btn-01.png" alt="Your Account" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a><a href="doc.php?id_doc=1"><img src="images/btn-02.png" width="104" height="25" border="0" style="width: 104px; height: 25px; filter:
progid:DXImageTransform.Microsoft.AlphaImageLoader(src='image.png', sizingMethod='scale')" /></a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28"><img src="images/orange_bar.jpg" alt="barra" width="800" height="28" /></td>
  </tr>
  <tr>
    <td height="28" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="264"><table width="798" height="156" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="142" height="372" rowspan="2" valign="top"><table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="114"><div align="center" class="style3"><a href="sesion_end.php">Log Out</a></div></td>
          </tr>
          <tr>
            <td><p align="center"><span class="style3" class="style3"><a href="my_oct_menu.php">Menu</a></span></p>              </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width="656" height="32" valign="top"><!-- InstanceBeginEditable name="Space" -->
          <table width="515" border="0" align="center" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td height="14" colspan="3" valign="top"><p class="tit_tk">Password Changer</p>
                  <table width="0" border="0" align="center" cellpadding="0" cellspacing="0" class="style3">
                    <tr>
                      <td width="412" class="letrasform"><div align="center"><span class="letrasform2">
                          <?php if ( !empty($errores) ) {
		print "Following errors where found<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
		} 
		echo $msj?>
                      </span></div></td>
                    </tr>
                  </table>
                  <br />
                  <br />
                  <form id="form1" name="form1" method="post" action="">
                    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
                      <tr>
                        <td><table width="335" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="141" class="style3">Old Password</td>
                              <td width="194"><label>
                                <input name="old" type="password" id="old" />
                              </label></td>
                            </tr>
                            <tr>
                              <td class="style3">New Password</td>
                              <td><label>
                                <input name="new" type="password" id="new" />
                              </label></td>
                            </tr>
                            <tr>
                              <td class="style3">Re-type New Password</td>
                              <td><label>
                                <input name="new2" type="password" id="new2" />
                              </label></td>
                            </tr>
                          </table>
                            <br />
                            <label>
                            <div align="center">
                              <input name="enviar" type="submit" id="enviar" value="enviar" />
                          </div></td>
                      </tr>
                    </table>
                  <p align="center">
                      <label></label>
                    </p>
                </form>
                <p>&nbsp; </p>
                <p>&nbsp;</p></td>
            </tr>
          </table>
          <p>&nbsp;            </p>
          <p>
            <map name="Map2" id="Map2">
              <area shape="rect" coords="1,2,172,208" href="#" />
            </map>
                    </p>
        <!-- InstanceEndEditable --></td>
        </tr>
      <tr>
        <td height="124" valign="top"><table width="470" border="0" align="center">
          <tr>
            <td width="464"><img src="images/banner.jpg" width="480" height="170" /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
  </tr>
  <tr>
    <td height="19" class="style1"><div align="center" class="peque"><a href="doc.php?id_doc=2">Conditions of Use</a> | <a href="doc.php?id_doc=3">Privacy Notice</a> &copy; 2006-2007,Orlandocheaptickets.com, Inc. or its affiliates </div></td>
  </tr>
</table>
<map name="Map2" id="Map2"><area shape="rect" coords="1,2,172,208" href="#" /></map>
</body>
<!-- InstanceEnd --></html>
