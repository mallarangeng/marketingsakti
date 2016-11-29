<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$pembayaran = new pembayaran();
#$id_penjualan    = $_POST['id_penjualan'];
?>  
  <table id="datat_menu" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Pembayaran</th>
								<th>ID Penjualan</th>
								<th>Tgl Bayar</th>
								<th>Tgl Tempo</th>
								<th>Jenis Pembayaran</th>
								<th>Jumlah Pembayaran</th>
								<th>Ket</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$c=0;
							$arrayPembayaran = $pembayaran->tampilPembayaran($id_penjualan);
							if(isset($arrayPembayaran) && $arrayPembayaran !=NULL){
								foreach($arrayPembayaran as $data){
						?>
							<tr>	<td><?php echo $c=$c+1;?></td>
									<td><?php echo $data['id_pembayaran']?></td>
									<td><?php echo $data['id_penjualan']?></td>
									<td><?php echo $data['tgl_bayar']?></td>
									<td><?php echo $data['tgl_tempo']?></td>
									<td><?php echo $data['pembayaran_jenis']?></td>
									<td align="righ"><?php echo rupiah ($data['jumlah_pembayaran'])?></td>
									<td><?php echo $data['ket_pembayaran']?></td>
								<td>
									<button class="ubah-pembayaran btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_pembayaran'] ?>"><i class="fa fa-edit"></i></button>
									</td>
							</tr>
						<?php
								}
							}
						?>
						</tbody>
					</table>



					<div class="row">
								<div class="col-sm-3">
                                    <div >
                                        <dl class="dl-horizontal ">
                                            <dt><span class="label label-success">Rekapitulasi Pembayaran</span></dt><dd></dd>
                                            	<?php
												$c=0;
												$arrayPembayaran = $pembayaran->hitungJenisPembayaran();
												if(isset($arrayPembayaran) && $arrayPembayaran !=NULL){
													foreach($arrayPembayaran as $data){
														$tot_pembayaran+=$data['total_jenis'];
												?>
                                            <dt><?php echo $data['pembayaran_jenis']?></dt><dd class="text-right"><?php echo rupiah ($data['total_jenis'])?></dd>
                                            		<?php
													}
												}
											?>
											<dt><span class="label label-success">Jumlah Total</span></dt><dd class="text-right"><strong><?php echo rupiah ($tot_pembayaran) ?></strong></dd>

                                        </dl>    
                                    </div> 
                                    </div>
                                </div>
                                 </div>
<script>
$('#datat_menu').dataTable();
$(".ubah-pembayaran").click(function(e){
        e.preventDefault();
        $("#modal-pembayaran-add").modal('show');
        $(".modal-title").html('Ubah Data Pembayaran');
        $.post("view/pembayaran/pembayaran_form.php",
            {idp:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
</script>