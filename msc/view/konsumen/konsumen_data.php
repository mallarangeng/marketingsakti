<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$konsumen = new konsumen();
?>  
 
  <table id="datat_menu" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Konsumen</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Hp</th>
								<th>Email</th>
								<th>Urut</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
						<?php
						
							$arrayKonsumen = $konsumen->tampilKonsumen();
							if(isset($arrayKonsumen) && $arrayKonsumen !=NULL){
								foreach($arrayKonsumen as $data){
						?>
							<tr>	<td><?php echo $c=$c+1;?></td>
									<td><?php echo $data['id_konsumen']?></td>
									<td><?php echo $data['nama_konsumen']?></td>
									<td><?php echo $data['alamat']?></td>
									<td><?php echo $data['hp']?></td>
									<td><?php echo $data['email']?></td>						
									<td><?php echo $data['ket']?></td>
								<td>
									<button class="btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_menu'] ?>"><i class="fa fa-paste"></i></button>
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
$('#datat_menu').dataTable();
</script>