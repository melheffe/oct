<?php include ('conect.php');
include('includes/sesion.php');
$sql_cat = "SELECT * FROM pds ORDER BY nombre_pds";
$cat_exec=mysql_query($sql_cat);

// Carpeta donde se subiran los archivos
$dir = 'files';
$direct = "/files";
// Puedes poner otra mas "larga" pero sin '/' al final
// Peso máximo del archivo. SE COLOCA EN BYTES
$mpeso = 5000000;
// Extensión permitida del archivo.
$extf = "jpg";
//------------------------------
if (isset($_POST['enviar'])){
extract($_POST);
$errores = array();
	$_FILES['archivo']['name'] = str_replace(' ', '', $_FILES['archivo']['name']);			
			$name=$_FILES['archivo']['name'];
			$name=strtolower($name);
				if (substr($_FILES['archivo']['name'],-3,3) == $extf) {
					if ($_FILES['archivo']['size'] <= $mpeso) {
						if (move_uploaded_file($_FILES['archivo']['tmp_name'], $dir.'/ce-'.$name)) {
							$status = "1";
						}
					} else { $errores['imagen'] = "The size of the image is above the limit";}
				} else {$errores['imagen'] = "The fotmat of the image is invalid";}
		// El codigo de imagenes se maneja "ID - Nombre de imagen".
		if (empty($name)) {
		$errores['imagen'] = "The image field is empty";
		}
			$status=1;
			$desti=$dir.'/ce-'.$name;
			
			if (empty($activo)){
			$activo=2;
			}
//print_r($_POST);						
					if (empty($errores)) {	
						$query="INSERT INTO ce SET
						cat_pds = '$cat_pds',
						foto = '$desti',
						activo = '$activo',
						contenido = '$contenido',
						titulo = '$titulo'";	
						mysql_query($query);
						
						
						
						$msj="Customer's Experience creation Completed!!";
	}}		
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
        <td width="676" height="21"><!-- InstanceBeginEditable name="Titulo" --><!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" --><br />
            <p align="center" class="norm"><strong>Add Customer Experiences </strong></p>
            <p align="center" class="norm"><span class="sobreblancopeq">
              <?=$msj?>
            </span></p>
            <table width="484" border="0" align="center" cellpadding="0" cellspacing="0" class="style1">
  <tr>
    <td width="484"><form action="<?=$PHP_SELF?>" method="post" enctype="multipart/form-data">
      <table width="433" border="0" align="center" cellpadding="4" cellspacing="0" class="text">
        <tr>
          <td width="147" class="style3"><div align="center" class="style1">Picture:</div></td>
          <td width="270">
              <div align="left">
                <input type="file" name="archivo" class="enviainput" />
                  </div></td>
        </tr>
        <tr>
          <td height="30" class="style3"><div align="center">Park Dinner or Show</div></td>
          <td><select name="cat_pds" id="cat_pds">
              <option value="0" selected="selected">Select a Park, Dinner or Show</option>
              <?php while($cat_row=mysql_fetch_array($cat_exec)){ ?>
              <option value="<?=$cat_row['id_pds']?>">
              <?=$cat_row['nombre_pds']?>
              </option>
              <?php } ?>
          </select></td>
        </tr>
        <tr>
          <td class="style3"><div align="center">Family name</div></td>
          <td><label>
            <input name="titulo" type="text" id="titulo" />              </label></td>
        </tr>
        <tr>
          <td class="style3"><div align="center">Experience:</div></td>
          <td><label>
            <textarea name="contenido" cols="35" rows="5" id="contenido"></textarea>          </label></td>
        </tr>
        <tr>
          <td class="style3"><div align="center">Available:</div></td>
          <td><label>
            <input name="activo" type="checkbox" id="activo" value="1" />              </label></td>
        </tr>
      </table>
      <br />
      <table width="247" border="0" align="center" cellpadding="4" cellspacing="0" class="text">
        <tr>
          <td width="239" colspan="2"><div align="center">
              <input name="enviar" type="submit" class="forminput" id="enviar" value="Submit" />
          </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p align="center" class="sobreblancopeq">&nbsp;</p>
    </form></td>
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
