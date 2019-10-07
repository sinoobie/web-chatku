<?php
include "koneksi.php";
$nick=$_SESSION['nick'];
$pesan=strip_tags($_POST['pesan']);
$waktu=date("h:m:s");
$masukan=$koneksi->prepare("insert into pesan (nick,pesan,waktu) values (:nick,:pesan,:waktu) ");
$masukan->BindParam(":nick",$nick);
$masukan->BindParam(":pesan",$pesan);
$masukan->BindParam(":waktu",$waktu);
$masukan->execute();
$cek=$masukan->fetch();
if(!empty($cek)){
	print "terkirim";
}else{
	print "gagal";
}
?>
