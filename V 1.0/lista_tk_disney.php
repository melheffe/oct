<?php include ('conect.php');

$fech=date("Y-m-d H:i:s");
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Su registro ha sido actualizado con éxito!";
}

$sql="SELECT * FROM tk_disney";
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
<style type="text/css">
<!--
.style4 {font-weight: bold}
-->
</style>
<style type="text/css">
<!--
.style5 {font-size: 11px; font-family: Verdana, Arial, Helvetica, sans-serif;}
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
            <?=$msj ?>
                </strong></div></td>
      </tr>
    </table>
      <br />
      <table width="151" height="13" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
        <tr>
          <td width="256"><div align="center"><span class="style3">Tickets </span></div></td>
          </tr>
      </table>
      <br />
      <table width="536" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="537"><table width="847" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
              <tr class="general">
                <td width="143" class="style3"><div align="center" class="style3"><strong>Parks Dinners or Shows</strong></div></td>
                <td width="161"><div align="center" class="style3"><strong>Ticket Combo</strong></div></td>
                <td width="62" class="norm"><div align="center">Gate Price</div></td>
                <td width="58"><div align="center"><span class="style3 style1 style2"><strong>Our Price</strong></span></div></td>
                <td width="172" class="norm"><div align="center">Conditions</div></td>
                <td width="56"><div align="center" class="style2 style3"><strong>Display</strong></div></td>
                <td width="71" class="style3"><div align="center"><strong>Customize</strong></div></td>
              </tr>
              <?php while($row=mysql_fetch_assoc($sql_exec)){?>
              <tr class="style3">
                <td width="143" height="22" class="style4"><div align="center" class="style3">
                    <div align="left">
                      <?php 	$sqla="SELECT * FROM tk_disney_items INNER JOIN pds ON tk_disney_items.id_pds = pds.id_pds WHERE tk_disney_items.id_tk_disney = ".$row['id_tk_disney'];
							$sql_execa=mysql_query($sqla);
							while($rowa=mysql_fetch_assoc($sql_execa)){
							echo "- ".$rowa['nombre_pds']."<br>";
							} ?>
                        </div>
                </div></td>
                <td class="style4"><div align="center" class="style3 style100">
                  <?=$row['nombre_tk_disney']?>
                </div></td>
                <td class="style4"><div align="center"><span class="style3 style100">
                  <?=$row['gate']?>
                </span></div></td>
                <td class="style4"><div align="center"><span class="style3 style100">
                  <?=$row['our']?>
                </span></div></td>
                <td class="style4"><div align="left" class="style3"><span class="style100">
                  <?=$row['conditions']?>
                </span></div></td>
                <td class="style4"><div align="center" class="style3 style100">
                  <?php if ($row['status']==1){
				echo "ON";
				}else{
				echo "OFF";
				}?>
                </div></td>
                <td class="style5"><div align="center"><a href="add_tk_disney_2nd.php?id_tk_disney=<?=$row['id_tk_disney']?>">Customize</a></div></td>
                <td width="106"><div align="center" class="style3"><?php echo "<a href='#.php?id_pds=".$row['id_pds']."'>Edit</a>"; ?> / <?php echo "<a href='#.php?id_pds=".$row['id_pds']."'>Erase</a>"; ?> </span></div></td>
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
