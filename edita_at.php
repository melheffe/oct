<?PHP include('conect.php');

@$id_at=$_REQUEST['id_at'];

$sql_catq = "SELECT * FROM pds ORDER BY nombre_pds";
$cat_execq=mysql_query($sql_catq);

$sql="SELECT * FROM at WHERE id_at=$id_at";
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
        <form id="form1" name="form1" method="post" action="includes/at_edita_inc.php?id_at=<?=$id_at?>">
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
                  <input name="nombre_at" type="text" id="nombre_pds" value="<?php echo $busca['nombre_at'];?> " />
                </label></td>
              </tr>
              <tr>
                <td height="24" class="style3"><div align="center">Principal Group:</div></td>
                <td height="24"><select name="cat_pds" id="cat_pds">
                  <option value="<?php echo $busca['cat_pds'];?> " selected="selected"><?php 
				  $sql_catqx = "SELECT * FROM pds WHERE id_pds=".$busca['cat_pds'];
				$cat_execqx=mysql_query($sql_catqx);
				while($cat_rowqx=mysql_fetch_array($cat_execqx)){
				$max=$cat_rowqx['nombre_pds'];
				}

echo $max;?> </option>
                  <?php while($cat_rowq=mysql_fetch_array($cat_execq)){ ?>
                  <option value="<?=$cat_rowq['id_pds']?>">
                  <?=$cat_rowq['nombre_pds']?>
                  </option>
                  <?php } ?>
                </select></td>
              </tr>
              <tr>
                <td height="24" class="style3"><div align="center">Principal Picture
                    </label>                  
                  </div></td>
                <td height="24"><label>
                  <input name="pic_at" type="text" id="pic_at" value="<?php echo $busca['pic_at'];?>" size="45" />
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
