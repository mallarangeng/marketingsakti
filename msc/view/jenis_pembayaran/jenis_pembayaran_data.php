<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$pembayaran = new pembayaran();
?>  
  <table id="datat_menu" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Id Pembayaran</th>
								<th>Nama Jenis Pembayaran</th>
								<th>Note</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$c=0;
							$arrayPembayaran = $pembayaran->tampilJenisPembayaran();
							if(isset($arrayPembayaran) && $arrayPembayaran !=NULL){
								foreach($arrayPembayaran as $data){
						?>
							<tr>	<td><?php echo $c=$c+1;?></td>
									<td><?php echo $data['id_jenis']?></td>
									<td><?php echo $data['pembayaran_jenis']?></td>
									<td><?php echo $data['note']?></td>
							<td>
									<button class="ubah-jenis btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_jenis'] ?>"><i class="fa fa-edit"></i></button>
									<button class="btn btn-primary btn-xs" type="button" data-id="<?php echo $data['id_konsumen'] ?>"><i class="fa fa-check"></i></button>
									</td>
							</tr>
						<?php
								}
							}
						?>
						</tbody>
					</table>
<script>
$(".ubah-jenis").click(function(e){
        e.preventDefault();
        $("#modal-jenis-pembayaran-add").modal('show');
        $(".modal-title").html('Ubah Jenis Pembayaran');
        $.post("view/jenis_pembayaran/jenis_pembayaran_form.php",
            {idj:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
</script>