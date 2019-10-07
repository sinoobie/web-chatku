<?php
try{
	$koneksi=new PDO('mysql:host=localhost;dbname=nge_chat','root','');
}catch(PDOException $e){
	echo "Koneksi Database gagal ".$e;
	exit;
}
session_start();
?>
