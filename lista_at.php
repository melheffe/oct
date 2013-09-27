<?php include ('conect.php');
include('includes/sesion.php');

$fech=date("Y-m-d H:i:s");
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Registry updated succesfully";
}

$sql="SELECT * FROM at ORDER BY cat_pds ";
$sql_exec=mysql_query($sql);
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
<style type="text/css">
<!--
.style1 {font-weight: bold}
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
<table width="610" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="610" height="242"><table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
      <tr>
        <td class="sobreblancopeq"><div align="center"><strong>
            <?=$msj?>
                </strong></div></td>
      </tr>
    </table>
      <br />
      <table width="473" height="16" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
        <tr>
          <td width="10">&nbsp;</td>
          <td width="690" class="titulos"><div align="center"><span class="style3">List of Parks, Dinners or Shows</span></div></td>
        </tr>
      </table>
      <br />
      <table width="536" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="537"><table width="749" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
              <tr class="norm">
                <td width="135"><div align="center" class="style3"><strong>Name PDS</strong></div></td>
                <td width="364"><div align="center"><span class="style3 style1 style2"><strong>Description</strong></span></div></td>
                <td width="54" class="norm"><div align="center">Img</div></td>
                </tr>
              <?php while($row=mysql_fetch_assoc($sql_exec)){?>
              <tr class="style3">
                <td height="22" class="style4"><div align="center" class="style3 style100">
                  <?=$row['nombre_at']?>
                </div></td>
                <td class="style4"><span class="style3 style100"><?php echo substr($row['description'], 0, 150);?></span>...</td>
                <td class="style4"><div align="center"><a href="act_img_princ_at.php?id_at=<?=$row['id_at']?>"><img src="images/refresh.gif" width="16" height="16" border="0" /></a></div></td>
                <td width="98"><div align="center" class="style3 style100"><span class="style101"><?php echo "<a href='edita_at.php?id_at=".$row['id_at']."'>Edit</a>"; ?> / <?php echo "<a href='borra_at.php?id_at=".$row['id_at']."'>Erase</a>"; ?> </span></div></td>
                <td width="86"><div align="center"><span class="style101"><?php echo "<a href='p_screen.php?id_pds=".$row['id_pds']."'>Preview</a>"; ?></span></div></td>
              </tr>
              <?php }?>
          </table></td>
        </tr>
      </table>
      <p>&nbsp;</p></td>
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
