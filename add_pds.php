<?php include ('conect.php');
include('includes/sesion.php');

$sql_cat = "SELECT * FROM pg ORDER BY nombre_pg";
$cat_exec=mysql_query($sql_cat);

$sql_cat2 = "SELECT * FROM pg ORDER BY nombre_pg";
$cat_exec2=mysql_query($sql_cat2);

// Carpeta donde se subiran los archivos
$dir = 'files';
$direct = "/files";
// Puedes poner otra mas "larga" pero sin '/' al final
// Peso máximo del archivo. SE COLOCA EN BYTES
$mpeso = 500000;
// Extensión permitida del archivo.
$extf = "jpg";
//------------------------------

extract($_POST);
if (isset($_POST['enviar'])){
$errores = array();
	$_FILES['archivo']['name'] = str_replace(' ', '', $_FILES['archivo']['name']);			
			$name=$_FILES['archivo']['name'];
			$name=strtolower($name);
				if (substr($_FILES['archivo']['name'],-3,3) == $extf) {
					if ($_FILES['archivo']['size'] <= $mpeso) {
						if (move_uploaded_file($_FILES['archivo']['tmp_name'], $dir.'/princ-'.$name)) {
							$status = "1";
						}
					} else { $errores['imagen'] = "The size of the image is above the limit";}
				} else {$errores['imagen'] = "The fotmat of the image is invalid";}
		// El codigo de imagenes se maneja "ID - Nombre de imagen".
if (empty($name)) {
		$errores['imagen'] = "The image field is empty";
}
			$status=1;
			$desti=$dir.'/princ-'.$name;
if ($universal==1 || $disney==1) {
$errores['belong'] = "Same park cannot belong to Universal and Disney at same time";
}			
			
if (empty($pg)) {
		$errores['pg'] = "Select one principal group";
}

if (empty($pg2)) {
		$errores['pg2'] = "Select one principal group";
}

if (empty($description)) {
		$errores['description'] = "Select write down a description";
}

	
	//print_r($_POST);
if (empty($errores)) {		
	$query = "INSERT INTO pds SET
	nombre_pds = '$nombre_pds',
	cat_pds = '$pg',
	cat_pds2 = '$pg2',
	description = '$description',
	coments = '$comments',
	disney = '$disney',
	universal = '$universal',
	pic_pds = '$desti'";
			
	mysql_query($query);
	$msj="Park, Dinner or Show Creation Completed!!";
	}}

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
          <div align="center" class="orange">Add Parks, Dinners or Shows</div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        	<div align="center" class="style3">
              <p>Parks Dinners or Shows are contentive of the atractions.</p>
            </div>
            <p align="center" class="norm"><span class="letrasform2">
              <?php if ( !empty($errores) ) {
		print "The Folowing errors where found.<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
		} 
		echo $msj?>
            </span><br />
            </p>
            <table width="573" border="0" align="center">
              <tr>
                <td width="154" height="24" class="style3"><div align="center">Name:</div></td>
                <td width="409"><label>
                  <input type="text" name="nombre_pds" id="nombre_pds" />
                </label></td>
              </tr>
              <tr>
                <td height="24" class="style3"><div align="center">Principal Group:</div></td>
                <td height="24"><select name="pg" id="pg">
                  <option value="0" selected="selected">Select a Principal Group</option>
                  <?php while($cat_row=mysql_fetch_array($cat_exec)){ ?>
                  <option value="<?=$cat_row['Id_pg']?>">
                  <?=$cat_row['nombre_pg']?>
                  </option>
                  <?php } ?>
                </select></td>
              </tr>
              <tr>
                <td height="24" class="style3"><div align="center">Secondary Group:</div></td>
                <td height="24"><select name="pg2" id="pg2">
                  <option value="0" selected="selected">Select a Principal Group</option>
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
                <td height="24"><input type="file" name="archivo" class="enviainput" /></td>
              </tr>
              <tr>
                <td height="45" class="style3"><div align="center">Description:</div></td>
                <td height="45"><textarea name="description" id="description" cols="45" rows="5"></textarea></td>
              </tr>
              <tr>
                <td height="45" class="style3"><div align="center">Comments:</div></td>
                <td height="45"><label>
                  <textarea name="comments" id="comments" cols="45" rows="5"></textarea>
                </label></td>
              </tr>
              <tr>
                <td height="21" class="style3"><div align="center">Disney Group</div></td>
                <td height="21" class="style3"><label>
                  <input name="disney" type="checkbox" id="disney" value="1" />
                </label></td>
              </tr>
              <tr>
                <td height="21" class="style3"><div align="center">Universal Group</div></td>
                <td height="21" class="style3"><label>
                  <input name="universal" type="checkbox" id="universal" value="1" />
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
