<?php
include ('conect.php');
include('includes/sesion.php');
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Registry updated succesfuly";
}

$sql="SELECT * FROM customers ORDER BY id_customer ASC";
$sql_exec=mysql_query($sql);
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

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #CFC89A;
}
.style6 {font-size: 9px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
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
        <td> 
          <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
            <tr>
              <td><div align="center">
                <?=$msj?>
                </div></td>
              </tr>
          </table>
          <br />
          <table width="700" height="16" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
            <tr>
              <td width="10">&nbsp;</td>
        <td width="690"><span class="style3">Customers List</span></td>
      </tr>
                  </table>
          <br />
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><table width="694" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
                <tr class="TxPqVerdeOscuro">
                  <td width="119"><div align="center" class="style3 style1 style2"><strong> Full name</strong></div></td>
            <td width="182" class="style3"><div align="center" class="style3"><strong>email</strong></div></td>
            <td width="131"><div align="center" class="style3 style1 style2"><strong>phone </strong></div></td>
            <td width="141"><div align="center"><span class="style3 style1 style2"><strong>Country </strong></span></div></td>
                </tr>
                <?php while($row=mysql_fetch_assoc($sql_exec)){?>
                <tr class="TxPqSimple">
                  <td class="style3"><div align="center" class="style3"> <?php echo $row['firstname']." ".$row['lastname'];?> </div></td>
            <td class="style4"><div align="center" class="style3">
              <?=$row['email']?>
              </div></td>
            <td class="style3"><div align="center" class="style3">
              <?=$row['phone']?>
              </div></td>
            <td class="style3"><div align="center">
              <?=$row['country']?>
            </div></td>
            <td width="109" class="style3"><div align="center" class="style3"><span class="style4"><?php echo "<a href='editanews.php?id_news=".$row['idnews']."'>Edit</a>"; ?> / <?php echo "<a href='borranews.php?id_news=".$row['idnews']."'>Erase</a>"; ?> </span></div></td>
          </tr>
                <?php }?>
                </table></td>
      </tr>
                  </table>
          <p><br />
                  </p>          <p></p></td>
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
