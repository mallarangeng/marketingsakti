<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$Konsumen = new konsumen();
?>

<!--
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker ({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd'
    });

  });
  </script>
-->

              <form method="get" >
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1">Data Konsumen</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2">Kelengkapan I</a></li>
                <li class=""><a data-toggle="tab" href="#tab-3">Kelengkapan II</a></li>
                <li class=""><a data-toggle="tab" href="#tab-4">Foto</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                 <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Nama Konsumen</label>
                 <div class="col-sm-6">
                    <input type="hidden" id="id_konsumen" value="<?php echo kdauto3('ms_konsumen'); ?>">                
                    <input type="text" placeholder="nama" class="form-control input-sm" id="nama">
                </div>
                </div><br>
                    <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Lahir</label>
           <div class="col-sm-2">
                            <select class="form-control input-sm" id="tgl" required>
                            <?PHP for ($hari=1; $hari<=31; $hari++){ ?>
                            <option value="<?php echo $hari; ?>"><?php echo $hari; ?></option>
                            <?php } ?>
                            </select>
                </div>
                 <div class="col-sm-3">
                            <select class="form-control input-sm" id="bln" required>
                            <?php $nmbln = array("jan","Feb","Mar","Apr","Mei","Jun","Juli","Ags","Sep","Okt","Nov","Des"); ?>
                            <?PHP for ($bln=1; $bln<=12; $bln++){ ?>
                            <option value="<?php echo $bln; ?>"><?php echo $nmbln[$bln-1]; ?></option>
                            <?php } ?>
                            </select>
                </div>
                                <div class="col-sm-3">
                            <select class="form-control input-sm"  id="thn" required>
                            
                            <?PHP for ($thn=1930; $thn<=2015; $thn++){ ?>
                            <option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
                            <?php } ?>
                            </select>
                </div>

             </div><br>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jenis Kelamin</label>
            <div class="col-sm-4">
               <select class="form-control input-sm" id="jenis_kel" required>
                            <option value="L">Laki Laki</option>
                            <option value="P">Perempuan</option>
                            </select>
            </div>
                                
        </div><br>

      
        <div class="form-group">
            <label class="col-sm-4 control-label">Alamat</label>
            <div class="col-sm-8">
                <input type="text" placeholder="Alamat" class="form-control input-sm" id="alamat">
            </div>
        </div><br>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Nomor HP</label>
                       <div class="col-sm-6">
                <input type="text" placeholder="Nomor HP" class="form-control input-sm" id="hp">
            </div>
        </div><br>
        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-6">
                <input type="text" placeholder="Email" class="form-control input-sm" id="email">
            </div>
        </div><br>
        <div class="form-group">
            <label class="col-sm-4 control-label">Keterangan</label>
            <div class="col-sm-6">
                <input type="text" placeholder="Keterangan" class="form-control input-sm" id="ket">
                
            </div>
        </div><br>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nomor KTP</label>
            <div class="col-sm-6">
                <input type="text" placeholder="Nomor KTP" class="form-control input-sm" id="ktp">
            </div>
        </div><br>
        <div class="hr-line-dashed"></div>

                </div>
                </div>
                <div id="tab-2" class="tab-pane">
                <div class="panel-body">
             <div class="form-group">
                <label class="col-sm-6 control-label">Foto Copy KTP Suami istri</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="ft" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div><br>
                               
             <div class="form-group">
                <label class="col-sm-6 control-label">Kartu Keluarga</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="kk" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div><br>
            
             <div class="form-group">
                <label class="col-sm-6 control-label">Surat Nikah</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="s_nikah" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div><br>
             <div class="form-group">
                <label class="col-sm-6 control-label">SKBMR</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="skbmr" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">NPWP</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="npwp" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">SPT</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="spt" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">Rekening Listrik</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="rek_listrik" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br>
             <div class="form-group">
                <label class="col-sm-6 control-label">Surat Keterangan Domisili Usaha</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="sk_skdu" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br>                     
                        <div class="hr-line-dashed"></div>
        </div>
                    </div>
                 <div id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        
                 
                              <div class="form-group">
                <label class="col-sm-6 control-label">SIUP</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="siup" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br>
                          <div class="form-group">
                <label class="col-sm-6 control-label">Formulir Btn</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="f_btn" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br>  
                <div class="form-group">
                <label class="col-sm-6 control-label">F1</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="f1" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">F4</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="f4" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">A1</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="a1" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">E1</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="e1" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">E2</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="e2" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br> 
             <div class="form-group">
                <label class="col-sm-6 control-label">SP Listrik</label>
                <div class="col-sm-4">
                            <select class="form-control input-sm" id="sp_listrik" required>
                            <option value="L">L</option>
                            <option value="B">B</option>
                            </select>
                </div>
             </div> <br>
             <input type="hidden" id="input_on" value="<?php echo tglSkrg();?>"  >
             <input type="hidden" id="input_by" value="<?php echo $_SESSION['username'];?>">
             <input type="hidden" id="edit_on" value="">
             <input type="hidden" id="edit_by" value="">
             <input type="hidden" id="del_by" value="">
             <input type="hidden" id="del_on" value="">
             <input type="hidden" id="del" value="">
              <div class="hr-line-dashed"></div>
                    </div>
                     </div>
              <div id="tab-4" class="tab-pane">
                    <div class="panel-body">
                        
                 
                <div class="form-group">
                <label class="col-sm-4 control-label">FOTO</label>
                <div class="col-sm-4">
                 <label class="btn btn-sm btn-success m-t-n-xs">
                <input type="file" name="picture" id="picture" accept="*/*" class="hide" required />
                <i class="fa fa-upload"></i>&nbsp;<span class="bold">Upload Foto</span>
                </label>
            </div>
             </div>



     
  
             
              <div class="hr-line-dashed"></div>
                    </div>
                     </div>


            </div>
</form>