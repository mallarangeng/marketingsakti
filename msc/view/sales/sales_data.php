<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$sales = new sales();
?>  
  <table id="datat_sales" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>ID Sales</th>
								<th>Nama</th>
								<th>HP</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>AKSI</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$arraySales = $sales->tampilSales();
							if(isset($arraySales) && $arraySales !=NULL){
								foreach($arraySales as $data){
						?>
							<tr>
								<td><?php echo $data['id_sales']?></td>
									<td><?php echo $data['nama']?></td>
									<td><?php echo $data['hp']?></td>
									<td><?php echo $data['email']?></td>
									<td class="center"><?php echo $data['alamat']?></td>
								<td>
								<button class="ubah-sales btn btn-success btn-xs" type="button" data-id="<?php echo $data['id_sales'] ?>"><i class="fa fa-edit"></i></button>
								<button class="btn btn-primary btn-xs" type="button" data-id="<?php echo $data['id_sales'] ?>"><i class="fa fa-check"></i></button>
								</td>
							</tr>
						<?php
								}
							}
						?>
						</tbody>
					</table>
<script>
$('#datat_sales').dataTable();
$("#datat_sales").on("click",".ubah-sales",function(e){
        e.preventDefault();
		$("#modal-sales-add").modal('show');
        $(".modal-title").html('Ubah Sales');
        $.post("view/sales/sales_form.php",
            {ids:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
</script>