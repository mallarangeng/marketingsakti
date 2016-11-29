<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$pembayaran = new pembayaran();
$idj    = $_POST['idj'];
$dataJ  = $pembayaran->bacaJenispembayaran($idj);

    if($dataJ['id_jenis']> 0){
        $pembayaran_jenis = $dataJ['pembayaran_jenis'];
        $note   = $dataJ['note'];
    }else{
        $pembayaran_jenis = '';
        $note   = '';
    }
?>
              <form method="get">                
                 <div class="panel-body">
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Jenis Pembayaran</label>
                 <div class="col-sm-6">
                    <input type="hidden" id="id_jenis" class="form-control input-sm" value="<?php echo $idj ?>" readonly>
                    <input type="text" id="pembayaran_jenis" value="<?php echo $pembayaran_jenis ?>" class="form-control input-sm">
                    </div>
                </div><br>
                <div class="form-group">
            <label class="col-sm-4 control-label">Keterangan Jenis</label>
            <div class="col-sm-8">
             <textarea class="form-control" id="note"><?php echo $note ?></textarea>
            </div>
        </div><br>        
        </div>    
</form>