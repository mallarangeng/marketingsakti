<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$pembayaran = new pembayaran();
$id_jenis=kdauto2('ms_pembayaran_jenis');
if($_GET['aksi']=='tambah'){
	$cek_id = $pembayaran->cek_idj($_GET['id_jenis']);
	if($cek_id){
	$pembayaran->updateJenisPembayaran($_GET['id_jenis'],$_GET['pembayaran_jenis'],$_GET['note']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo " Berhasil disimpan ";
	echo "</div>";
	}else{
	$pembayaran->tambahJenisPembayaran($id_jenis,$_GET['pembayaran_jenis'],$_GET['note']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo " Berhasil disimpan ";
	echo "</div>";
	}
}
?>