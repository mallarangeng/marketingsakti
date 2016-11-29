<?php
include'../class/msc_class.php';
include'../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$devloper = new Devloper();
$kavling = new Kavling();
?>

<div class="col-lg-12">
        <div class="hpanel">
            <div class="panel-heading">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                DATA STOK KAVLING
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                 <table cellpadding="1" id="example2" cellspacing="1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>N</th>
                        <th>Blok</th>
                        <th>No</th>
                        <th>Type</th>
                        <th>Kel Tanah</th>
                        <th>Hrg Kel</th>
                        <th>Status</th>
                        <th>L Tanah</th>
                        <th>L Bgn</th>
                        <th>Posisi Bgn</th>    
                        <th>Harga Brosur</th>
                        <th>Harga Cash</th>
                        <th>Harga Jual</th>
                        <th>UM Std</th>
                        <th>Diskon</th>
                        <th>MK</th>
                        <th>CASH</th>
                        <th>Utj</th>
                        <th>U.M</th>
                        <th>TOTAL KEL</th>
                        <th>Strgs</th>
                        <th>Bphtb</th>
                        <th>Adm</th>
                        <th>Biaya Proses</th>
                        <th>Materai</th>
                        <th>Diskon II</th>
                        <th>Catt</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                               <?php
							    $c=0;
                                $arrayKavling=$kavling->tampilKavlingAll();
                                if (count($arrayKavling)) {
                                foreach($arrayKavling as $data) {                             
                                ?>
                    <tr>
                        <td><?php echo $c=$c+1;?></td>
                        <td><?php echo $data['blok'] ?></td>
                        <td><?php echo $data['no'] ?></td>
                        <td><?php echo $data['tipe'] ?></td>
                        <td><?php echo $data['kel'] ?></td>
                        <td><?php echo $data['harga_kel']>0 ?rupiah($data['harga_kel']):'-'; ?></td>
                        <td><?php echo $data['status_bangunan'] ?></td>
                        <td><?php echo $data['luas_tanah']>0 ?rupiah($data['luas_tanah']):'-'; ?></td>
                        <td><?php echo $data['luas_bangunan']>0 ?rupiah($data['luas_bangunan']):'-'; ?></td>
                        <td><?php echo $data['posisi_bangunan'] ?></td>
                        <td><?php echo $data['harga_brosur']>0 ?rupiah($data['harga_brosur']):'-'; ?></td>
                        <td><?php echo $data['harga_cash']>0 ?rupiah($data['harga_cash']):'-'; ?></td>
                        <td><?php echo $data['harga_jual']>0 ?rupiah($data['harga_jual']):'-'; ?></td>
                        <td><?php echo $data['um_std']>0 ?rupiah($data['um_std']):'-'; ?></td>
                        <td><?php echo $data['diskon']>0 ?rupiah($data['diskon']):'-'; ?></td>
                        <td><?php echo  rupiah ($kavling->makKpr( $data['harga_jual'], $data['um_std'])); ?></td>
                        <td><?php echo $data['harga_jual']>0 ?rupiah($data['harga_jual']):'-'; ?></td>
                        <td><?php echo $data['utj']>0 ?rupiah($data['utj']):'-'; ?></td>
                        <td><?php echo rupiah ($data['um_std']-$data['diskon']) ?></td>
                        <td align="right"><?php echo rupiah ($data['kel']*$data['harga_kel']) ?></td>
                        <td><?php echo $data['strategis']>0 ?rupiah($data['strategis']):'-'; ?></td>
                        <td></td>
                        <td><?php echo $data['adm']>0 ?rupiah($data['adm']):'-'; ?></td>
                        <td><?php echo $data['biaya_proses']>0 ?rupiah($data['biaya_proses']):'-'; ?></td>
                        <td><?php echo $data['materai']>0 ?rupiah($data['materai']):'-'; ?></td>
                        <td><?php echo $data['diskon2']>0 ?rupiah($data['diskon2']):'-'; ?></td>
                        <td><?php echo $data['note'] ?></td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                    </tbody>
                </table>
                    </div>

            </div>
        </div>
    </div>