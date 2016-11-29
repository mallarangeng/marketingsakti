<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
session_start();
$db = new Database();
$db->connectMySQL();
$user = new user();
$idu = $_POST['idu'];
$username = $_POST['username'];
$datau  = $user->bacaUser($idu);
    if($datau['username']> 0){
        $id_jabatan= $datau['id_jabatan'];
        $password=$datau['password'];
        $email=$datau['email'];
        $fullname=$datau['fullname'];
        $blokir=$datau['blokir'];
        $picture=$datau['picture'];
    }else{
        $id_jabatan= '';
        $password= '';
        $email= '';
        $fullname= '';
        $blokir='';
        $picture='';
    }
?>

<div class="panel-body">
    <form method="get" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
			<label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Username" class="form-control input-sm" id="username" value="<?php echo $idu; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Fullname</label>
            <div class="col-sm-8">
				<input type="text" placeholder="Fullname" class="form-control input-sm" id="fullname" value="<?php echo $fullname; ?>">
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-6">
                    <select id="id_jabatan" class="form-control input-sm">
                            <option value="">Pilih Jabatan</option>
                            <?php
                            $arrayUser = $user->comboJabatan();
                            if(isset($arrayUser) && $arrayUser !=NULL){
                                foreach($arrayUser as $data){
                             ?>
                    <option value="<?php echo $data['id_jabatan']?>"><?php echo $data['jabatan']?></option>
                    <?php 
                            }
                        }
                    ?></select>
            </div>
        </div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
				<input type="text" placeholder="Email" class="form-control input-sm" id="email" value="<?php echo $email; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Blokir</label>
            <div class="col-sm-2">
                    <select id="blokir" class="form-control input-sm">
                            <option value="<?php echo $blokir; ?>"><?php echo $blokir; ?></option>
                            <option value="N">N</option>
                            <option value="Y">Y</option>
                    </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" placeholder="Password" class="form-control input-sm" id="password" value="<?php echo $password; ?>" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Picture</label>
            <div class="col-sm-6">
            <label class="btn btn-sm btn-success m-t-n-xs">
                <input type="file" name="picture" id="picture" accept="*/*" class="hide" required />
                <i class="fa fa-upload"></i>&nbsp;<span class="bold">Upload Foto</span>
                </label>
            </div>
        </div>
    </form>
</div>