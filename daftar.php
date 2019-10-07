<?php
include "koneksi.php";
$nick=trim($_POST['nick']);
$email=trim($_POST['email']);
$pass=md5($_POST['pass']);
if ($nick == "" || $email == "" || $pass == ""){
	echo "no";
	exit();
}
$periksadulu=$koneksi->prepare("select * from user where nick=:nick || email=:email");
$periksadulu->BindParam(":nick",$nick);
$periksadulu->BindParam(":email",$email);
$periksadulu->execute();
//$cek=$periksadulu->fetch(PDO::FETCH_ASSOC);
if($periksadulu->rowCount()>=1){
	echo "ada";
}
else
{
	$daftarkan=$koneksi->prepare("insert into user (nick,email,pass) values (:nick,:email,:pass)");
	$daftarkan->BindParam(":nick",$nick);
	$daftarkan->BindParam(":email",$email);
	$daftarkan->BindParam(":pass",$pass);
	$daftarkan->execute();
	if($daftarkan->rowCount()==1)
	{
		$waktu=date("h:m:s");
		$online=$koneksi->prepare("insert into online (nick,waktu) values (:nick,:waktu)");
		$online->BindParam(":nick",$nick);
		$online->BindParam(":waktu",$waktu);
		$online->execute();
		$_SESSION['nick']=$nick;
		echo "yes";
	}
	else
	{
	echo "no";
	}
}


?>
