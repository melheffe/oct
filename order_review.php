<?php include('conect.php'); 
//include('includes/sesion.php');
include('includes/lib.php');
//print_r($_REQUEST);

$id_order=$_REQUEST['id_order'];
$total_orden=0;

$sql="SELECT * FROM orders WHERE id_order = $id_order";
$sql_exec=mysql_query($sql);
while($row=mysql_fetch_assoc($sql_exec)){

			$order_num = $row['order_num'];
			$total_orden = $row['amount'];
			$Id_customer = $row['Id_customer'];
			$id_payment = $row['id_payment'];
			$shipping = $row['ship_type'];
}
$sql="SELECT * FROM orders_items WHERE order_num = $order_num";
$sql_exec=mysql_query($sql);
while($rowq=mysql_fetch_assoc($sql_exec)){
$rubro=0;
//echo $id_payment;
//print_r($row);
	//if (empty($id_payment))
		 $id_item = $rowq['id_item'];
		 $type = $rowq['type'];
		 $cantidad = $rowq['cantidad'];
		 $id_cart = $rowq['id_cart'];
		 $h = $rowq['h'];
		 $w = $rowq['w'];
		 $e = $rowq['e'];
		 $kind = $rowq['kind'];
		
		$prize=get_price($rowq['id_item']);
		//echo $prize;
		if ($h!=0){$h=get_h_price($rowq['id_item']);}// busca el valor del hopper de ese ticket
		if ($w!=0){$h=get_w_price($rowq['id_item']);}// busca el valor del water parks
		if ($e!=0){$h=get_e_price($rowq['id_item']);}// busca el valor de no expiration
		
		$prize=$prize+$h+$w+$e;
		$rubro=$prize*$cantidad;
	
$total_orden=$total_orden+$rubro;

}


$sql="SELECT * FROM payment WHERE id_payment = $id_payment";
$sql_exec=mysql_query($sql);
while($row=mysql_fetch_assoc($sql_exec)){

			$status = $row['status'];
			$id_cc_info = $row['id_cc_info'];
			$type = $row['type'];// 1 es mail order ;  2 es CC
}
$typeop=$type;
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
			
			If ($typeop==2) {
			
			$sx="SELECT * FROM cc_info WHERE id_cc_info = $id_payment";
			$xsx=mysql_query($sx);
			while($rowx=mysql_fetch_assoc($xsx)){
			
				$c_name = $rowx['c_name'];
				$c_add = $rowx['c_add'];
				$c_city = $rowx['c_city'];
				$c_county = $rowx['c_county'];
				$c_country = $rowx['c_country'];
				$c_zip = $rowx['c_zip'];
				$c_phone = $rowx['c_phone'];


			}}
			
	
			
			
	include('emair.php');
			
			//header("Location: ../thanks.php");


?>