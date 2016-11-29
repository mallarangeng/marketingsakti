<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$pembayaran = new pembayaran();
$id_pembayaran=kdauto3('ms_pembayaran');
$input_on = tglSkrg();
#$input_by = userSes();
if($_GET['aksi']=='tambah'){
	$cek_id = $pembayaran->cek_idpem($_GET['id_pembayaran']);
	if($cek_id){
	$pembayaran->updatePembayaran($_GET['id_pembayaran'],$_GET['id_penjualan'],$_GET['tgl_bayar'],$_GET['tgl_tempo'],$_GET['id_jenis'],$_GET['pembayaran_ke'],$_GET['jumlah_pembayaran'],$_GET['telat'],$_GET['denda'],$_GET['ket_pembayaran'],$_GET['edit_on'],$_GET['edit_by'],$_GET['del_by'],$_GET['del_on'],$_GET['del']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo " Berhasil diubah ";
	echo "</div>";
}
else {
	$pembayaran->tambahPembayaran($id_pembayaran,$_GET['id_penjualan'],$_GET['tgl_bayar'],$_GET['tgl_tempo'],$_GET['id_jenis'],$_GET['pembayaran_ke'],$_GET['jumlah_pembayaran'],$_GET['telat'],$_GET['denda'],$_GET['ket_pembayaran'],$input_on,$_GET['input_by']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo " Berhasil disimpan ";
	echo "</div>";
}
}
?>