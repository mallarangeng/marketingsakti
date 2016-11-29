<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$devloper = new Devloper();

$data = $devloper->bacaDevloper2($_GET['id_dev']);

$dataDev =array
(
	'tipe'=>$data['type_perumahan'],
	'luas'=>$data['tot_luas_lahan']
);
echo json_encode($dataDev);

?>