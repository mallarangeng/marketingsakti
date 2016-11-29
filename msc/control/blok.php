<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$blok = new blok();
$id_blok = kdauto2('ms_blok');
if($_GET['aksi']=='tambah'){
	$cek_idb	= $blok->cek_idb($_GET['id_blok']);
	if($cek_idb){
		//edit
		$blok->updateBlok($_GET['id_blok'],$_GET['id_dev'],$_GET['blok']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo " Blok ".$_GET['blok']." Berhasil diUbah ";
		echo "</div>";
	}else{
		//simpan
	
		$blok->tambahBlok($id_blok,$_GET['id_dev'],$_GET['blok']);
		echo "<div class='alert alert-success alert-dismissable'>";
		echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
		echo " Blok ".$_GET['blok']." Berhasil disimpan ";
		echo "</div>";
	}
}
?>