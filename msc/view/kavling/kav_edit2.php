<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$devloper = new Devloper();
$kavling = new Kavling();
if($_GET['aksi']=='edit');
$id_kavling=$_GET['id_kavling'];
?>
       <div class="col-lg-10">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                        <a class="closebox"><i class="fa fa-times"></i></a>
                    </div>
                    EDIT DATA STOK KAVLING
                </div>
                <div class="panel-body">
                        <form action="" method="post" role="form" id="form_2">
                        <div class="form-group">
                        <label for="name">Blok / Nomor / Type</label> 
                            <div class="row">
                            <input type="hidden" name="id_kavling" value="<?php echo $kavling->bacaKavling('id_kavling', $id_kavling); ?>">
                            <div class="col-md-3"><input type="text" name="id_blok" value="<?php echo $kavling->bacaKavling('id_blok', $id_kavling); ?>" placeholder="Blok" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="no" value="<?php echo $kavling->bacaKavling('no', $id_kavling); ?>" placeholder="Nomor" class="form-control input-sm" required></div>
                            <div class="col-md-4"><input type="text" name="tipe" value="<?php echo $kavling->bacaKavling('tipe', $id_kavling); ?>" placeholder="Type" class="form-control input-sm" required></div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Kelebihan Tanah / Harga Kel Tanah Permeter/Status Bangunan</label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="kel" value="<?php echo $kavling->bacaKavling('kel', $id_kavling); ?>" placeholder="Kelebihan Tanah" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="harga_kel" value="<?php echo $kavling->bacaKavling('harga_kel', $id_kavling); ?>" placeholder="Harga kelebihan tanah" class="form-control input-sm" required>

                            </div>
                            <div class="col-md-4">
                            <select class="form-control input-sm" name="status_bangunan">
                            <option value="<?php echo $kavling->bacaKavling('status_bangunan', $id_kavling); ?>"><?php echo $kavling->bacaKavling('status_bangunan', $id_kavling); ?></option>
                            <option value="I">I</option>
                            <option value="B">B</option>
                            <option value="R">R</option>
                            </select>
                                
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Luas Tanah/Luas Bangunan / Posisi Bangunan </label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="luas_tanah" value="<?php echo $kavling->bacaKavling('luas_tanah', $id_kavling); ?>" placeholder="Luas Tanah" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="luas_bangunan" value="<?php echo $kavling->bacaKavling('luas_bangunan', $id_kavling); ?>" placeholder="Luas Bangunan" class="form-control input-sm" required></div>
                            <div class="col-md-3">


                            <select class="form-control input-sm" name="posisi_bangunan">
                            <option value="<?php echo $kavling->bacaKavling('posisi_bangunan', $id_kavling); ?>"><?php echo $kavling->bacaKavling('status_bangunan', $id_kavling); ?></option>
                            <option value="Utara">Utara</option>
                            <option value="Selatan">Selatan</option>
                            <option value="Timur">Timur</option>
                            <option value="Barat">Barat</option>
                            <option value="Lainya">Lainya</option>
                            </select>
                            </div>
                            </div>                 
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Harga Jual / Uang Muka STD / Diskon </label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="harga_jual" value="<?php echo $kavling->bacaKavling('harga_jual', $id_kavling); ?>" placeholder="Harga Jual" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="um_std" value="<?php echo $kavling->bacaKavling('um_std', $id_kavling); ?>" placeholder="Uang Muka Std" class="form-control input-sm" required></div>
                            <div class="col-md-4"><input type="text" name="diskon" value="<?php echo $kavling->bacaKavling('diskon', $id_kavling); ?>" placeholder="Diskon" class="form-control input-sm" required></div>                  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Uang tanda jadi / Biaya Strategis / Biaya Adm </label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="utj" value="<?php echo $kavling->bacaKavling('utj', $id_kavling); ?>" placeholder="Uang Tanda Jadi" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="strategis" value="<?php echo $kavling->bacaKavling('strategis', $id_kavling); ?>" placeholder="Biaya Strategis" class="form-control input-sm" required></div>
                            <div class="col-md-4"><input type="text" name="adm" value="<?php echo $kavling->bacaKavling('adm', $id_kavling); ?>" placeholder="Biaya Adm" class="form-control input-sm" required></div>                  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Biaya Materai / Diskon II / Catatan </label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="materai" value="<?php echo $kavling->bacaKavling('materai', $id_kavling); ?>" placeholder="Biaya Materai" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="diskon2" value="<?php echo $kavling->bacaKavling('diskon2', $id_kavling); ?>" placeholder="Diskon II" class="form-control input-sm" required></div>
                            <div class="col-md-4"><input type="text" name="note" value="<?php echo $kavling->bacaKavling('note', $id_kavling); ?>" placeholder="Note" class="form-control input-sm" required></div>  
                            <input type="hidden" name="input_on" value="<?php echo $kavling->bacaKavling('input_on', $id_kavling); ?>">  
                            <input type="hidden" name="input_by" value="<?php echo $kavling->bacaKavling('input_by', $id_kavling); ?>">
                            <input type="hidden" name="edit_on" value="<?php echo date('Y-m-d H:i:s') ?>">
                            <input type="hidden" name="edit_by" value="<?php echo $_SESSION['username'];?>">    
                            <input type="hidden" name="del_on" value="">
                            <input type="hidden" name="del_by" value="">
                            <input type="hidden" name="del" value="">      
                        </div>
                        </div>
                        <div>
                            <input type="submit" name="update" value="Update"  class="btn btn-sm btn-primary m-t-n-xs">
                            &nbsp;<button class="btn btn-sm btn-warning m-t-n-xs" onClick="history.back()"><strong>Batal</strong></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

<?php
if($_POST['update']){
$id_kavling=$_POST['id_kavling'];
$id_blok=$_POST['id_blok'];
$no=$_POST['no'];
$tipe=$_POST['tipe'];
$kel=$_POST['kel'];
$harga_kel=$_POST['harga_kel'];
$status_bangunan=$_POST['status_bangunan'];
$luas_tanah=$_POST['luas_tanah'];
$luas_bangunan=$_POST['luas_bangunan'];
$posisi_bangunan=$_POST['posisi_bangunan'];
$harga_jual=$_POST['harga_jual'];
$um_std=$_POST['um_std'];
$diskon=$_POST['diskon'];
$utj=$_POST['utj'];
$strategis=$_POST['strategis'];
$adm=$_POST['adm'];
$materai=$_POST['materai'];
$diskon2=$_POST['diskon2'];
$note=$_POST['note'];
$input_on=$_POST['input_on'];
$input_by=$_POST['input_by'];
$edit_on=$_POST['edit_on'];
$edit_by=$_POST['edit_by'];
$del_on=$_POST['del_on'];
$del_by=$_POST['del_by'];
$del=$_POST['del'];

$kavling->updateKavling($id_kavling,$id_blok,$no,$tipe,$kel,$harga_kel,$status_bangunan,$luas_tanah,$luas_bangunan,$posisi_bangunan,
                            $harga_jual,$um_std,$diskon,$utj,$strategis,$adm,$materai,$diskon2,$note,$input_on,$input_by,$edit_on,$edit_by,$del_on,$del_by,$del);
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?r=kavling&pg=kav_show">'; 
}
?>