<?php require_once ('conect.php');
@$id_pds=$_REQUEST['id_pds'];

			$sqlt="SELECT * FROM pds WHERE id_pds=$id_pds";
			$sql_exect=mysql_query($sqlt);
			while($rowt=mysql_fetch_assoc($sql_exect)){
				$pic = $rowt['pic_pds'];
				$nombre = $rowt['nombre_pds'];
			}

//----------------------------------------------------- image procesor
$hor=450;// define el acho de la imagen 
$ver=450;// define el alto de la imagen 

$rel_graph=$hor/$ver;
$rel_graph_inv=$ver/$hor;

$blah = getimagesize($pic);
$type = $blah['mime'];
$ancho = $blah[0];
$alto = $blah[1];
$relacion = $ancho/$alto;
$relacion_inv = $alto/$ancho;


if ($relacion > 1){// si es mas ancha que alta
	if ($ancho > $hor){
	$ancho=$hor;
	$alto=$ancho*$relacion_inv;
	} else {
	$ancho=$ancho;
	$alto=$ancho*$relacion_inv;
	}
}
if ($relacion < 1){// si es mas alta que ancha
	if ($alto > $ver){
	
	$alto=$ver;
	$ancho=$alto*$relacion;
	} else {
	$alto=$alto;
	$ancho=$alto*$relacion;
	}

}
if ($relacion == 1){// esta es cuadrada

}

//------------------------
			

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
			
if (empty($errores)) {
			$query = "UPDATE pds SET
			pic_pds = '$desti' WHERE id_pds=$id_pds";
			
			mysql_query($query);
		
			header("Location: act_img_princ.php?id_pds=$id_pds");
			exit();	

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
<!-- InstanceBeginEditable name="head" -->


<link href="stilalq.css" rel="stylesheet" type="text/css" />
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
          <div align="center" class="norm"><?=$nombre?></div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
<table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="475" height="326"><br />
    <table width="455" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
          <td width="455"><div align="center"><span class="letrasform2">
            <?php if ( !empty($errores) ) {
		print "The Folowing errors where found.<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
		} 
		echo $msj?>
          </span></div></td>
        </tr>
      </table>
    <br />
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="0" class="letrasform">
      <tr>
        <td width="400"><div align="center"><img src="<?=$pic?>" width="<?=$ancho?>" height="<?=$alto?>" /></div></td>
      </tr>
    </table>
    <br />
    <table width="423" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="327"></td>
        </tr>
      </table>
        <br />
      <table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="461"><form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
            <p>
              <input name="id_pds" type="hidden" id="x" value="<?=$id_pds?>" />
            </p>
              <table width="376" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="116" class="letrasform2">Agregar Foto </td>
                  <td width="260"><input type="file" name="archivo" class="enviainput" /></td>
                </tr>
              </table>
                      <p align="center">
                        <label>
                          <input name="enviar" type="submit" id="enviar" value="enviar" />
                        </label>
              </p>
            </form>
          </td>
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
