<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$kavling = new kavling();
?>
<div class="modal fade modal-success" id="modal-jual" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="color-line"></div>
							<!--
                            <div class="modal-header">
                                <h4 class="modal-title">Modal title</h4>
                            </div>
							-->
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-success" id="simpan-jual-kav">Jual Kavling</button>
                            </div>
                        </div>
                    </div>
                </div> 
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                        <a class="closebox"><i class="fa fa-times"></i></a>
                    </div>
                    Data Penjualan Kavling
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control input-sm m-b-md" id="filter" placeholder="Search in table">
                    <table id="foo_penjualan" class="footable table table-stripped toggle-arrow-tiny" data-page-size="15" data-filter=#filter>
                        <thead>
                        <tr>
                            <th>Developer</th>
                            <th>Proyek</th>
                            <th>Kavling</th>
                            <th>Harga Jual</th>
                            <th>Harga Kelebihan</th>
                            <th>Status</th>
                            <th data-hide="all"></th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
							$arrayKavling = $kavling->tampilKavlingJual();
							if(isset($arrayKavling) && $arrayKavling !=NULL){
								foreach($arrayKavling as $data){
								if($data['id_status']=='1'){
									$cb='label-success';
									$fa='fa fa-circle';
								}else if($data['id_status']=='2'){
									$cb='label-danger';
									$fa='pe-7s-key';
								}
						?>
                        <tr>
                            <td><?php echo $data['nm_dev'];?></td>
                            <td><?php echo $data['nm_proyek'];?></td>
                            <td><?php echo $data['blok'].'/'.$data['no'].'/'.$data['tipe'];?></td>
                            <td><?php echo rupiah($data['harga_jual']);?></td>
                            <td><?php echo rupiah($data['harga_kel']);?></td>
                            <td>
								<div class="tooltip-demo">
                                    <span class="label <?php echo $cb; ?> pull-left"><?php echo $data['status'];?></span> <span data-toggle="tooltip" data-placement="right" title="<?php echo $data['ket_status'];?>"> <i class="pe-7s-info text-info"> </i></span>
                                </div>
                            </td>
							<td>
                                <div class="row">
                                 <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <dl class="dl-horizontal" >
                                            <dt><span class="label label-success">Kavling</span></dt><dd></dd>
                                            <dt>Luas Tanah</dt><dd><?php echo $data['luas_tanah'];?></dd>
                                            <dt>Luas bangunan</dt><dd><?php echo $data['luas_bangunan'];?></dd>
                                            <dt>Status Bangunan</dt><dd><?php echo $data['status_bangunan'];?></dd>
                                            <dt>Posisi Bangunan</dt><dd><?php echo $data['posisi_bangunan'];?></dd>
                                        </dl>
                                        <dl class="dl-horizontal">
                                           <dt><span class="label label-success">Proyek</span></dt><dd></dd>
                                            <dt>Luas Lahan</dt><dd><?php echo $data['tot_luas_lahan'];?></dd>
                                            <dt>Luas Tipe Perumahan</dt><dd><?php echo $data['type_perumahan'];?></dd>
                                            <dt>Izin Lokasi</dt><dd><?php echo $data['izin_lokasi'];?></dd>
                                            <dt>IMB</dt><dd><?php echo $data['imb'];?></dd>
                                            <dt>Sertifikat Induk</dt><dd><?php echo $data['sert_induk'];?></dd>
                                             

                                        </dl>
                                        <dl >
                                           <dt>Alamat</dt><dd><?php echo $data['alamat_proyek'];?></dd>
                                        </dl>
                                    </div>
                                    <div class="col-sm-8" width="100%">

                                        <table class="footable table table-stripped toggle-arrow-tiny">

                                        <table class="table table-condensed" >

                                            <thead>
                                            <tr>
                                                <th width="22%">Rincian biaya kavling</th>
                                                <th width="45%"></th>
                                                <th width="13%"></th>
                                                <th width="9%"></th>
                                                <th width="11%">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Kelebihan tanah</td>
                                                <td></td>
                                                <td><?php echo $data['kel'].' m2'?></td>
                                                <td><?php echo rupiah($data['harga_kel'])?></td>
                                                <td><?php echo rupiah($data['harga_kel']*$data['kel'])?></td>
                                            </tr>
                                            <tr>
                                                <td>Harga Jual</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo rupiah($data['harga_jual'])?></td>
                                            </tr>
                                            <tr>
                                                <td>Kewajiban</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="10"></td>
                                                <td>Uang Muka Standar</td>
                                                <td><?php echo rupiah($data['um_std'])?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Diskon uang Muka</td>
                                                <td><?php echo rupiah($data['diskon'])?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Total Uang Muka</td>
                                                <td></td>
                                                <td><?php echo rupiah($data['diskon1'])?></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Uang Tanda Jadi</td>
                                                <td></td>
                                                <td><?php echo rupiah($data['utj'])?></td>
                                                <td></td>
                                            </tr>
											<tr>
                                                <td>Biya Strategis</td>
                                                <td></td>
                                                <td><?php echo rupiah($data['strategis'])?></td>
                                                <td></td>
                                            </tr>
											<tr>
                                                <td>Biaya Administrasi</td>
                                                <td></td>
                                                <td><?php echo rupiah($data['adm'])?></td>
                                                <td></td>
                                            </tr>
											<tr>
                                                <td>Biaya Administrasi</td>
                                                <td></td>
                                                <td><?php echo rupiah($data['biaya_proses'])?></td>
                                                <td></td>
                                            </tr>
											<tr>
                                                <td>Biaya Materai</td>
                                                <td></td>
                                                <td><?php echo rupiah($data['materai'])?></td>
                                                <td></td>
                                            </tr>
											<tr>
                                                <td>Diskon kewajiban</td>
                                                <td></td>
                                                <td><?php echo rupiah($data['diskon2'])?></td>
                                                <td></td>
                                            </tr>
											<tr >
                                                <td class="tebal hitam">Total Kewajiban</td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo rupiah($data['total_kewajiban'])?></td>
                                            </tr>
											<tr class="success tebal hitam">
                                                <td class="tebal">Total Biaya </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="tebal"><?php echo rupiah($data['total_biaya'])?> </td>
                                                
                                            </tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
                                                <td valign="center"><button class="jual-kav btn btn-success " type="button" data-id="<?php echo $data['id_kavling'] ?>"><i class="pe-7s-cart"></i> <span class="bold">Juals</span></button></td>
											</tr>
											</tbody>
                                            
                                        </table>
                                    </div>
                                    </div>
                                </div>
							</td>
                        </tr>
						<?php
								}
							}
						?>
	
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
