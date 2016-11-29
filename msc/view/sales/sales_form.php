<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$sales = new sales();
$ids = $_POST['ids'];
//echo $ids;
$dataS	= $sales->bacaSales($ids);

	if ($dataS['id_sales']> 0) {
		$nama	= $dataS['nama'];
		$hp		= $dataS['hp'];
		$email	= $dataS['email'];
		$alamat	= $dataS['alamat'];
	}else{
		$nama	= '';
		$hp		= '';
		$email	= '';
		$alamat	= '';
	}
?>
<div class="panel-body">
    <form method="get" class="form-horizontal">
        <div class="form-group">
			<label class="col-sm-4 control-label">Nama</label>
            <div class="col-sm-6">
				<input type="text" placeholder="Nama" class="form-control input-sm" id="nama" value="<?php echo $nama ?>">
				<input type="hidden" placeholder="kode" class="form-control input-sm" id="id_sales" value="<?php echo $ids ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">HP</label>
            <div class="col-sm-6">
				<input type="text" placeholder="No Hp" class="form-control input-sm" id="hp" value="<?php echo $hp ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-6">
				<input type="text" placeholder="Email" class="form-control input-sm" id="email" value="<?php echo $email ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Alamat</label>
            <div class="col-sm-6">
				<input type="text" placeholder="Alamat" class="form-control input-sm" id="alamat" value="<?php echo $alamat ?>">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>