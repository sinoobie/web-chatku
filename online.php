<?php
include "koneksi.php";
$ambil=$koneksi->prepare("select * from online order by id desc");
$ambil->execute();
while($list=$ambil->fetch())
{
	echo "<i class='icon-user'></i><span class='label label-info'>".$list['nick']."</span><span class='label'>".substr($list['waktu'],0,5)."</span><br>";
}
sleep(0.5);
$check=$koneksi->prepare("select nick from online");
$check->execute();
$hasil=$check->fetch();
if (empty($hasil)){
	include "logout.php";
	echo "<script> alert('Restart server! Silahkan login ulang :)');window.location.href='index.php';</script>";
	exit();
}

//ban list
$arrban=array("hantu","qadligans","adligans");
$nickmu=$_SESSION['nick'];
if (in_array($nickmu,$arrban)){
	include "logoutban.php";
}
?>
