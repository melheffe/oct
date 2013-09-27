<?php include ('conect.php');
include('includes/sesion.php');
include('includes/lib.php');
$fech=date("Y-m-d H:i:s");
@$status=$_REQUEST['status'];
if ($status==1) {
$msj="Completed Succesfuly!";
}
if ($status==2) {
$msj="Deleted Succesfuly";
}

@$id_pg=$_REQUEST['id_pg'];

$sql="SELECT * FROM tk ORDER BY kind AND cat_pds ASC";
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
<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style4 {font-weight: bold}
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
        <td width="676" height="21"><!-- InstanceBeginEditable name="Titulo" -->
          <div align="center"><span class="style3"><strong>Tickets Manager </strong></span></div>
        <!-- InstanceEndEditable --></td>
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
      <p>
        <?php include('inc_pds_selector.php'); ?><br />
      </p>
      <table width="536" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="537"><table width="898" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#EBEBEB" class="text">
              <tr class="general">
                <td width="135" class="style3"><div align="center" class="style3"><strong>Park Dinner or Show</strong></div></td>
                <td width="58" class="norm"><div align="center">Kind</div></td>
                <td width="42" class="norm"><div align="center">Type</div></td>
                <td width="182"><div align="center" class="style3"><strong>Ticket</strong></div></td>
                <td width="33" class="norm"><div align="center">Days</div></td>
                <td width="58"><div align="center"><span class="style3 style1 style2"><strong>Our Price</strong></span></div></td>
                <td width="176" class="norm"><div align="center">Conditions</div></td>
                <td width="32"><div align="center" class="style2 style3"><strong>Disp.</strong></div></td>
              </tr>
              <?php while($row=mysql_fetch_assoc($sql_exec)){?>
              <tr class="style3">
                <td width="135" height="22" class="style4"><div align="center" class="style3">
                    <?php if ($row['cat_pds']==0){
					echo kind($row['kind']);
					} else {
					echo pdsname($row['cat_pds']);
					}?>
                </div></td>
                <td class="style4"><div align="center"><span class="style3 style100">
                  <?=kind($row['kind'])?>
                </span></div></td>
                <td class="style4">
                  <div align="center">
                    <?php echo tyckettype($row['type_tk']);?>                    </div></td>
                <td class="style4"><div align="center" class="style3 style100">
                  <?=$row['nombre_tk']?>
                </div></td>
                <td class="style4"><div align="center"><span class="style3 style100">
                  <?=$row['days']?>
                </span></div></td>
                <td class="style4"><div align="center"><span class="style3 style100">
                  <?=$row['our']?>
                </span></div></td>
                <td class="style4"><div align="left" class="style3"><span class="style100">
                  <?php echo substr($row['conditions'], 0, 50);?> ...
                </span></div></td>
                <td class="style4"><div align="center" class="style3 style100"><?php if ($row['status']==1){
				echo "ON";
				}else{
				echo "OFF";
				}?></div></td>
                <td width="86"><div align="center" class="style3"><?php echo "<a href='edita_tk.php?id_tk=".$row['id_tk']."'>Edit</a>"; ?> / <?php echo "<a href='borra_tk.php?id_tk=".$row['id_tk']."'>Erase</a>"; ?> </span></div></td>
                <td width="74"><div align="center"><span class="style3 style100">
                  <?php if ($row['kind']!=1){
				  if ($row['kind']==2){
				echo "<a href='add_tk_combo_2nd.php?id_tk=".$row['id_tk']."'>Customize</a>";
				}else{
				echo "<a href='add_tk_disney_2nd.php?id_tk=".$row['id_tk']."'>Customize</a>";
				}}?>
                </span></div></td>
              </tr>
              <?php }?>
          </table>
            <br /></td>
        </tr>
      </table>
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
