<?php require_once ('conect.php');
@$id_pds=$_REQUEST['id_pds'];
$qs="SELECT * FROM tk INNER JOIN tc ON tc.id_tc=tk.type_tk WHERE tk.cat_pds=$id_pds AND tk.kind=1 ORDER BY tc.name AND tk.nombre_tk ASC";
$qs_s=mysql_query($qs);?>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style4 {
	font-size: 11px;
	font-weight: bold;
}
-->
</style>
<table width="218" border="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="212" height="33" valign="middle" background="images/orange_tk_tab.jpg"><div align="center" class="norm">Ticket Options :</div></td>
  </tr>
  <tr>
    <td height="168" valign="top">
      <p>
        <?php 	while($fila=mysql_fetch_assoc($qs_s)){?></p>
      <form id="form1" name="form1" method="post" action="includes/add_to_temp.php?kind=1&id_tk=<?=$fila['id_tk']?>&id_pds=<?=$id_pds?>">
      <input name="ses_track" type="hidden" id="ses_track" value="<?=$ses_track?>" />
      <input name="type" type="hidden" id="type" value="<?=$fila['type_tk']?>" />
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" class="style3"><?=$fila['nombre_tk']?></td>
            <td width="37%" class="style3"><div align="center"><strong><?php echo $fila['days']; if ($fila['days']== 1){echo " day";} else {echo " days";} ?></strong></div></td>
          </tr>
          <tr>
            <td height="22" colspan="2" valign="middle" class="style3"><span class="norm"><strong>
              <?php $type=strtoupper($fila['name']);
			echo $type."  ";?>
            </strong></span></td>
            <td valign="middle"><div align="center"><span class="style3">Ages (<?=$fila['ages']?>)</span></div></td>
          </tr>
          <tr>
            <td width="31%" height="19" class="peque"><div align="center">At Gate</div></td>
            <td width="32%"><div align="center"><span class="peque">Our Price</span></div></td>
            <td class="tit_tk style4"><div align="center">YOU SAVE!</div></td>
          </tr>
          <tr>
            <td height="23" class="peque"><div align="center">$
              <?=$fila['gate']?>
            </div></td>
            <td class="style3"><div align="center">$
              <?=$fila['our']?>
            </div></td>
            <td class="orange"><div align="center">$
              <?php $save=$fila['gate']-$fila['our'];
			$save=number_format($save, 2, '.', '');
			echo $save;?>
            </div></td>
          </tr>
        </table>
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="43%" height="32"><img src="images/cc.jpg" alt="" width="86" height="29" /></td>
            <td width="23%" valign="middle"><select name="num" size="1" class="peque" id="num">
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select></td>
            <td width="34%"><input type="image" src="images/butt.jpg"
 value="About submit buttons"
 alt="[Submit]"
 name="submit"
 title=
"Checkout &gt;" />
            </td>
          </tr>
        </table>
      </form>
        <?php }?>
      </p>
      <p>&nbsp;</p>
      </td>
  </tr>
</table>
