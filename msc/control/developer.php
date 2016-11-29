<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$devloper = new devloper();
$id_dev=kdauto2('ms_devloper');
if($_GET['aksi']=='tambah'){
	$cek_id = $devloper->cek_idd($_GET['id_dev']);
	if($cek_id){
    $devloper->updateDevloper($_GET['id_dev'],$_GET['nm_dev'],$_GET['nm_proyek'],$_GET['alamat_proyek'],$_GET['no_telpon'],$_GET['kat_proyek'],$_GET['tot_luas_lahan'],$_GET['type_perumahan'],$_GET['izin_lokasi'],$_GET['imb'],$_GET['sert_induk'],$_GET['pbb'],$_GET['input_on'],$_GET['input_by'],$_GET['edit_on'],$_GET['edit_by'],$_GET['del_by'],$_GET['del_on'],$_GET['del']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil Diubah ";
	echo "</div>";
	}
		else
	{
	$devloper->addDevloper($id_dev,$_GET['nm_dev'],$_GET['nm_proyek'],$_GET['alamat_proyek'],$_GET['no_telpon'],$_GET['kat_proyek'],$_GET['tot_luas_lahan'],$_GET['type_perumahan'],$_GET['izin_lokasi'],$_GET['imb'],$_GET['sert_induk'],$_GET['pbb'],$_GET['input_on'],$_GET['input_by'],$_GET['edit_on'],$_GET['edit_by'],$_GET['del_by'],$_GET['del_on'],$_GET['del']);
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo "Berhasil disimpan ";
	echo "</div>";
}
}
?>