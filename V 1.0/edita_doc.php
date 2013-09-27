<?PHP include('conect.php');

@$id_doc=$_REQUEST['id_doc'];

$sql="SELECT * FROM docs WHERE id_doc=$id_doc";
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
        <form id="form1" name="form1" method="post" action="includes/doc_edita_inc.php?id_doc=<?=$id_doc?>">
        	<div align="center" class="style3">
              <p>&nbsp;</p>
            </div>
            <p align="center" class="norm">
              <?=$msj?>
              <br />
            </p>
            <table width="497" border="0" align="center">
              <tr>
                <td width="105" height="24" class="style3"><div align="center">Principal Picture
                    </label>                  
                  </div></td>
                <td width="382" height="24"><label>
                  <input name="doc_tit" type="text" id="doc_tit" value="<?php echo $busca['doc_tit'];?>" size="45" />
                </label></td>
              </tr>
              <tr>
                <td height="45" class="style3"><div align="center">Description:</div></td>
                <td height="45"><textarea name="doc_cont" id="doc_cont" cols="45" rows="5"><?php echo $busca['doc_cont'];?> </textarea></td>
              </tr>
              <tr>
                <td height="24" class="style3"><div align="center">Comments:</div></td>
                <td height="24"><label>
                  <input name="active" type="checkbox" id="active" value="1" <?php if (!(strcmp($busca['active'],"1"))) {echo "checked=\"checked\"";} ?> />
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
