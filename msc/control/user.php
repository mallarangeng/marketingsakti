<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$user = new user();
#ngetik sambil berdiri cobain meja baru :P ngetik diatas kulkas :29-09-15 
if($_GET['aksi']=='tambah'){
	$password = md5($password);
	$user->tambahUser($_GET['username'],$_GET['id_jabatan'],$password,$_GET['email'],$_GET['fullname'],$_GET['blokir'],$picture=$_FILES['picture']['name']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo " Berhasil disimpan ";
	echo "</div>";
}
?>