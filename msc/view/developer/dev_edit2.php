<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$devloper = new Devloper();
if($_GET['aksi']=='edit');
$id_dev=$_GET['id_dev'];
?>
       <div class="col-lg-6">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                        <a class="closebox"><i class="fa fa-times"></i></a>
                    </div>
                    INPUT DATA DEVLOPER
                </div>
                <div class="panel-body">
                        <form action="" method="post" role="form" id="form_2">
                        <div class="form-group">
                        <label for="name">Nama Devloper</label> 
                        <input type="text" name="nm_dev" placeholder="Nama Devloper" class="form-control input-sm" 
                        value="<?php echo $devloper->bacaDevloper('nm_dev', $id_dev); ?>"required>
                         <input type="hidden" name="id_dev" value="<?php echo $devloper->bacaDevloper('id_dev', $id_dev); ?>"required>   
                        </div>
                       
                        <div class="form-group">
                        <label for="last_name">Nama Proyek</label>
                        <input type="text" name="nm_proyek" placeholder="Nama Proyek" class="form-control input-sm"
                        value="<?php echo $devloper->bacaDevloper('nm_proyek', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Alamat Proyek</label>
                        <input type="text" name="alamat_proyek" placeholder="Alamat proyek" class="form-control input-sm"
                        value="<?php echo $devloper->bacaDevloper('alamat_proyek', $id_dev); ?>" required>
                        
                        </div>
                        <div class="form-group">
                        <label for="last_name">Nomor Telpon</label>
                        <input type="text" name="no_telpon" placeholder="Nomor Telpon" class="form-control input-sm"
                        value="<?php echo $devloper->bacaDevloper('no_telpon', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Kategori Proyek</label>
                        <input type="text" name="kat_proyek" placeholder="Kategori Proyek" class="form-control input-sm"
                        value="<?php echo $devloper->bacaDevloper('kat_proyek', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Luas Lahan</label>
                        <input type="text" name="tot_luas_lahan" placeholder="Total Luas lahan" class="form-control input-sm"
                        value="<?php echo $devloper->bacaDevloper('tot_luas_lahan', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Type Perumahan</label>
                        <input type="text" name="type_perumahan" placeholder="Type Perumahan" class="form-control input-sm" 
                        value="<?php echo $devloper->bacaDevloper('type_perumahan', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Izin Lokasi</label>
                        <input type="text" name="izin_lokasi" placeholder="Izin Lokasi" class="form-control input-sm" 
                        value="<?php echo $devloper->bacaDevloper('izin_lokasi', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Imb</label>
                        <input type="text" name="imb" placeholder="imb" class="form-control input-sm" 
                        value="<?php echo $devloper->bacaDevloper('imb', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Sertifikat Induk</label>
                        <input type="text" name="sert_induk" placeholder="Sertifikat induk" class="form-control input-sm" 
                        value="<?php echo $devloper->bacaDevloper('sert_induk', $id_dev); ?>" required>
                        </div>
                        <div class="form-group">
                        <label for="last_name">PBB (Pajak Bumi Dan Bangunan )</label>
                        <input type="text" name="pbb" placeholder="pbb" class="form-control input-sm" 
                        value="<?php echo $devloper->bacaDevloper('pbb', $id_dev); ?>" required>
                        <input type="hidden" name="input_date" value="<?php echo $devloper->bacaDevloper('input_date', $id_dev); ?>">
                        <input type="hidden" name="input_by" value="<?php echo $devloper->bacaDevloper('input_by', $id_dev); ?>">
                        </div>


                        <div>
                            <input type="submit" name="update" value="update"  class="btn btn-sm btn-primary m-t-n-xs">
                            &nbsp;<button class="btn btn-sm btn-warning m-t-n-xs" onclick="goBack()"><strong>Batal</strong></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

<?php
if($_POST['update']){
$id_dev=$_POST['id_dev'];
$nm_dev=$_POST['nm_dev'];
$nm_proyek=$_POST['nm_proyek'];
$alamat_proyek=$_POST['alamat_proyek'];
$no_telpon=$_POST['no_telpon'];
$kat_proyek=$_POST['kat_proyek'];
$tot_luas_lahan=$_POST['tot_luas_lahan'];
$type_perumahan=$_POST['type_perumahan'];
$izin_lokasi=$_POST['izin_lokasi'];
$imb=$_POST['imb'];
$sert_induk=$_POST['sert_induk'];
$pbb=$_POST['pbb'];
$input_date=$_POST['input_date'];
$input_by=$_POST['input_by'];
$devloper->updateDevloper($id_dev,$nm_dev,$nm_proyek,$alamat_proyek,$no_telpon,$kat_proyek,$tot_luas_lahan,
                        $type_perumahan,$izin_lokasi,$imb,$sert_induk,$pbb,$input_date,$input_by);
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?r=devloper&pg=dev_show">'; 
}
?>
<script>
function goBack() {
    window.history.back();
}
</script>