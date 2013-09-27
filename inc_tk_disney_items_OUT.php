
<table width="291" border="0" cellspacing="0" cellpadding="0">
<tr>
<?php
require_once ('conect.php');
@$id_tk=$_REQUEST['id_tk'];
$qs="SELECT * FROM pds";
$qs_s=mysql_query($qs);
while($fila=mysql_fetch_assoc($qs_s)){

$qsa="SELECT * FROM tk_disney_items WHERE id_tk = $id_tk";
$qs_sa=mysql_query($qsa);
$check=0;	
	while($filaz=mysql_fetch_assoc($qs_sa)){
		if ($fila['id_pds']==$filaz['id_pds']){
		$check=1;
		}
	}	
if ($check==0){?>
<td width="191" class="style3">- <?=$fila['nombre_pds']?></td>
    <td width="51" class="style3"><div align="center"><a href="add_parks_to_disney.php?id_tk=<?=$id_tk?>&id_pds=<?=$fila['id_pds']?>">Add</a></div></td>
</tr>
<?php }}?>
</table>	
		






