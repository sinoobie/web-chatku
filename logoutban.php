<?php
include "koneksi.php";
if(isset($_SESSION['nick']))
{
$nick=$_SESSION['nick'];
$hapus=$koneksi->prepare("delete from online where nick=:nick");
$hapus->BindParam(":nick",$nick);
$hapus->execute();
unset($_SESSION['nick']);
if(isset($_COOKIE['nick']))
{
        setcookie("nick","",time()-3600);
}
session_destroy();
echo "<script> alert('Oops account suspended!\\nAkun anda sementara tidak bisa diakses');</script>";
echo "<script> window.location.href='index.php';</script>";
}
?>
