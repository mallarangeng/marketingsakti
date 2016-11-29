<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$kons = new konsumen();
$kavling = new kavling();
$sales = new sales();
$id=$_POST['id'];
$idk=$_POST['idk'];
//echo $idk;
$data = $kavling->bacaKavlingJ($id);
$dataK = $kons->bacaKonsumen($idk);
?>

<div class="row">
	<div class="panel-body">
        <div class="row">
			<div class="panel-body">
				<div class="col-lg-6 border-right">
					<div class="form-group"><label class="col-sm-3 control-label">Konsumen</label>
						<div class="col-sm-9">
							<select id="id_kon" class="form-control m-b" name="account">
								<option selected value="">Pilih Konsumen</option>
								<?php	
									$arrayKons = $kons->tampilKonsumen();
									if(isset($arrayKons) && $arrayKons !=Null){
										foreach ($arrayKons as $dataK) {
								?>
								<option value="<?php echo $dataK['id_konsumen']?>"><?php echo $dataK['nama'].' -- '.$dataK['id_konsumen']?></option>
								<?php 
										}
									}
								?>
							</select>
							<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="input_by" value="<?php echo $_SESSION['username']?>">
							<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="id_pjl" value="<?php echo kdauto3('ms_penjualan'); ?>">
							<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="id_kav" value="<?php echo $data['id_kavling']; ?>">
						</div>
					</div>
					<div class="form-group"><label class="col-sm-3 control-label">Tgl Booking</label>
						<div class="col-sm-9">
							<input id="tgl_booking" type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group"><label class="col-sm-3 control-label">Sales</label>
						<div class="col-sm-9">
							<select id="id_sal" class="form-control m-b" name="account">
								<option selected value="">Pilih Sales</option>
								<?php	
									$arraySal = $sales->tampilSales();
									if(isset($arraySal) && $arraySal !=Null){
										foreach ($arraySal as $dataS) {
								?>
									<option value="<?php echo $dataS['id_sales']?>"><?php echo $dataS['nama'].' -- '.$dataS['id_sales']?></option>
								<?php
										}
									}
								?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="hpanel">
				<div class="panel-body">
					<div class="col-lg-6 border-right">
                        <dl>
							<dt><h4 class="font-bold">Kavling</h4></dt>
							<dd><?php echo $data['blok'].'/'.$data['no'].'/'.$data['tipe']; ?></dd>
							<dd><?php echo $data['nm_proyek'];?></dd>
							<dd><?php echo $data['alamat_proyek'];?></dd>
							<dt>Alamat</dt>
							<dd><?php echo $data['nm_dev'];?></dd>
						</dl>
                    </div>
                    <div class="col-lg-6 ">
                        <dl class="dl-horizontal">
							<dt><h4 class="font-bold">Biaya</h4></dt>
							<dd></dd>
							<dt>Kelebihan Tanah</dt>
							<dd id="harga_k"><?php echo $data['harga_kel']*$data['kel']?></dd>
							<dt>Harga Jual</dt>
							<dd id="harga_j"><?php echo $data['harga_jual']?></dd>
							<dt>Total Kewajiban</dt>
							<dd id="total_k"><?php echo $data['total_kewajiban']?></dd>
							<dt>Total Biaya</dt>
							<dd><?php echo $data['total_biaya']?></dd>
						</dl>
                    </div>
				</div>
			</div>
        </div>
    </div>
</div>

<script>
$('#tgl_booking').datepicker({
						format: 'yyyy-mm-dd',
						keyboardNavigation: false,
						forceParse: false,
						autoclose: true
					});
</script>