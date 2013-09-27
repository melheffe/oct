<?php 
// +----------------------------------------------------------------------
// | PHP Source                                                           
// +----------------------------------------------------------------------
// | Web-Dveloper (C) 2005 by  <7SETH>
// +----------------------------------------------------------------------
// |
// | Created by: Julio Calvo | jccalvo@gmail.com
// +----------------------------------------------------------------------
//valido entrada al sistema...
//ob_end_clean ();
//session_start();
session_start();
if(!isset($_SESSION['Id_customer'])){ 	
	header("Location: login_customer.php");
}
?>
