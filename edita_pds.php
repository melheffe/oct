<?PHP include('conect.php');

@$id_pds=$_REQUEST['id_pds'];

$sql_cat = "SELECT * FROM pg ORDER BY nombre_pg";
$cat_exec=mysql_query($sql_cat);

$sql_cat2 = "SELECT * FROM pg ORDER BY nombre_pg";
$cat_exec2=mysql_query($sql_cat2);

$sql="SELECT * FROM pds WHERE id_pds=$id_pds";
$sql_exec=mysql_query($sql);
$busca=mysql_fetch_assoc($sql_exec);
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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
          <div align="center" class="orange">Edit Parks, Dinners or Shows</div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
        <form id="form1" name="form1" method="post" action="includes/pds_edita_inc.php?id_pds=<?=$id_pds?>">
        	<div align="center" class="style3">
              <p>&nbsp;</p>
            </div>
            <p align="center" class="norm">
              <?=$msj?>
              <br />
            </p>
            <table width="497" border="0" align="center">
              <tr>
                <td width="105" height="24" class="style3"><div align="center">Name:</div></td>
                <td width="382"><label>
                  <input name="nombre_pds" type="text" id="nombre_pds" value="<?php echo $busca['nombre_pds'];?> " />
                </label></td>
              </tr>
              <tr>
                <td height="24" class="style3"><div align="center">Principal Group:</div></td>
                <td height="24"><select name="pg" id="pg">
                  <option value="<?php echo $busca['cat_pds'];?> " selected="selected"><?php 
				  $sql_cat3 = "SELECT * FROM pg WHERE Id_pg=".$busca['cat_pds'];
				  $cat_exec3=mysql_query($sql_cat3);
				  while($cat_row3=mysql_fetch_array($cat_exec3)){
				  $cat1=$cat_row3['nombre_pg'];
				  }
				  echo $cat1;?> </option>
                  <?php while($cat_row=mysql_fetch_array($cat_exec)){ ?>
                  <option value="<?=$cat_row['Id_pg']?>">
                  <?=$cat_row['nombre_pg']?>
                  </option>
                  <?php } ?>
                </select></td>
              </tr>
              <tr>
                <td height="24" class="style3">&nbsp;</td>
                <td height="24"><select name="pg2" id="pg2">
                  <option value="<?php echo $busca['cat_pds2'];?> " selected="selected"><?php 
				  $sql_cat4 = "SELECT * FROM pg WHERE Id_pg=".$busca['cat_pds2'];
				  $cat_exec4=mysql_query($sql_cat4);
				  while($cat_row4=mysql_fetch_array($cat_exec4)){
				  $cat2=$cat_row4['nombre_pg'];
				  }
				  echo $cat2;?></option>
                  <?php while($cat_row2=mysql_fetch_array($cat_exec2)){ ?>
                  <option value="<?=$cat_row2['Id_pg']?>">
                  <?=$cat_row2['nombre_pg']?>
                  </option>
                  <?php } ?>
                </select></td>
              </tr>
              <tr>
                <td height="24" class="style3"><div align="center">Principal Picture
                    </label>                  
                  </div></td>
                <td height="24"><label>
                  <input name="pic_pds" type="text" id="pic_pds" value="<?php echo $busca['pic_pds'];?>" size="45" />
                </label></td>
              </tr>
              <tr>
                <td height="45" class="style3"><div align="center">Description:</div></td>
                <td height="45"><textarea name="description" id="description" cols="45" rows="5"><?php echo $busca['description'];?> </textarea></td>
              </tr>
              <tr>
                <td height="45" class="style3"><div align="center">Comments:</div></td>
                <td height="45"><label>
                  <textarea name="coments" id="coments" cols="45" rows="5"><?php echo $busca['coments'];?> </textarea>
                </label></td>
              </tr>
              <tr>
                <td height="22" class="style3"><div align="center">Disney Group</div></td>
                <td height="22"><input name="disney" type="checkbox" id="disney" value="1" <?php if (!(strcmp($busca['disney'],"1"))) {echo "checked=\"checked\"";} ?> /></td>
              </tr>
              <tr>
                <td height="21" class="style3"><div align="center">Universal Group</div></td>
                <td height="21" class="style3"><label>
                  <input name="universal" type="checkbox" id="universal" value="1" <?php if (!(strcmp($busca['universal'],"1"))) {echo "checked=\"checked\"";} ?>/>
                </label></td>
              </tr>
              <tr>
                <td height="45" colspan="2"><div align="center">
                  <input type="submit" name="enviar" id="enviar" value="Submit" />
                </div></td>
              </tr>
            </table>
            <p>&nbsp;</p>
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
