<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$blok 	= new blok();
$dev	= new devloper();
$idb	= $_POST['idb'];
//echo $idb;
$dataB	= $blok->bacaBlok($idb);
//echo $dataB['blok'];
	if($dataB['id_blok']> 0){
		$id_dev	= $dataB['id_dev'];
		$blok	= $dataB['blok'];
	}else{
		$id_dev	= '';
		$blok	= '';
	}
?> 
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script>
$(function () {
//ambil data developer di blok
	$("#id_dev").change(function(e){
		e.preventDefault();
            var id_dev = $("#id_dev").val();
			//alert (id_dev);
            $.ajax({
                url: "control/get_dev.php",
                data: "id_dev=" + id_dev,
                dataType: 'json',
                cache: false,
                success: function(data){
                    $("#tipe").html(data.tipe);
                    $("#t_luas").html(data.luas);
                }
            });
        });
		
		
});
</script>
<div class="panel-body">
    <form method="get" class="form-horizontal" role="form" id="form_blok">

        <div class="form-group">
            <div class="col-sm-8">
				<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="judul">
				<!--<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="id_blok" value="<?php echo kdauto2('ms_blok'); ?>">-->
				<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="id_blok" value="<?php echo $idb ?>">
				<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="username" value="<?php echo $_SESSION['username']?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-3 control-label">BLOK</label>
            <div class="col-sm-4">
				<input type="text" placeholder="Nama Blok" class="form-control input-sm" id="blok" value="<?php echo $blok ?>">
            </div>
        </div>
		<div class="form-group"><label class="col-sm-3 control-label">Developer</label>
            <div class="col-sm-9">
				<select id="id_dev" class="form-control m-b" name="account">
					<?php
						$dataD = $dev->bacaDevloper2($id_dev);
						if($dataB['id_blok']> 0){ ?>
							<option value="<?php echo $id_dev ?>"><?php echo $dataD['nm_dev'].' -- '.$dataD['nm_proyek'] ?></option>
					<?php } ?>
					<!--<option selected value="">Pilih Developer</option>-->
					<?php	
						$arrayDev = $dev->tampilDevloper();
						if(isset($arrayDev) && $arrayDev !=Null){
							foreach ($arrayDev as $data) {
					?>
					<option value="<?php echo $data['id_dev']?>"><?php echo $data['nm_dev'].' -- '.$data['nm_proyek']?></option>
					<?php 
							}
						}
					?>
				</select>
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Luas Lahan</label>
            <div class="col-sm-4">
				<label class="col-sm control-label" id="t_luas"></label>
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Tipe</label>
            <div class="col-sm-4">
				<label class="col-sm control-label" id="tipe"></label>
            </div>
        </div>
    </form>
</div>
<script>

    $(function(){

        $("#form_blok").validate({
            rules: {
                    judul: {
                    required: true,
                     
                },
                id_blok: {
                    required: true,
                    
                }
            },
            messages: {
                number: {
                    required: "(Please enter your phone number)",
                    number: "(Please enter valid phone number)"
                },
                last_name: {
                    required: "This is custom message for required",
                    minlength: "This is custom message for min length"
                }
            },
            submitHandler: function(form) {
                form.submit();
            },
            errorPlacement: function(error, element) {
                $( element )
                        .closest( "form" )
                        .find( "label[for='" + element.attr( "id" ) + "']" )
                        .append( error );
            },
            errorElement: "span",
        });


    });
</script>