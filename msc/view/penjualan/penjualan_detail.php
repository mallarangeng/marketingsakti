<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$penjualan = new penjualan();
$id_penjualan=$_POST['id_penjualan'];
$data = $penjualan->detailPenjualan($id_penjualan);
?>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 border-right">
                        <p class="text-success font-extra-bold">Data Konsumen</p>
                           <dl class="dl-horizontal">
                    <dt>Nama Konsumen</dt>
                    <dd><?php echo $data['namaK']; ?></dd>
                    <dt>Alamat</dt>
                    <dd><?php echo $data['alamatK']; ?></dd>
                    <dt>Nomor Telpon</dt>
                    <dd><?php echo $data['hpK']; ?></dd>
                    </dl>
                    </div>
                    <div class="col-lg-6 ">
                        <p class="text-success font-extra-bold">Data Sales</p>
                           <dl class="dl-horizontal">
                    <dt>Nama Sales</dt>
                    <dd><?php echo $data['nama']; ?></dd>
                    <dt>Alamat</dt>
                    <dd><?php echo $data['alamat']; ?></dd>
                    <dt>Nomor Telpon</dt>
                    <dd><?php echo $data['hp']; ?></dd>
                    </dl>
                        </p>
                    </div>
                </div>
            </div>
     <hr>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 border-right">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus
                        </p>
                    </div>
                    <div class="col-lg-6 ">
                        <p>
                            posuere lectus et, fringilla augue.
                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae  accumsan.
                        </p>
                    </div>
                </div>
            </div>
