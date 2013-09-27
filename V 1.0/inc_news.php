<?php
include ('conect.php');

$qs="SELECT * FROM news ORDER BY mes DESC";
$qs_s=mysql_query($qs);
$fila=mysql_fetch_assoc($qs_s)
?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<table width="507" height="102" border="0" cellpadding="0" cellspacing="0" class="style1">
  <tr>
    <td width="343" height="18"><strong>
      <?=$fila['titulo']?>
    </strong></td>
    <td width="164"><?php echo $fila['dia']." / ".$fila['mes']." / ".$fila['anio']?></td>
  </tr>
  <tr>
    <td height="84" colspan="2" valign="top">      <?=$fila['body']?>    </td>
  </tr>
</table>
