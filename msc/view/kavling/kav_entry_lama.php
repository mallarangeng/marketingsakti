<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$devloper = new Devloper();
$kavling = new Kavling();
?>
       <div class="col-lg-10">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                        <a class="closebox"><i class="fa fa-times"></i></a>
                    </div>
                    INPUT DATA STOK KAVLING
                </div>
                <div class="panel-body">
                        <form action="" method="post" role="form" id="form_2">
                        <div class="form-group">
                        <label for="id_blok">Blok / Nomor / Type</label> <label for="no"></label>
                            <div class="row">
                            <input type="hidden" name="id_kavling" >
                            <div class="col-md-3"><input type="text" name="id_blok" id="id_blok"  placeholder="Blok" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="no" id="no"  placeholder="Nomor" class="form-control input-sm" required></div>
                            <div class="col-md-4"><input type="text" name="tipe" id="tipe"  placeholder="Type" class="form-control input-sm" required></div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Kelebihan Tanah / Harga Kel Tanah Permeter/Status Bangunan</label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="kel"  placeholder="Kelebihan Tanah" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="harga_kel"  placeholder="Harga kelebihan tanah" class="form-control input-sm" required>

                            </div>
                            <div class="col-md-4">
                            <select class="form-control input-sm" name="status_bangunan" required>
                            <option value="">Status Bangunan</option>
                            <option value="I">I</option>
                            <option value="B">B</option>
                            <option value="R">R</option>
                            </select>
                                
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="last_name">Harga Brosur / Harga Cash</label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="harga_brosur" placeholder="Harga Brosur" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="harga_cash" placeholder="Harga Cash" class="form-control input-sm" required></div>                  
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="last_name">Luas Tanah/Luas Bangunan / Posisi Bangunan </label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="luas_tanah"  placeholder="Luas Tanah" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="luas_bangunan" placeholder="Luas Bangunan" class="form-control input-sm" required></div>
                            <div class="col-md-3">


                            <select class="form-control input-sm" name="posisi_bangunan" required>
                            <option value="">Posisi Bangunan</option>
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
                            <div class="col-md-3"><input type="text" name="harga_jual" placeholder="Harga Jual" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="um_std" placeholder="Uang Muka Std" class="form-control input-sm" required></div>
                            <div class="col-md-4"><input type="text" name="diskon" placeholder="Diskon" class="form-control input-sm" required></div>                  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Uang tanda jadi / Biaya Strategis / Biaya Adm </label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="utj" placeholder="Uang Tanda Jadi" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="strategis" placeholder="Biaya Strategis" class="form-control input-sm" required></div>
                            <div class="col-md-2"><input type="text" name="adm" placeholder="Biaya Adm" class="form-control input-sm" required></div>                  
                            <div class="col-md-2"><input type="text" name="biaya_proses" placeholder="Biaya Proses" class="form-control input-sm" required></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Biaya Materai / Diskon II / Catatan </label>
                            <div class="row">
                            <div class="col-md-3"><input type="text" name="materai"  placeholder="Biaya Materai" class="form-control input-sm" required></div>
                            <div class="col-md-3"><input type="text" name="diskon2"  placeholder="Diskon II" class="form-control input-sm" required></div>
                            <div class="col-md-4"><input type="text" name="note" placeholder="Note" class="form-control input-sm" required></div>  
                            <input type="hidden" name="input_on" value="<?php echo date('Y-m-d H:i:s') ?>">  
                            <input type="hidden" name="input_by" value="<?php echo $_SESSION['username'];?>">
                            <input type="hidden" name="edit_on" value="">
                            <input type="hidden" name="edit_by" value="">    
                            <input type="hidden" name="del_on" value="">
                            <input type="hidden" name="del_by" value="">
                            <input type="hidden" name="del" value="">       
                        </div>
                        </div>
                        <div>
                            <input type="submit" name="simpan" value="Simpan"  class="btn btn-sm btn-primary m-t-n-xs">
                            &nbsp;<button class="btn btn-sm btn-warning m-t-n-xs" onClick="history.back()"><strong>Batal</strong></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

<?php
if($_POST['simpan']){
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

$kavling->addKavling($id_blok,$no,$tipe,$kel,$harga_kel,$status_bangunan,$luas_tanah,$luas_bangunan,$posisi_bangunan,
                            $harga_brosur,$harga_cash,$harga_jual,$um_std,$diskon,$utj,$strategis,$adm,$biaya_proses,$materai,$diskon2,$note,$input_on,$input_by,$edit_on,$edit_by,$del_on,$del_by,$del);
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=?r=kavling&pg=kav_show">'; 
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
                    minlength: 3
                },
                no: {
                    required: true,
                    minlength: 5
                },
                tipe: {
                    required: true,
                    minlength: 5
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                last_name: {
                    required: true,
                    minlength: 6
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