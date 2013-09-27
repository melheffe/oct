<?php include ('conect.php');
include('includes/sesion.php');

$sql_catq = "SELECT * FROM tc ORDER BY name";
$cat_execq=mysql_query($sql_catq);
$kind='4';

if (isset($_POST['enviar'])){
	extract($_POST);
	
	$query = "INSERT INTO tk SET
	nombre_tk = '$nombre_tk_combo',
	type_tk = '$type_tk',
	kind = '$kind',
	ages = '$ages',
	parks = '$parks',
	days = '$days',
	gate = '$gate',
	our = '$our',
	status = '$status',
	conditions = '$conditions'";
			
	mysql_query($query);
	
				$res = mysql_query("SHOW TABLE STATUS LIKE 'tk'");
				$resultado = mysql_fetch_assoc($res);
				$mesmo=$resultado['Auto_increment']-1;
				
	header("Location: add_tk_universal_2nd.php?id_tk=$mesmo");
	exit();
	
	$msj="Ticket Creation Completed!!";
}
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
          <div align="center" class="orange">Add Flex Tickets </div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <p align="center"><span class="norm">
            <?=$msj?>
          </span></p>
          <table width="501" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="501"><form id="form1" name="form1" method="post" action="">
                <p>&nbsp;</p>
                <table width="429" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="142" class="style3"><div align="center">Flex Ticket Name:</div></td>
                    <td width="287"><label>
                      <input type="text" name="nombre_tk_combo" id="nombre_tk_combo" />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Type of Ticket</div></td>
                    <td><select name="type_tk" id="type_tk">
                      <option value="0" selected="selected">Select a Ticket Category</option>
                      <?php while($cat_rowq=mysql_fetch_array($cat_execq)){ ?>
                      <option value="<?=$cat_rowq['id_tc']?>">
                      <?=$cat_rowq['name']?>
                      </option>
                      <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Parks </div></td>
                    <td><label>
                    <input type="text" name="parks" id="parks" />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Days :</div></td>
                    <td><label>
                      <input type="text" name="days" id="days" />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Ages:</div></td>
                    <td><label>
                      <input type="text" name="ages" id="ages" />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Gate Price:</div></td>
                    <td><label>
                      <input type="text" name="gate" id="gate" />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Our Price: </div></td>
                    <td><label>
                      <input type="text" name="our" id="our" />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="style3"><div align="center">Available:</div></td>
                    <td><label>
                      <input name="status" type="checkbox" id="status" value="1" />
                    </label></td>
                  </tr>

                  <tr>
                    <td class="style3"><div align="center">Conditions:</div></td>
                    <td><label>
                      <textarea name="conditions" id="conditions" cols="25" rows="5"></textarea>
                    </label></td>
                  </tr>
                </table>
                <br />
                <p>
                  <label>
                  <div align="center">
                    <div align="center">
                      <input type="submit" name="enviar" id="enviar" value="Continue" />
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
