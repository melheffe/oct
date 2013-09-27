<?php
$host="localhost";
$QQ="octcom_admin";//user
$p="123456";//password
$db=mysql_connect($host,$QQ,$p)
or die ("No pude conectarme a la base de datos");
mysql_select_db("octcom_tickets")
or die ("No puedo acceder a la base de datos del sistema");
?>