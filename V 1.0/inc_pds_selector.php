<?php
include ('conect.php');
$qs="SELECT * FROM pg ORDER BY rank DESC";
$qs_s=mysql_query($qs);
?>
<link href="css.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><td width="799" height="25" valign="top">
    <table border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
<?php $cou=0;
	while($fila=mysql_fetch_assoc($qs_s)){?>      
    <td width="159" height="24" valign="middle" class="style3"><div align="center">
      <a href="lista_tk.php?id_pg=<?=$fila['Id_pg']?>">
      <?=$fila['nombre_pg']?>
      </a></div></td>  
<?php $cou=$cou+1;
if ($cou==7){break 1;} 
			}?>        
    </tr></table>
 </td></tr></table>
