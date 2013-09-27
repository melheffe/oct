
<link href="css.css" rel="stylesheet" type="text/css" />
<table width="619" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="619"><img src="images/logo.png" alt="." width="130" height="81" /> <img src="images/oct.png" alt="." width="466" height="46" /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="norm">Order : <?=$order_num?></span></div></td>
  </tr>
  <tr>
    <td height="25"><span class="norm">Thanks for your order, <?php echo $firstname." ".$lastname;?>!</span></td>
  </tr>
  <tr>
    <td><span class="gray_tits">Want to manage your order online?</span><br />
      <span class="style3">If you need to check the status of your order or make changes, please visit our home page at <a href="http://www.orlandocheaptickets.com">Orlandocheaptickets.com</a> and click on Your Account at the top of any page.<br />
      <br />
    </span></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#336699"><span class="white_tits_order"><span class="style4">-</span> Purschasing Information : </span></td>
  </tr>
  <tr>
    <td><table width="596" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="306" valign="top"><span class="norm">Billing Address:<br />
        </span><span class="style3"><?php 	if ($typeop==1) {echo	$firstname." ".$lastname."<br />".
												$add_1."<br />".
												$town.",".$county."<br />".
												$country." ".$zip;}
						if ($typeop==2) {echo 	$c_name."<br />".
												$c_add."<br />".
												$c_city.", ".$c_county."<br />".
												$c_country." ".$c_zip;}?><br />
          </span></td>
        <td width="290" valign="top"><span class="norm">Shipping Address:</span><br />
          <span class="style3"><?php if ($shipping=="Y"){?><?=$c_name?><br />
<?=$c_add?><br />
<?=$c_city?>, <?=$c_county?> <?=$c_zip?><br />
<?=$c_country?>
		  <?php }else{echo "Pick up in Store";}?></span></td>
      </tr>
    </table>
    <br /></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#336699" class="white_tits_order"><span class="style4">-</span> Order Summary :</td>
  </tr>
  <tr>
    <td><br />
    <table width="604" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr class="style3">
          <td width="42" bgcolor="#7FB6DC"><div align="center"><strong>Items</strong></div></td>
          <td width="180" bgcolor="#7FB6DC"><div align="center"><strong>Ticket</strong></div></td>
          <td width="174" bgcolor="#7FB6DC"><div align="center"><strong>Park</strong></div></td>
          <td width="39" bgcolor="#7FB6DC"><div align="center"><strong>Days</strong></div></td>
          <td width="70" bgcolor="#7FB6DC"><div align="center"><strong>Type</strong></div></td>
          <td width="99" bgcolor="#7FB6DC"><div align="center"><strong>Amount ($)</strong></div></td>
        </tr>
        <?php
		$sqlx="SELECT * FROM orders_items WHERE order_num ='".$order_num."'";
		$sql_execx=mysql_query($sqlx);
		
		while($rowx=mysql_fetch_assoc($sql_execx)){?>
        <tr class="style3">
          <td height="20"><div align="center"><?=$rowx['cantidad']?></div></td>
          <td height="20"><div align="center"><?php echo tk_name($rowx['id_item']);
		  if ($rowx['h']!=0){echo " H ";}
		  if ($rowx['w']!=0){echo " W ";}
		  if ($rowx['e']!=0){echo " E ";}
		  
		  ?></div></td>
          <td height="20"><div align="center"><?php 
		  if ($rowx['kind']==1) {echo get_pds_from_tk($rowx['id_item']);}
		  if ($rowx['kind']==3) {echo "Disney Group Parks";}
		  if ($rowx['kind']==4) {echo "Universal Group Parks";}
		  if ($rowx['kind']==2) {
		  	$sql21="SELECT * FROM tk_combo_items WHERE id_tk =".$rowx['id_item'];
			$sql_exec21=mysql_query($sql21);
			while($row21=mysql_fetch_assoc($sql_exec21)){	
			echo "- ".pdsname($row21['id_pds'])."<br />";
			}
		  
		  }
		  // aqui hay que decir cuales parques son los que puede visitar con ese ticket?></div></td>
          <td height="20"><div align="center"><?=get_days($rowx['id_item'])?></div></td>
          <td height="20"><div align="center"><?=get_type($rowx['type'])?></div></td>
          <td height="20"><div align="center"><?php $prize=get_price($rowx['id_item']);
		//echo $prize;
		if ($rowx['h']!=0){$h=get_h_price($rowx['id_item']);}// busca el valor del hopper de ese ticket
		if ($rowx['w']!=0){$h=get_w_price($rowx['id_item']);}// busca el valor del water parks
		if ($rowx['e']!=0){$h=get_e_price($rowx['id_item']);}// busca el valor de no expiration
		
		$prize=$prize+$h+$w+$e;
		$rubro=$prize*$rowx['cantidad'];
		$rubro=number_format($rubro, 2, '.', '');
		echo "$ ".$rubro;?></div></td>
        </tr>
        <?php }?>
      </table>      
      <p class="style3">        Shipping Method: <?php if ($shipping==y){echo "Standard";} else {echo "Pick up in store";}?><br />
        ------<br />
    Total for this Order:  	<?php 
	$total_orden=number_format($total_orden, 2, '.', '');
	echo "$ ".$total_orden;
	?><br />
      <br />
      </p></td>
  </tr>
  <tr>
    <td height="25" bgcolor="#336699" class="white_tits_order"><span class="style4">-</span> Customer Service Information :</td>
  </tr>
  <tr>
    <td><blockquote>
      <p class="style3"><br />
        You can review the details and status of any order you have placed via Your Account. For orders that have already been shipped, you can confirm the date and method of shipment, view an estimated date of arrival, and get a tracking number, if applicable.</p>
      <p class="style3">Whenever you make a change to an order via Your Account, such as modifying the shipping options, address, or items, our system re-evaluates our inventory to determine the best fulfillment plan for your order given the new information. Therefore, any changes you make may affect the estimated delivery date for your order.<br />
        <br />
      </p>
    </blockquote></td>
  </tr>
  <tr>
    <td><p class="style3"><span class="norm">Please note:</span> This e-mail message was sent from a notification-only address that cannot accept incoming e-mail. Please do not reply to this message.</p>
    <p align="center" class="style3">Thanks again for shopping with us.</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center" class="style3">| <a href="index.php">Keep Shopping</a> | <a href="my_oct_menu.php">Manage My OCT</a> | </div></td>
  </tr>
</table>
