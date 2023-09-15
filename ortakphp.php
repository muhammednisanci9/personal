<?php 
	include 'admin/adming/islem.php';
	include 'log.php';
	include 'function.php';


	$gelenip = $_SERVER['REMOTE_ADDR'];
	
	$engelipsor = $db->prepare("SELECT * FROM engelip where
		engelip_ip=:engelip_ip
		");
	$engelipsor->execute([
		'engelip_ip' => $gelenip
	]);
	$engelipcek = $engelipsor->fetch(PDO::FETCH_ASSOC);

	
	// $engellenenip = $engelipcek['engelip_ip'];


	// if($engellenenip==$gelenip){
	// 	Header("Location:https://www.google.com");
	// }

?>