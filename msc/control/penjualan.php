<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$jual = new penjualan();
//$menuUser = new menuUser();
//$id_menu_user =kdauto2('ms_menu_user');
$input_on = tglSkrg();
if($_GET['aksi']=='tambah'){
	$jual->tambahPenjualan($_GET['id_pjl'],$_GET['id_kon'],$_GET['id_kav'],'$id_sta',$_GET['id_sal'],$_GET['harga_k'],$_GET['harga_j'],$_GET['total_k'],$_GET['tgl_booking'],$_GET['status_beli'],$_GET['input_by'],$input_on);
	//$menuUser->tambahMenuUser($id_menu_user,$_GET['id_menu'],$_GET['username'],'Y','Y');//khusus administrator otomatis tercreate user rolenya
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo " Berhasil disimpan ";
	echo "</div>";
}
?>