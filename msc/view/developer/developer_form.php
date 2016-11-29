<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$devloper = new Devloper();
$idd    = $_POST['idd'];
$datad  = $devloper->bacaDevloper($idd);
    if($datad['id_dev']> 0){
        $nm_dev   = $datad['nm_dev'];
        $nm_proyek   = $datad['nm_proyek'];
        $alamat_proyek=$datad['alamat_proyek'];
        $no_telpon=$datad['no_telpon'];
        $kat_proyek=$datad['kat_proyek'];
        $tot_luas_lahan=$datad['tot_luas_lahan'];
        $type_perumahan=$datad['type_perumahan'];
        $izin_lokasi=$datad['izin_lokasi'];
        $imb=$datad['imb'];
        $sert_induk=$datad['sert_induk'];
        $pbb=$datad['pbb'];
        $input_on=$datad['input_on'];
        $input_by=$datad['input_by'];
        $edit_on=$datad['edit_on'];
        $edit_by=$datad['edit_by'];
        $del_by=$datad['del_by'];
        $del_on=$datad['del_on'];
        $del=$datad['del'];
    }else{
        $id_dev   = '';
        $nm_dev   = '';
        $nm_proyek   = '';
        $alamat_proyek= '';
        $no_telpon='';
        $kat_proyek='';
        $tot_luas_lahan='';
        $type_perumahan='';
        $izin_lokasi='';
        $imb='';
        $sert_induk='';
        $pbb='';
        $input_on='';
        $input_by='';
        $edit_on='';
        $edit_by='';
        $del_by='';
        $del_on='';
        $del='';
    }
?>
  <form method="get">
<div class="panel-body">
        <div class="form-group">
			<label class="col-sm-4 control-label">Nama Devloper</label>
            <div class="col-sm-8">
                 <input type="hidden"  id="id_dev" class="form-control input-sm" value="<?php echo $idd; ?>" readonly>
				<input type="text" placeholder="Nama Devloper" class="form-control input-sm" id="nm_dev" value="<?php echo $nm_dev; ?>">
            </div>
        </div><br>
		<div class="form-group">
			<label class="col-sm-4 control-label">Nama Proyek</label>
            <div class="col-sm-8">
				<input type="text" id="nm_proyek" placeholder="Nama Proyek" class="form-control input-sm" value="<?php echo $nm_proyek; ?>" required>
            </div>
        </div><br>
		<div class="form-group">
			<label class="col-sm-4 control-label">Alamat Proyek</label>
            <div class="col-sm-8">
				<input type="text" id="alamat_proyek" placeholder="Alamat proyek" class="form-control input-sm" value="<?php echo $alamat_proyek; ?>" required>
            </div>
        </div><br>
		<div class="form-group">
			<label class="col-sm-4 control-label">Nomor Telpon</label>
            <div class="col-sm-8">
				<input type="text" id="no_telpon" placeholder="Nomor Telpon" class="form-control input-sm" value="<?php echo $no_telpon; ?>" required>
            </div>
        </div><br>
            <div class="form-group">
            <label class="col-sm-4 control-label">Kaletori Proyek</label>
            <div class="col-sm-8">
                <input type="text" id="kat_proyek" placeholder="Kategori Proyek" class="form-control input-sm" value="<?php echo $kat_proyek; ?>" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">Luas Lahan (M)</label>
            <div class="col-sm-8">
               <input type="text" id="tot_luas_lahan" placeholder="Total Luas lahan" class="form-control input-sm" value="<?php echo $tot_luas_lahan; ?>" required>

            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">Type Perumahan</label>
            <div class="col-sm-8">
                <input type="text" id="type_perumahan" placeholder="Type Perumahan" class="form-control input-sm" value="<?php echo $type_perumahan; ?>" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">Izin Lokasi</label>
            <div class="col-sm-8">
                <input type="text" id="izin_lokasi" placeholder="Izin Lokasi" class="form-control input-sm" value="<?php echo $izin_lokasi; ?>" required>
            </div>
        </div><br>
        
                <div class="form-group">
            <label class="col-sm-4 control-label">Nomor IMB</label>
            <div class="col-sm-8">
                <input type="text" id="imb" placeholder=" Nomor imb" class="form-control input-sm" value="<?php echo $imb; ?>" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label"> Sertifikat Induk</label>
            <div class="col-sm-8">
                <input type="text" id="sert_induk" placeholder="Nomor Sertifikat induk" class="form-control input-sm" value="<?php echo $sert_induk; ?>" required>
            </div>
        </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">PBB</label>
            <div class="col-sm-8">
                <input type="text" id="pbb" placeholder="Nomor Pbb" class="form-control input-sm" value="<?php echo $pbb; ?>" required>
                <input type="hidden"  id="input_on" value="<?php echo $input_on; ?>">
                <input type="hidden" id="input_by" value="<?php echo $input_by; ?>">
                 <input type="hidden" id="edit_on" value="<?php echo tglSkrg();?>">
                 <input type="hidden" id="edit_by" value="<?php echo $_SESSION['username'];?>">
                 <input type="hidden" id="del_by" value="<?php echo $_SESSION['username'];?>">
                 <input type="hidden" id="del_on" value="<?php echo tglSkrg();?>">
                 <input type="hidden" id="del" value="">
            </div>
        </div><br>
        </div>
    </form>
