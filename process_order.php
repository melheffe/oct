<?php include('conect.php'); 
include('includes/sesion_customer.php');
include('includes/lib.php');
//print_r($_REQUEST);

@$id_payment=$_REQUEST['id_payment'];
@$shipping=$_REQUEST['shipping'];
$Id_customer=$_SESSION['Id_customer'];
$id_ses_track=$_SESSION['id_ses_track'];
$date=date('Y-n-d G:i:s');
$order_num = ordernum();
$total_orden=0;
// validar para que no aparezcan varias ordenes vacias -------------------------

echo $carrito=lookintocart($id_ses_track);
									
/* if (empty($carrito)){
header("Location: index.php");
}else{  */


//------------------------------------------------------------------------------



$sql="SELECT * FROM cart WHERE id_ses_track ='".$_SESSION['ses_track']."'";
$sql_exec=mysql_query($sql);
while($row=mysql_fetch_assoc($sql_exec)){
$rubro=0;
//echo $id_payment;
//print_r($row);
	//if (empty($id_payment))
		 $id_item = $row['id_item'];
		 $type = $row['type'];
		 $cantidad = $row['cantidad'];
		 $id_cart = $row['id_cart'];
		 $h = $row['h'];
		 $w = $row['w'];
		 $e = $row['e'];
		 $kind = $row['kind'];
		
		$prize=get_price($row['id_item']);
		//echo $prize;
		if ($h!=0){$h=get_h_price($row['id_item']);}// busca el valor del hopper de ese ticket
		if ($w!=0){$h=get_w_price($row['id_item']);}// busca el valor del water parks
		if ($e!=0){$h=get_e_price($row['id_item']);}// busca el valor de no expiration
		
		$prize=$prize+$h+$w+$e;
		$rubro=$prize*$cantidad;
			
		$querya = "INSERT INTO orders_items SET
			
			order_num = '$order_num',
			id_item = '$id_item',
			type = '$type',
			Id_customer = '$Id_customer',
			h = '$h',
			w = '$w',
			e = '$e',
			kind = '$kind',
			cantidad = '$cantidad'";
					
			mysql_query($querya);
		
		$qq = "DELETE FROM cart WHERE id_cart = $id_cart";
		mysql_query($qq); 
	
$total_orden=$total_orden+$rubro;

}
			$query = "INSERT INTO orders SET
			
			Id_customer = '$Id_customer',
			id_payment = '$id_payment',
			ship_type = '$shipping',
			date = '$date',
			amount = '$total_orden',
			status = '0',
			order_num = '$order_num'";
					
			mysql_query($query);
			
//-- INICIO RECOPILACION DE DATOS FINALES PARA LA PUBLICACIOND 
//-- DE LA FACTURA Y EL ENVIO DEL EMAIL
		
			$az="SELECT * FROM customers WHERE Id_customer = $Id_customer";
			$zaz=mysql_query($az);
			while($rowz=mysql_fetch_assoc($zaz)){
			
				$firstname = $rowz['firstname'];
				$lastname = $rowz['lastname'];
				$add_1 = $rowz['add_1'];
				$town = $rowz['town'];
				$county = $rowz['county'];
				$postcode = $rowz['postcode'];
				$country = $rowz['country'];
				$email = $rowz['email'];
				$phone = $rowz['phone'];

			}
			
			
			$sqlz="SELECT * FROM payment WHERE id_payment = $id_payment";
			$sql_execz=mysql_query($sqlz);
			while($rowz=mysql_fetch_assoc($sql_execz)){

			$status = $rowz['status'];
			$id_cc_info = $rowz['id_cc_info'];
			$typez = $rowz['type'];// 1 es mail order ;  2 es CC
			}
			$typeop=$typez;
			
			$sx="SELECT * FROM cc_info WHERE id_cc_info = $id_cc_info";
			$xsx=mysql_query($sx);
			while($rowx=mysql_fetch_assoc($xsx)){
			
				$c_name = $rowx['c_name'];
				$c_add = $rowx['c_add'];
				$c_city = $rowx['c_city'];
				$c_county = $rowx['c_county'];
				$c_country = $rowx['c_country'];
				$c_zip = $rowx['c_zip'];
				$c_phone = $rowx['c_phone'];


			}
			
			
	include('emair.php');
	
	//}// END VALIDACION PARA QUE NO SE CREEN ORDENES VACIAS..
			
		//	header("Location: ../thanks.php");


?>