<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$konsumen = new konsumen();

if($_GET['aksi']=='tambah'){
	
	$tgl_lahir=$_GET['thn'].'-'.$_GET['bln'].'-'.$_GET['tgl'];
	$konsumen->tambahKonsumen($_GET['id_konsumen'],$_GET['nama'],$tgl_lahir,$_GET['jenis_kel'],$_GET['alamat'],$_GET['hp'],$_GET['email'],$_GET['ket'],$_GET['ktp'],$_GET['ft'],$_GET['kk'],$_GET['s_nikah'],$_GET['skbmr'],$_GET['npwp'],$_GET['spt'],$_GET['rek_listrik'],$_GET['sk_skdu'],$_GET['siup'],$_GET['f_btn'],$_GET['f1'],$_GET['f4'],$_GET['a1'],$_GET['e1'],$_GET['e2'],$_GET['sp_listrik'],$_GET['input_on'],$_GET['input_by'],$_GET['edit_on'],$_GET['edit_by'],$_GET['del_by'],$_GET['del_on'],$_GET['del']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil disimpan ";
	echo "</div>";
}
?>