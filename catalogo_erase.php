<?php require_once('conect.php');

// Variables de Configuración -----------------------------------
// Define el numero de Filas
$n_filas=5;

//***************************************************************
@$cat=$_REQUEST['id_pds'];
//$cat=6;

$fotos = array();
	$sql="SELECT * FROM galerias WHERE id_pds = $cat";
	$sql_exec=mysql_query($sql);
	/*while($row=mysql_fetch_assoc($sql_exec)){
			$tottal=mysql_affected_rows(); // Calculo el numero total de itms a listar
			}*/
$tottal=113;
// ------------------------------------------------------------------------------------------------------------------
$vert=$tottal/$n_filas;
$vert=round($vert);

?>
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<link href="stilalq.css" rel="stylesheet" type="text/css" />


<table width="450" height="107" border="0" align="center" cellpadding="0" cellspacing="5" class="letrasform2">
  <!--DWLayoutTable-->
  <tr>
    <td width="450" height="97"><table width="450" height="100" border="0" align="center" cellpadding="0" cellspacing="5">
        
        <?php
		$a=0;// Colocando el contador horizontal en 0
		$i=1;// Colocando el contador vertical en 0
		$w=0;//Colocando un contador para el mensaje de "No hay articulos en esta acategoria"
		
			while($row=mysql_fetch_assoc($sql_exec)){
			$w=w+1;
				if ($a==0){
				echo '<tr>';
				}
				$a=$a+1;
				$fotos[$i.'-'.$a] = $row['ruta'];
				
				echo "<td height='85' width='65'><div align='center'><a href='#' onclick=\"MM_openBrWindow('imagen.php?pic=".$row['ruta']."','imagen','width=400,height=300')\"><img src=".$row['ruta']." width='80' height='60'border='0'/></a> <br />
      <a href='borrapic.php?id_pic=".$row['id_pic']."&id_pds=".$cat."'>Eliminar</a></div>";
			
				$r=$a;// contador remanente para listar imagenes sin exceso
				
					if ($a >= $n_filas) {
					$a=0;// reiniciando el contador horizontal
					$i=$i+1;// aumentando el contador vertical
					echo '</tr>';
					} 
			if (empty($row)) {
		echo"<table width='0' border='0' align='center' cellpadding='0' cellspacing='0'>
		  <tr>
			<td width='492'><div align='center'>No hay fotos en esta galeria</div></td>
		  </tr>
		</table>
		";
		break 1;}
			
			}
			
		 echo '</td>';
		?>
        <?php /*if (empty($w)) {
		echo"<table width='0' border='0' align='center' cellpadding='0' cellspacing='0'>
		  <tr>
			<td width='492'><div align='center'>No hay articulos en esta categoria </div></td>
		  </tr>
		</table>
		";
		exit;}
		*/?>
    </table></td></tr>
</table>


