<?php include ('conect.php');
include('includes/sesion.php');

if (isset($_POST['enviar'])){
extract($_POST);
$errores = array();

if (empty($errores)) {			
	$query = "INSERT INTO docs SET
	doc_tit = '$doc_tit',
	doc_cont = '$doc_cont',
	active = '$active'";
			
	mysql_query($query);
	$msj="Document Creation Completed!!";
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
        <td width="676" height="21"><!-- InstanceBeginEditable name="Titulo" -->
          <div align="center" class="gray_tits">Add Documents</div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <table width="600" height="162" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="18"><div align="center"><span class="letrasform2">
                <?php if ( !empty($errores) ) {
		print "The Folowing errors where found.<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
		} 
		echo $msj?>
              </span><br />
              <br />
              </div></td>
            </tr>
            <tr>
              <td><form id="form1" name="form1" method="post" action="">
                <table width="600" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="65" height="27" class="norm"><div align="center">Title</div></td>
                    <td width="535"><input name="doc_tit" type="text" id="doc_tit" size="60" /></td>
                  </tr>
                  <tr>
                    <td class="norm"><div align="center">Content</div></td>
                    <td><label>
                      <textarea name="doc_cont" id="doc_cont" cols="60" rows="25"></textarea>
                    </label></td>
                  </tr>
                  <tr>
                    <td class="norm">Active</td>
                    <td><label>
                      <input name="active" type="checkbox" id="active" value="1" />
                    </label></td>
                  </tr>
                  <tr>
                    <td class="norm">&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                            <p align="center">
                              <label>
                              <input type="submit" name="enviar" id="enviar" value="Submit" />
                              </label>
                            </p>
              </form>
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
