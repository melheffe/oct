<?php require_once ('conect.php');
$qs="SELECT * FROM cart WHERE id_ses_track = '$ses_track'";
$qs_s=mysql_query($qs);?>
<link href="css.css" rel="stylesheet" type="text/css" />
<table width="160" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="161" height="28"><img src="images/orange_tk_tab2.jpg" width="216" height="31" /></td>
  </tr>
  <tr>
    <td height="34"> 
    
    <table width="206" border="0" align="center" cellpadding="0" cellspacing="0">
<?php 	while($fila=mysql_fetch_assoc($qs_s)){?>
      <tr>
        <td width="21" class="peque"><?php echo $fila['cantidad'];?></td>
        <td width="189" class="peque"><?php echo item_name($fila['type'], $fila['id_item']);?>
<?php 	if ($fila['h']==1){echo " - H";}
		if ($fila['w']==1){echo " - W";}
		if ($fila['e']==1){echo " - E";}?>        
        </td>
      </tr>
<?php }?>
    </table>
    
    </td>
  </tr>
  <tr>
  <td height="34"><a href="comprar.php"><img src="images/orange_tk_tab_bottom.jpg" width="216" height="31" border="0" /></a></td>
  </tr>
</table>

