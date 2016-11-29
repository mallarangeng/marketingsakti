<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$penjualan = new penjualan();
?>  
  <table id="datat_menu" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>No Penjualan</th>
								<th>Tanggal</th>
								<th>Proyek</th>
                                <th>Sales</th>
                                <th>Nama Konsumen</th>
								<th>Kavling</th>
								<th>harga Jual</th>
                                <th>Tot Bayar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody><?php
                            $c=0;
                            $arraypenjualan = $penjualan->tampilPenjualan();
                            if(isset($arraypenjualan) && $arraypenjualan !=NULL){
                                foreach($arraypenjualan as $data){
                        ?>
							<tr>	<td><?php echo $c=$c+1;?></td>
		                            <td><button class="detail-penjualan btn btn-default btn-xs" type="button" data-id="<?php echo $data['id_penjualan'] ?>"><i class="input-pembayaran fa fa-search-plus"></i></button> &nbsp;<?php echo $data['id_penjualan']?></td>
		                            <td><?php echo $data['tgl_booking']?></td>
		                            <td><?php echo $data['nm_proyek']?></td>
		                            <td><?php echo $data['nama']?></td>
		                            <td><?php echo $data['namaK']?></td>
                                    <td><?php echo $data['blok'].'/'.$data['no'].'/'.$data['tipe'];?></td>
                                    <td><?php echo rupiah ($data['harga_jual'])?></td>
                                    <td class="text-success font-bold"><a class="detail-pembayaran text-success font-bold" data-id="<?php echo $data['id_penjualan'] ?>" href=""><?php echo rupiah ($data['total_bayar'])?></a></td>
								<td>
									<button class="input-pembayaran btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_penjualan'] ?>"><i class="fa fa-dollar"></i></button>
									<button class="detail-pembayaran btn btn-default btn-xs" type="button" data-id="<?php echo $data['id_penjualan'] ?>"><i class="pe-7s-paperclip"></i></button>
									</td>
							</tr>
						<?php
								}
							}
						?>
						</tbody>
					</table>
<script>
$('#datat_menu').dataTable();
$(".input-pembayaran").click(function(e){
        e.preventDefault();
        $("#modal-pembayaran-add").modal('show');
        $(".modal-title").html('Tambah Data Pembayaran');
        $.post("view/pembayaran/pembayaran_form.php",
            {id_penjualan:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
$(".detail-penjualan").click(function(e){
        e.preventDefault();
        $("#modal-penjualan-detail").modal('show');
        $(".modal-title").html('Detail Penjualan');
        $.post("view/penjualan/penjualan_detail.php",
            {id_penjualan:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
$(".detail-pembayaran").click(function(e){
        e.preventDefault();
        $("#modal-pembayaran-detail").modal('show');
        $(".modal-title").html('Detail Pembayaran');
        $.post("view/pembayaran/pembayaran_data.php",
            {id_penjualan:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
</script>