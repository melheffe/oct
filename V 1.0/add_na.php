<?php include ('conect.php');
include('includes/sesion.php');
// Carpeta donde se subiran los archivos
$dir = 'files';
$direct = "/files";
// Puedes poner otra mas "larga" pero sin '/' al final
// Peso máximo del archivo. SE COLOCA EN BYTES
$mpeso = 50;
// Extensión permitida del archivo.
$extf = "jpg";
//------------------------------
	if (isset($_POST['subir'])) {
			extract($_POST);
			//print_r($_POST);
			$name=$_FILES['archivo']['name'];
			
				if (substr($_FILES['archivo']['name'],-3,3) == $extf) {
					if ($_FILES['archivo']['size'] <= $mpeso) {
						if (move_uploaded_file($_FILES['archivo']['tmp_name'], $dir.'/'.$_FILES['archivo']['name'])) {
							$status = "1";
						}
					} else { $status = "2"; }
				}
			$status=1;
			$desti=$dir.'/'.$name;
			
			if (empty($activo)){
			$activo=2;
			}
						$query="INSERT INTO na SET
						foto = '$desti',
						activo = '$activo',
						contenido = '$contenido',
						titulo = '$titulo'";	
						mysql_query($query);
						
						
						$msj="Su registro ha sido agregado con éxito";
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
        <td width="676" height="21"><!-- InstanceBeginEditable name="Titulo" --><!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <p align="center" class="titulos"><strong>                      M&oacute;dulo - Agregar consejos </strong></p>
                  <table width="433" border="0" align="center" cellpadding="0" cellspacing="0" class="style1">
  <tr>
    <td width="433"><form action="<?=$PHP_SELF?>" method="post" enctype="multipart/form-data">
      <p align="center" class="sobreblancopeq">&nbsp;</p>
      <table width="395" height="238" border="0" align="center" cellpadding="4" cellspacing="0" class="text">
        <tr>
          <td width="111" class="general"><div align="center" class="style1">Foto:</div></td>
          <td width="268">
              <div align="left">
                <input type="file" name="archivo" class="enviainput" />
                  </div></td>
        </tr>
        <tr>
          <td class="general"><div align="center">Titulo:</div></td>
          <td><label>
            <div align="left">
              <input name="titulo" type="text" id="titulo" />
              </div>
          </label></td>
        </tr>
        <tr>
          <td class="general"><div align="center">Contenido:</div></td>
          <td><label>
          <div align="left">
            <textarea name="contenido" cols="35" rows="5" id="contenido"></textarea>
          </div>
          </label></td>
        </tr>
        <tr>
          <td class="general"><div align="center">Publicar:</div></td>
          <td><label>
            <div align="left">
              <input name="activo" type="checkbox" id="activo" value="1" />              
              </label>            
            </div></td>
        </tr>
      </table>
      <table width="247" border="0" align="center" cellpadding="4" cellspacing="0" class="text">
        <tr>
          <td width="239" colspan="2"><div align="center">
              <input type="submit" name="subir" value="Procesar" class="forminput" />
          </div></td>
        </tr>
      </table>
      <p align="center"><span class="sobreblancopeq">
        <?=$msj?>
      </span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
