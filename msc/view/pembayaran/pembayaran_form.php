<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$pembayaran = new pembayaran();
$idp    = $_POST['idp'];
$id_penjualan    = $_POST['id_penjualan'];
$datap  = $pembayaran->bacaPembayaran($idp);
 if($datap['id_pembayaran']> 0){
        $id_penjualan=$datap['id_penjualan'];
        $tgl_bayar=$datap['tgl_bayar'];
        $tgl_tempo=$datap['tgl_tempo'];
        $id_jenis=$datap['id_jenis'];
        $pembayaran_jenis=$datap['pembayaran_jenis'];
        $pembayaran_ke=$datap['pembayaran_ke'];
        $jumlah_pembayaran=$datap['jumlah_pembayaran'];
        $telat=$datap['telat'];
        $denda=$datap['denda'];
        $ket_pembayaran=$datap['ket_pembayaran'];      
        $input_on=$datap['input_on'];
        $input_by=$datap['input_by'];
        $edit_on=$datap['edit_on'];
        $edit_by=$datap['edit_by'];
        $del_by=$datap['del_by'];
        $del_on=$datap['del_on'];
        $del=$datap['del'];
    }else{
        $id_pembayaran='';
        $id_penjualan='';
        $tgl_bayar='';
        $tgl_tempo='';
        $id_jenis='';
        $pembayaran_ke='';
        $jumlah_pembayaran='';
        $telat='';
        $denda='';
        $ket_pembayaran='';     
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
                    <label class="col-sm-4 control-label">ID Penjualan</label>
                 <div class="col-sm-6">
                    <input type="hidden" id="id_pembayaran" class="form-control input-sm" value="<?php echo $idp; ?>" readonly>
                    <input type="text" id="id_penjualan" class="form-control input-sm" value="<?php echo $_POST['id_penjualan'] ?>" readonly>
                    </div>
                </div><br>
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Tgl Bayar</label>
                 <div class="col-sm-6 ">
                    <input type="text" id="tgl_bayar" value="<?php echo $tgl_bayar; ?>" class="form-control input-sm">
                    </div>
                </div><br>
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Tgl Jth Tempo</label>
                 <div class="col-sm-6">
                    <input type="text" id="tgl_tempo" value="<?php echo $tgl_tempo; ?>"  class="form-control input-sm">
                    </div>
                </div><br>
                    <div class="form-group">
            <label class="col-sm-4 control-label">Jenis Pembayaran</label>
           <div class="col-sm-6">
                    <select id="id_jenis" class="form-control input-sm">
                            <option value="<?php echo $id_jenis; ?>"><?php echo $pembayaran_jenis; ?></option>
                            <?php
                            $arrayPembayaran = $pembayaran->comboPembayaranjenis();
                            if(isset($arrayPembayaran) && $arrayPembayaran !=NULL){
                                foreach($arrayPembayaran as $datajns){
                             ?>
                    <option value="<?php echo $datajns['id_jenis']?>"><?php echo $datajns['pembayaran_jenis']?></option>
                    <?php 
                            }
                        }
                    ?></select>
                </div>
             </div><br>
        <div class="form-group">
            <label class="col-sm-4 control-label">Pembayaran Ke </label>
            <div class="col-sm-2">
                <input type="text"  class="form-control input-sm" id="pembayaran_ke" value="<?php echo $pembayaran_ke; ?>">
            </div>
        </div><br>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Pembayaran</label>
                       <div class="col-sm-6">
                <input type="text" placeholder="Jumlah Pembayaran" class="form-control input-sm" id="jumlah_pembayaran" value="<?php echo $jumlah_pembayaran; ?>">
            </div>
        </div><br>
        <div class="form-group">
            <label class="col-sm-4 control-label">Telat</label>
            <div class="col-sm-6">
                <input type="text" placeholder="Telat" class="form-control input-sm" id="telat" value="<?php echo $telat; ?>">
            </div>
        </div><br>
        <div class="form-group">
            <label class="col-sm-4 control-label">Denda</label>
            <div class="col-sm-6">
             <input type="text" placeholder="Denda" class="form-control input-sm" id="denda" value="<?php echo $denda; ?>">   
            </div>
        </div><br> 
                <div class="form-group">
            <label class="col-sm-4 control-label">Keterangan Pembayaran</label>
            <div class="col-sm-8">
             <textarea class="form-control" id="ket_pembayaran"><?php echo $ket_pembayaran; ?></textarea>
             <input type="hidden" id="input_on" value="<?php echo tglSkrg(); ?>">
             <input type="hidden" id="input_by" value="<?php echo userSes(); ?>">
             <input type="hidden" id="edit_on" value="<?php echo tglSkrg(); ?>">
             <input type="hidden" id="edit_by" value="<?php echo userSes(); ?>">
             <input type="hidden" id="del_by" value="">
             <input type="hidden" id="del_on" value="">
             <input type="hidden" id="del" value="">
   
            </div>
        </div><br>            
</form>
<script>
$('#tgl_bayar').datepicker({
                        format: 'yyyy-mm-dd',
                        keyboardNavigation: false,
                        forceParse: false,
                        autoclose: true
                    });
$('#tgl_tempo').datepicker({
                        format: 'yyyy-mm-dd',
                        keyboardNavigation: false,
                        forceParse: false,
                        autoclose: true
 });
</script>