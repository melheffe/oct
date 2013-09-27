<?php 
		function status($type){
		if ($type==2){
		return "In Process";
		}
		if ($type==1){
		return "Pending";
		}
		if ($type==3){
		return "Completed";
		}
		if ($type==4){
		return "Cancelled";
		}
		if ($type==0){
		return "Unproceced";
		}

		}
		
		function kind($type){
		if ($type==2){
		return "Combo";
		}
		if ($type==1){
		return "Single";
		}
		if ($type==3){
		return "Disney";
		}
		if ($type==4){
		return "Univer";
		}
		
		}
		
		
		function get_type($type){
		
		$sql2="SELECT * FROM tc WHERE id_tc = $type ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$name = $row2['name'];
		}
		return "$name";
		}
		
		function email_exist($type){
		$pol=0;
		$sql2="SELECT * FROM customers WHERE email = '$type'";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$pol = $pol + 1;
		}
		if ($pol==0){
		return "OK";
		} else {
		return "NO";
		}
		
		}

		function item_name($type, $id_item){
		
		$sql2="SELECT * FROM tc WHERE id_tc = $type ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$name = $row2['name'];
		}
		
		$sql="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec=mysql_query($sql);
		while($row=mysql_fetch_assoc($sql_exec)){	
		$nombre_tk = $row['nombre_tk'];
		}
		return "$nombre_tk "." - "." $name";		
		
		};
		
		function tk_name($id_item){
		
		$sql="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec=mysql_query($sql);
		while($row=mysql_fetch_assoc($sql_exec)){	
		$nombre_tk = $row['nombre_tk'];
		}
		return "$nombre_tk";		
		};
		
		
		
		function lookintocart($type){
		
		$sql2="SELECT * FROM cart WHERE id_ses_track = '$type' ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$name = $row2['id_cart'];
		}
		return "$name";	
		}
		
		function findcombo($type){
		
		$sql2="SELECT * FROM tk_combo_items WHERE id_pds = $type ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$name = $row2['id_tk_combo_items'];
		}
		return "$name";	
		}
		
		function pdsname($type){
		
		$sql2="SELECT * FROM pds WHERE id_pds = $type ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$name = $row2['nombre_pds'];
		}
		return "$name";	
		}
		
		function get_price($id_item){
		
		$sql2="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['our'];
		}
		return "$price";	
		};
		
		function get_h_price($id_item){
		
		$sql2="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['h'];
		}
		return "$price";	
		};
		
		function get_w_price($id_item){
		
		$sql2="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['w'];
		}
		return "$price";	
		};
		
		function get_e_price($id_item){
		
		$sql2="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['e'];
		}
		return "$price";	
		};
		
		
		function get_days($id_item){
		
		$sql2="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['days'];
		}
		return "$price";	
		};


		function get_pds_from_tk($id_item){
		
		$sql2="SELECT * FROM tk WHERE id_tk = $id_item ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['cat_pds'];
		}
		$pds=pdsname($price);	
		return "$pds";
		};


		function generatePassword ($length = 6)
				{
				
				  // start with a blank password
				  $password = "";
				
				  // define possible characters
				  $possible = "0123456789bcdfghjkmnpqrstvwxyz"; 
					
				  // set up a counter
				  $i = 0; 
					
				  // add random characters to $password until $length is reached
				  while ($i < $length) { 
				
					// pick a random character from the possible ones
					$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
						
					// we don't want this character if it's already in the password
					if (!strstr($password, $char)) { 
					  $password .= $char;
					  $i++;
					}
				
				  }
				
				  // done!
				  return $password;
				
				}
				
		function ordernum ($length = 8)
				{
				
				  // start with a blank password
				  $password = "";
				
				  // define possible characters
				  $possible = "0123456789"; 
					
				  // set up a counter
				  $i = 0; 
					
				  // add random characters to $password until $length is reached
				  while ($i < $length) { 
				
					// pick a random character from the possible ones
					$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
						
					// we don't want this character if it's already in the password
					if (!strstr($password, $char)) { 
					  $password .= $char;
					  $i++;
					}
				
				  }
				  $date2=date('YndGis');
				  $password = $password."-".$date2;
				
				  // done!
				  return $password;
				
				}
				
		function tyckettype($type_tk){
		
		$sql2="SELECT * FROM tc WHERE Id_tc = $type_tk ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['name'];
		}
		return "$price";	
		};
		
		function customername($type){
		
		$sql2="SELECT * FROM customers WHERE Id_customer = $type ";
		$sql_exec2=mysql_query($sql2);
		while($row2=mysql_fetch_assoc($sql_exec2)){	
		$price = $row2['firstname']."  ".$row2['lastname'];
		}
		return "$price";	
		};

?>