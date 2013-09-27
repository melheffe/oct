<?php include ('conect.php');

@$id_tk=$_REQUEST['id_tk'];

$sql_cat = "SELECT * FROM pds ORDER BY nombre_pds";
$cat_exec=mysql_query($sql_cat);

$sql_catq = "SELECT * FROM tc ORDER BY name";
$cat_execq=mysql_query($sql_catq);

$sql="SELECT * FROM tk WHERE id_tk=$id_tk";
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
          <div align="center" class="orange">Add Tickets </div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <p align="center"><span class="norm">
            <?=$msj?>
          </span></p>
          <table width="501" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="501"><form id="form1" name="form1" method="post" action="includes/tk_edita_inc.php?id_tk=<?=$id_tk?>">
                <p>&nbsp;</p>
                <table width="429" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="142" class="style3"><div align="center">Ticket Name:</div></td>
                    <td width="287"><label>
                      <input name="nombre_tk" type="text" id="nombre_tk" value="<?php echo $busca['nombre_tk'];?> " />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Park Dinner or Show:</div></td>
                    <td><select name="cat_pds" id="cat_pds">
                      <option value="<?php echo $busca['cat_pds'];?> " selected="selected"><?php 
						$sql_catqz = "SELECT * FROM pds WHERE id_pds=".$busca['cat_pds'];
						$cat_execqz=mysql_query($sql_catqz);
					  	while($cat_rowz=mysql_fetch_array($cat_execqz)){
						echo $cat_rowz['nombre_pds'];
						}
						?></option>
                      <?php while($cat_row=mysql_fetch_array($cat_exec)){ ?>
                      <option value="<?=$cat_row['id_pds']?>">
                      <?=$cat_row['nombre_pds']?>
                      </option>
                      <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Type of Ticket</div></td>
                    <td><select name="type_tk" id="type_tk">
                      <option value="<?php echo $busca['type_tk'];?> " selected="selected"><?php 
						$sql_catqx = "SELECT * FROM tc WHERE id_tc=".$busca['type_tk'];
						$cat_execqx=mysql_query($sql_catqx);
					  	while($cat_rowx=mysql_fetch_array($cat_execqx)){
						echo $cat_rowx['name'];
						}
						?></option>
                      <?php while($cat_rowq=mysql_fetch_array($cat_execq)){ ?>
                      <option value="<?=$cat_rowq['id_tc']?>">
                      <?=$cat_rowq['name']?>
                      </option>
                      <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Days </div></td>
                    <td><label>
                      <input name="days" type="text" id="days" value="<?php echo $busca['days'];?> " />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Ages:</div></td>
                    <td><label>
                      <input name="ages" type="text" id="ages" value="<?php echo $busca['ages'];?> " />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Gate Price:</div></td>
                    <td><label>
                      <input name="gate" type="text" id="gate" value="<?php echo $busca['gate'];?> " />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Our Price: </div></td>
                    <td><label>
                      <input name="our" type="text" id="our" value="<?php echo $busca['our'];?> " />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Available:</div></td>
                    <td><label>
                      <input <?php if (!(strcmp($busca['status'],"1"))) {echo "checked=\"checked\"";} ?> name="status" type="checkbox" id="status" value="1" />
                    </label></td>
                  </tr>

                  <tr>
                    <td class="style3"><div align="center">Conditions:</div></td>
                    <td><label>
                      <textarea name="conditions" id="conditions" cols="25" rows="5"><?php echo $busca['conditions'];?> </textarea>
                    </label></td>
                  </tr>
                </table>
                <p>
                  <label>
                  <div align="center">
                    <div align="center">
                      <input type="submit" name="enviar" id="enviar" value="Submit" />
                      </div>
                  </label>
                  <p>&nbsp;</p>
              </form>              </td>
            </tr>
          </table>
          <p>&nbsp;</p>
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
