<?php
include ('conect.php');
@$id_tk=$_REQUEST['id_tk'];
$qs="SELECT * FROM tk_combo_items INNER JOIN pds ON tk_combo_items.id_pds=pds.id_pds WHERE id_tk = $id_tk";
$qs_s=mysql_query($qs);
?>
<link href="css.css" rel="stylesheet" type="text/css" />
<table width="291" border="0" cellspacing="0" cellpadding="0">
  <tr>
<?php while($fila=mysql_fetch_assoc($qs_s)){?>  
    <td width="191" class="style3">- <?=$fila['nombre_pds']?></td>
    <td width="51" class="style3"><div align="center"><a href="borra_tk_combo.php?id_tk=<?=$id_tk?>&id_tk_combo_items=<?=$fila['id_tk_combo_items']?>">Remove</a></div></td>
</tr>
<?php }?>
</table>
<p>&nbsp;</p>
