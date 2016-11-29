<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$menu = new menu();
$idmenu = $_POST['idmenu'];
//echo $ids;
$dataMenu	= $menu->bacaMenu($id_menu);

	if ($dataMenu['id_menu']> 0) {
		$title	= $dataMenu['title'];
		$hp		= $dataMenu['hp'];
		$email	= $dataMenu['email'];
		$alamat	= $dataMenu['alamat'];
	}else{
		$nama	= '';
		$hp		= '';
		$email	= '';
		$alamat	= '';
	}
?>
 
<div class="panel-body">
    <form method="get" class="form-horizontal">

        <div class="form-group">
			<label class="col-sm-2 control-label">Title</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Judul menu" class="form-control input-sm" id="judul">
				<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="id_menu" value="<?php echo kdauto2('ms_menu'); ?>">
				<input type="hidden" placeholder="Judul menu" class="form-control input-sm" id="username" value="<?php echo $_SESSION['username']?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Class</label>
            <div class="col-sm-8">
				<input type="text" placeholder="link folder" class="form-control input-sm" id="folder">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Link</label>
            <div class="col-sm-8">
				<input type="text" placeholder="link nama file" class="form-control input-sm" id="link">
            </div>
        </div>
		<div class="form-group"><label class="col-sm-2 control-label">Select</label>
            <div class="col-sm-6">
				<select id="parent" class="form-control m-b" name="account">
					<option selected value="0">0</option>
					<?php	
						$arrayParent = $menu->comboParent();
						if(isset($arrayParent) && $arrayParent !=Null){
							foreach ($arrayParent as $data) {
					?>
					<option value="<?php echo $data['id_menu']?>"><?php echo $data['id_menu'].'--'.$data['title']?></option>
					<?php 
							}
						}
					?>
				</select>
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Icon</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Judul menu" class="form-control input-sm" id="icon">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Urutan</label>
            <div class="col-sm-4">
				<input type="text" placeholder="Judul menu" class="form-control input-sm" id="urut">
            </div>
        </div>
        <div class="hr-line-dashed"></div>
    </form>
</div>