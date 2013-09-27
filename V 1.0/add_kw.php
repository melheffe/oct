<?php include ('conect.php');

if (isset($_POST['enviar'])){
	extract($_POST);
	//print_r($_POST);
	$errores = array();
	
$sql="SELECT * FROM kw ORDER BY keyword ASC";
$sql_exec=mysql_query($sql);
while($row=mysql_fetch_array($sql_exec)){
if ($keyword==$row['keyword']){
$errores['keyword'] = "Keyword already exist";}
}

if (empty($errores)) {
	$query = "INSERT INTO kw SET
	keyword = '$keyword'";

	mysql_query($query);
	$msj="Keyword creation completed!";
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
          <div align="center" class="orange">Add Keywords</div>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td height="400" valign="top"><!-- InstanceBeginEditable name="Editable" -->
          <form id="form1" name="form1" method="post" action="">
            <div align="center" class="style3">
              <p>Keywords to update the search engine</p>
            </div>
            <p align="center" class="norm">
              <?php if ( !empty($errores) ) {
		print "Following errors where found.<br />";
		foreach($errores as $e) {
			print "-" . $e . "<br>";
		}
		} 
		echo $msj?>
            </p>
            <p align="center" class="norm">&nbsp;</p>
            <p align="center" class="norm">&nbsp;</p>
            <p align="center" class="norm"><br />
            </p>
            <table width="228" border="0" align="center">
              <tr>
                <td width="54" height="24" class="style3"><div align="center">Keyword:</div></td>
                <td width="230"><label>
                  <input type="text" name="keyword" id="keyword" />
                </label></td>
              </tr>
              <tr>
                <td height="45" colspan="2"><label>
                    <div align="center">
                      <input type="submit" name="enviar" id="enviar" value="Submit" />
                    </div>
                  </label></td>
              </tr>
            </table>
            <p>&nbsp;</p>
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
