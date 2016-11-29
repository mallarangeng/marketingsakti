<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$user = new user();
?>  
  <table id="datat_user" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Fullname</th>
								<th>Jabatan</th>
								<th>Email</th>
								<th>Blokir</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$c=0;
							$arrayUser = $user->tampilUser();
							if(isset($arrayUser) && $arrayUser !=NULL){
								foreach($arrayUser as $data){
						?>
							<tr>	<td><?php echo $c=$c+1;?></td>
									<td><?php echo $data['username']?></td>
									<td><?php echo $data['fullname']?></td>
									<td><?php echo $data['jabatan']?></td>
									<td><?php echo $data['email']?></td>
									
									<td class="center"><?php echo $data['blokir']?></td>
								<td>
								<button class="ubah-user btn btn-success btn-xs" type="button" data-id="<?php echo $data['username'] ?>"><i class="fa fa-edit"></i></button>
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
$('#datat_user').dataTable();
$(".ubah-user").click(function(e){
        e.preventDefault();
        $("#modal-user-add").modal('show');
        $(".modal-title").html('Ubah Data User');
        $.post("view/user/user_form.php",
            {idu:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
    });
</script>