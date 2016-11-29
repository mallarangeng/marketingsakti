<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$menu = new menu();
?>  
  <table id="datat_menu" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>ID Menu</th>
								<th>Titile</th>
								<th>Class</th>
								<th>Link</th>
								<th>Parent</th>
								<th>icon</th>
								<th>Urut</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$arrayMenu = $menu->tampilMenu();
							if(isset($arrayMenu) && $arrayMenu !=NULL){
								foreach($arrayMenu as $data){
						?>
							<tr>
								<td><?php echo $data['id_menu']?></td>
									<td><?php echo $data['title']?></td>
									<td><?php echo $data['folder']?></td>
									<td><?php echo $data['link']?></td>
									<td><?php echo $data['parent']?></td>
									<td class="center"><i class="fa <?php echo $data['icon']?>"></i> <span class="nav-label">--<?php echo $data['icon']?></span></td>
									<td class="center"><?php echo $data['urut']?></td>
								<td>
									<button class="ubah-menu btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_menu'] ?>"><i class="fa fa-edit"></i></button>
									<button class="btn btn-primary btn-xs" type="button" data-id="<?php echo $data['id_paket'] ?>"><i class="fa fa-check"></i></button>
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
$("#datat_menu").on("click",".ubah-menu",function(e){
        e.preventDefault();
		$("#modal-menu-add").modal('show');
        $(".modal-title").html('Ubah Menu');
        $.post("view/menu/menu_form.php",
            {idmenu:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
</script>