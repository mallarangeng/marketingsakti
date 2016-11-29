<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$menu = new menu();
$menuUser = new menuUser();
$id_menu_user =kdauto2('ms_menu_user');

if($_GET['aksi']=='tambah'){
	$menu->tambahMenu($_GET['id_menu'],$_GET['judul'],$_GET['folder'],$_GET['link'],$_GET['parent'],$_GET['icon'],$_GET['urut']);
	$menuUser->tambahMenuUser($id_menu_user,$_GET['id_menu'],$_GET['username'],'Y','Y');//khusus administrator otomatis tercreate user rolenya
	echo "<div class='alert alert-success alert-dismissable'>";
	echo "<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>";
	echo " Berhasil disimpan ";
	echo "</div>";
}
?>