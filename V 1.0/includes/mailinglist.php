<?php include ('../conect.php');
extract($_REQUEST);
@$email=$_REQUEST['email'];
$ip=$_SERVER['REMOTE_ADDR'];
$fecha=date('r');
$errores = array();

	$regex_email = '/^[a-z0-9_\.\-\~]{2,}@[a-z0-9_\.\-\~]{2,}.[a-z0-9]{2,3}$/';
	if (!preg_match($regex_email, $email)) {
		$errores['email'] = "E-mail es inválidos";
	}
	
	if (empty($email)) {
		$errores['email2'] = "email vacio";
	}

	if (empty($errores)) {
	$query = "INSERT INTO ml SET
	email = '$email',
	ip = '$ip',
	date = '$fecha'";
	mysql_query($query);
	header("Location: ../index.php?status=1");
	exit();
	}
	else {
	header("Location: ../index.php?status=2");
	exit();
	}
?>