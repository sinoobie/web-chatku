<?php
echo '
<title>My History</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
';
include "koneksi.php";

// cek nickname di tabel online
$check=$koneksi->prepare("select nick from online");
$check->execute();
$sesme=$_SESSION['nick'];
$hasil=array();
while ($tam=$check->fetch()){
	array_push($hasil,$tam['nick']);
}

// cek pesan di tabel pesan
$check2=$koneksi->prepare("select pesan from pesan");
$check2->execute();
$hasil2=array();
while ($tam2=$check2->fetch()){
        array_push($hasil2,$tam2['pesan']);
}

if (!in_array($sesme,$hasil)){ //jika sesi tidak ada
	echo "<center style='color:red;'>Oops Anda belum <a href='/'> login</a> !</center>";
}else if(empty($hasil2)){ //jika pesan tidak ada
	echo "<center style='color:red;'> Tidak ada history chat</center>";
}else{ //jika tidak keduanya
	$story=$koneksi->prepare("select * from pesan");
	$story->execute();

	echo "<br>";
	while ($his=$story->fetch()){
		echo "<small>".$his['nick'].": ".$his['pesan']."</small>";
		echo "<br>";
		echo "<br>";
	}
}
?>
