<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$Konsumen = new konsumen();
?> 
<div class="panel-body">
    <form method="get" class="form-horizontal">

        <div class="form-group">
			<label class="col-sm-2 control-label">Nama Konsumen</label>
            <div class="col-sm-8">
				
                <input type="hidden" id="id_konsumen" value="<?php echo kdauto3('ms_konsumen'); ?>">
				
                <input type="text" placeholder="nama" class="form-control input-sm" id="nama">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Alamat" class="form-control input-sm" id="alamat">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Nomor HP</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Nomor hp" class="form-control input-sm" id="hp">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
				<input type="text" placeholder="Email" class="form-control input-sm" id="email">
            </div>
        </div>
        <div class="form-group">
			<label class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-4">
				<input type="text" placeholder="Keterangan" class="form-control input-sm" id="ket">
                <input type="hidden" value="<?php echo tglSkrg();?>"  id="input_on">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>