<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$devloper = new Devloper();
$kavling = new Kavling();
$blok = new blok();
if($_GET['aksi']=='edit');
$id_kavling=$_GET['id_kavling'];
$data = $kavling->bacaKavling('id_kavling', $id_kavling);
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
                        
                            <div class="row">
                            <input type="hidden" name="id_kavling" value="<?php echo $data['id_kavling']; ?>">
                            <div class="col-md-3"><label for="id_blok">Blok</label>
                            <select name="id_blok" class="form-control input-sm">
                            <option value="<?php echo $data['id_blok']; ?>"><?php echo $data['id_blok']; ?></option>

                            <?php
                            //Tampilkan combo Masterdoc
                            $arrayblok=$blok->comboBlok();
                            foreach($arrayblok as $datablok)
                            {
                            ?>
                            <option value="<?php echo $datablok['id_blok']?>"><?php echo $datablok['blok']?>&nbsp;|&nbsp;<?php echo $datablok['nm_proyek']?></option>
                            <?php 
                                    
                                }
                            ?></select>

                            </div>
                            <div class="col-md-3"><label for="no">Nomor</label><input type="text" name="no" id="no" value="<?php echo $data['no']; ?>" placeholder="Nomor" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="tipe">Type</label><input type="text" name="tipe" id="tipe" value="<?php echo $data['tipe']; ?>" placeholder="Type" class="form-control input-sm" required></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-3"><label for="kel">Kelebihan Tanah</label><input type="text" name="kel" id="kel" value="<?php echo $data['kel']; ?>" placeholder="Kelebihan Tanah" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="harga_kel">Harga Kel Tanah Permeter</label><input type="text" name="harga_kel" id="harga_kel" value="<?php echo $data['harga_kel']; ?>" placeholder="Harga kelebihan tanah" class="form-control input-sm" required>
                            </div>
                            <div class="col-md-4"><label for="status_bangunan">Status Bangunan</label>
                            <select class="form-control input-sm" name="status_bangunan" id="status_bangunan">
                            <option value="<?php echo $data['status_bangunan']; ?>"><?php echo $data['status_bangunan']; ?></option>
                            <option value="I">I</option>
                            <option value="B">B</option>
                            <option value="R">R</option>
                            </select>
                                
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                       
                            <div class="row">
                            <div class="col-md-3"><label for="harga_brosur">Harga Brosur</label><input type="text" name="harga_brosur" id="harga_brosur" value="<?php echo $data['harga_brosur']; ?>" placeholder="Harga Brosur" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="harga_cash">Harga Cash</label><input type="text" name="harga_cash" id="harga_cash" value="<?php echo $data['harga_cash']; ?>" placeholder="Harga Cash" class="form-control input-sm" required></div>                  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-3"><label for="luas_tanah">Luas Tanah</label><input type="text" name="luas_tanah" id="luas_tanah" value="<?php echo $data['luas_tanah']; ?>" placeholder="Luas Tanah" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="luas_bangunan">Luas Bangunan </label><input type="text" name="luas_bangunan" id="luas_bangunan" value="<?php echo $data['luas_bangunan']; ?>" placeholder="Luas Bangunan" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="posisi_bangunan">Posisi Bangunan </label>
                            <select class="form-control input-sm" name="posisi_bangunan">
                            <option value="<?php echo $data['posisi_bangunan']; ?>"><?php echo $data['posisi_bangunan']; ?></option>
                            <option value="Utara">Utara</option>
                            <option value="Selatan">Selatan</option>
                            <option value="Timur">Timur</option>
                            <option value="Barat">Barat</option>
                            <option value="Lainya">Lainya</option>
                            </select>
                            </div>
                            </div>                 
                            </div>
                        
                
                        
                        <div class="form-group">
                        
                            <div class="row">
                            <div class="col-md-3"><label for="harga_jual">Harga Jual</label><input type="text" name="harga_jual" id="harga_jual" value="<?php echo $data['harga_jual']; ?>" placeholder="Harga Jual" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="um_std">Uang Muka STD</label><input type="text" name="um_std" id="um_std" value="<?php  echo $data['um_std']; ?>" placeholder="Uang Muka Std" class="form-control input-sm" required></div>
                            <div class="col-md-4"><label for="diskon">Diskon </label><input type="text" name="diskon" id="diskon" value="<?php  echo $data['diskon']; ?>" placeholder="Diskon" class="form-control input-sm" required></div>                  
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="row">
                            <div class="col-md-3"><label for="utj">Uang tanda jadi</label><input type="text" name="utj" id="utj" value="<?php  echo $data['utj']; ?>" placeholder="Uang Tanda Jadi" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="strategis">Biaya Strategis</label><input type="text" name="strategis"  id="strategis" value="<?php  echo $data['strategis']; ?>" placeholder="Biaya Strategis" class="form-control input-sm" required></div>
                            <div class="col-md-2"><label for="adm">Biaya Adm </label><input type="text" name="adm" id="adm" value="<?php  echo $data['adm']; ?>" placeholder="Biaya Adm" class="form-control input-sm" required></div>                  
                            <div class="col-md-2"><label for="biaya_proses">Biaya Proses </label><input type="text" name="biaya_proses" id="biaya_proses" value="<?php echo $data['biaya_proses']; ?>" placeholder="Biaya Proses" class="form-control input-sm" required></div>                  
                           
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="row">
                            <div class="col-md-3"><label for="materai">Biaya Materai</label><input type="text" name="materai" id="materai" value="<?php echo $data['materai']; ?>" placeholder="Biaya Materai" class="form-control input-sm" required></div>
                            <div class="col-md-3"><label for="diskon2">Diskon II </label><input type="text" name="diskon2" id="diskon2" value="<?php  echo $data['diskon2']; ?>" placeholder="Diskon II" class="form-control input-sm" required></div>
                            <div class="col-md-4"><label for="note">Catatan </label><input type="text" name="note" id="note" value="<?php  echo $data['note']; ?>" placeholder="Note" class="form-control input-sm" required></div>  
                            <input type="hidden" name="input_on" value="<?php  echo $data['input_on']; ?>">  
                            <input type="hidden" name="input_by" value="<?php echo $data['input_by']; ?>">
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
$harga_brosur=$_POST['harga_brosur'];
$harga_cash=$_POST['harga_cash'];
$harga_jual=$_POST['harga_jual'];
$um_std=$_POST['um_std'];
$diskon=$_POST['diskon'];
$utj=$_POST['utj'];
$strategis=$_POST['strategis'];
$adm=$_POST['adm'];
$biaya_proses=$_POST['biaya_proses'];
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
                            $harga_brosur,$harga_cash,$harga_jual,$um_std,$diskon,$utj,$strategis,$adm,$biaya_proses,$materai,$diskon2,$note,$input_on,$input_by,$edit_on,$edit_by,$del_on,$del_by,$del);
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?r=kavling&pg=kavling&id_dev='.$_GET['id_dev'].'">'; 
}
?>


<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script>

    $(function(){

        $("#form_2").validate({
            rules: {
                id_blok: {
                    required: true,  
                },
                no: {
                    required: true,
                    number: true
                },
                tipe: {
                    required: true,
                    
                },
                kel: {
                    required: true,
                    number: true
                },
                harga_kel: {
                    required: true,
                    number: true
                },
                status_bangunan: {
                    required: true,  
                },

                luas_tanah: {
                    required: true,
                    number: true  
                },
                luas_bangunan: {
                    required: true,
                    number: true  
                },
                posisi_bangunan: {
                    required: true,
                      
                },
                harga_brosur: {
                    required: true,
                    number: true  
                },
                harga_cash: {
                    required: true,
                    number: true  
                },
                harga_jual: {
                    required: true,
                    number: true  
                },
                um_std: {
                    required: true,
                    number: true  
                },
                diskon: {
                    required: true,
                    number: true  
                },
                utj: {
                    required: true,
                    number: true  
                },
                strategis: {
                    required: true,
                    number: true  
                },
                adm: {
                    required: true,
                    number: true  
                },
                biaya_proses: {
                    required: true,
                    number: true  
                },
                materai: {
                    required: true,
                    number: true  
                },
                diskon2: {
                    required: true,
                    number: true  
                },
                note: {
                    required: true,
                     
                },
                input_on: {
                    required: true,
                    
                }
            },
            messages: {
                number: {
                    required: "(Please enter your phone number)",
                    number: "(Please enter valid phone number)"
                },
                last_name: {
                    required: "This is custom message for required",
                    minlength: "This is custom message for min length"
                }
            },
            submitHandler: function(form) {
                form.submit();
            },
            errorPlacement: function(error, element) {
                $( element )
                        .closest( "form" )
                        .find( "label[for='" + element.attr( "id" ) + "']" )
                        .append( error );
            },
            errorElement: "span",
        });


    });
</script>