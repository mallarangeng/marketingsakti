<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$devloper = new Devloper();
?>
       <div class="col-lg-10">
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
                        <label for="name">Nama Devloper / Nama Proyek</label> 
                        <div class="row">
                        <div class="col-md-4"><input type="text" name="nm_dev" placeholder="Nama Devloper" class="form-control input-sm" required></div>
                        <div class="col-md-4"><input type="text" name="nm_proyek" placeholder="Nama Proyek" class="form-control input-sm" required></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Alamat Proyek / Nomor Telpon</label>
                        <div class="row">
                        <div class="col-md-4"><input type="text" name="alamat_proyek" placeholder="Alamat proyek" class="form-control input-sm" required></div>
                        <div class="col-md-4"><input type="text" name="no_telpon" placeholder="Nomor Telpon" class="form-control input-sm" required></div>
                        <div class="col-md-4"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Kaletori Proyek / Luas Lahan (M)</label>
                        <div class="row">
                        <div class="col-md-4"><input type="text" name="kat_proyek" placeholder="Kategori Proyek" class="form-control input-sm" required></div>
                        <div class="col-md-4"> <input type="text" name="tot_luas_lahan" placeholder="Total Luas lahan" class="form-control input-sm" required></div>
                        <div class="col-md-4"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Type Perumahan / Izin Lokasi</label>
                        <div class="row">
                        <div class="col-md-4"><input type="text" name="type_perumahan" placeholder="Type Perumahan" class="form-control input-sm" required></div>
                        <div class="col-md-4"> <input type="text" name="izin_lokasi" placeholder="Izin Lokasi" class="form-control input-sm" required></div>
                        <div class="col-md-4"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Nomor IMB / Sertifikat Induk / Izin Lokasi</label>
                        <div class="row">
                        <div class="col-md-4"><input type="text" name="imb" placeholder=" Nomor imb" class="form-control input-sm" required></div>
                        <div class="col-md-4"><input type="text" name="sert_induk" placeholder="Nomor Sertifikat induk" class="form-control input-sm" required></div>
                        <div class="col-md-3"><input type="text" name="pbb" placeholder="Nomor Pbb" class="form-control input-sm" required></div>
                        <input type="hidden" name="input_date" value="<?php echo date('Y-m-d') ?>">
                        <input type="hidden" name="input_by" value="<?php echo $_SESSION['username'];?>">
                        </div>
                        </div>
                        <div>
                            <input type="submit" name="simpan" value="simpan"  class="btn btn-sm btn-primary m-t-n-xs">
                            &nbsp;<button class="btn btn-sm btn-warning m-t-n-xs" onClick="history.back()"><strong>Batal</strong></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

<?php
if($_POST['simpan']){
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
$devloper->addDevloper($nm_dev,$nm_proyek,$alamat_proyek,$no_telpon,$kat_proyek,$tot_luas_lahan,
                            $type_perumahan,$izin_lokasi,$imb,$sert_induk,$pbb,$input_date,$input_by);
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?r=devloper&pg=dev_show">'; 
}
?>