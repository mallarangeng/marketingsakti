<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$sales = new sales();
$id_sales=kdauto3('ms_sales');
$input_on = tglSkrg();
if($_GET['aksi']=='tambah'){
	$cek_id = $sales->cek_ids($_GET['id_sales']);
	if($cek_id){
		$sales->updateSales($_GET['id_sales'],$_GET['nama'],$_GET['hp'],$_GET['email'],$_GET['alamat']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo " Berhasil Di ubah ";
		echo "</div>";
	}else{
		$sales->tambahSales($id_sales,$_GET['nama'],$_GET['hp'],$_GET['email'],$_GET['alamat'],$input_on);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo " Berhasil disimpan ";
		echo "</div>";
	}
}
?>