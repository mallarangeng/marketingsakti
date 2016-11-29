<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$devloper = new Devloper();
?>
  <form method="get">
<div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label">ID Developer</label>
            <div class="col-sm-4">
            <input type="text"  id="id_dev" class="form-control input-sm" value="82<?php echo kdauto3('ms_devloper'); ?>" readonly>
            </div>
        </div><br>
        <div class="form-group">
			<label class="col-sm-4 control-label">Nama Devloper</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Nama Devloper" class="form-control input-sm" id="nm_dev">
            </div>
        </div><br>
		<div class="form-group">
			<label class="col-sm-4 control-label">Nama Proyek</label>
            <div class="col-sm-8">
				<input type="text" id="nm_proyek" placeholder="Nama Proyek" class="form-control input-sm" required>
            </div>
        </div><br>
		<div class="form-group">
			<label class="col-sm-4 control-label">Alamat Proyek</label>
            <div class="col-sm-8">
				<input type="text" id="alamat_proyek" placeholder="Alamat proyek" class="form-control input-sm" required>
            </div>
        </div><br>
		<div class="form-group">
			<label class="col-sm-4 control-label">Nomor Telpon</label>
            <div class="col-sm-8">
				<input type="text" id="no_telpon" placeholder="Nomor Telpon" class="form-control input-sm" required>
            </div>
        </div><br>
            <div class="form-group">
            <label class="col-sm-4 control-label">Kaletori Proyek</label>
            <div class="col-sm-8">
                <input type="text" id="kat_proyek" placeholder="Kategori Proyek" class="form-control input-sm" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">Luas Lahan (M)</label>
            <div class="col-sm-8">
               <input type="text" id="tot_luas_lahan" placeholder="Total Luas lahan" class="form-control input-sm" required>

            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">Type Perumahan</label>
            <div class="col-sm-8">
                <input type="text" id="type_perumahan" placeholder="Type Perumahan" class="form-control input-sm" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">Izin Lokasi</label>
            <div class="col-sm-8">
                <input type="text" id="izin_lokasi" placeholder="Izin Lokasi" class="form-control input-sm" required>
            </div>
        </div><br>
        
                <div class="form-group">
            <label class="col-sm-4 control-label">Nomor IMB</label>
            <div class="col-sm-8">
                <input type="text" id="imb" placeholder=" Nomor imb" class="form-control input-sm" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label"> Sertifikat Induk</label>
            <div class="col-sm-8">
                <input type="text" id="sert_induk" placeholder="Nomor Sertifikat induk" class="form-control input-sm" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">PBB</label>
            <div class="col-sm-8">
                <input type="text" id="pbb" placeholder="Nomor Pbb" class="form-control input-sm" required>
                <input type="hidden"  id="input_on" value="<?php echo tglSkrg();?>">
                <input type="hidden" id="input_by" value="<?php echo $_SESSION['username'];?>">
                 <input type="hidden" id="edit_on" value="">
                 <input type="hidden" id="edit_by" value="">
                 <input type="hidden" id="del_by" value="">
                 <input type="hidden" id="del_on" value="">
                 <input type="hidden" id="del" value="">
            </div>
        </div><br>
        </div>
    </form>
