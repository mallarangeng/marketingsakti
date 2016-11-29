<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$blok = new blok();
?>  
  <table id="datat_blok" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>ID Blok</th>
								<th>BLOK</th>
								<th>Developer</th>
								<th>Nama proyek</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$arrayBlok = $blok->tampilBlok();
							if(isset($arrayBlok) && $arrayBlok !=NULL){
								foreach($arrayBlok as $data){
						?>
							<tr>
								<td><?php echo $data['id_blok']?></td>
									<td><?php echo $data['blok']?></td>
									<td><?php echo $data['nm_dev']?></td>
									<td><?php echo $data['nm_proyek']?></td>
									<td>
									<button class="ubah-blok btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_blok'] ?>"><i class="fa fa-edit"></i></button>	
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
$('#datat_blok').dataTable();
$(".ubah-blok").click(function(e){
        e.preventDefault();
		$("#modal-blok-add").modal('show');
        $(".modal-title").html('Ubah Data Blok');
        $.post("view/blok/blok_form.php",
            {idb:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
</script>