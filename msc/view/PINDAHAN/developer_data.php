<?php
include'../../class/msc_class.php';
include'../../class/msc_function.php';
$db = new Database();
$db->connectMySQL();
$devloper = new Devloper();
?>

                 <table id="example2" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kavling</th>
                        <th>Nama Devloper</th>
                        
                        <th>Alamat Proyek</th>
                        <th>Kat Proyek</th>
                        
                        <th>Type</th>
                        <th>Izin Lokasi</th>
                            
                        <th>Sert Induk</th>
                        
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                               <?php
								$c=0;
                                $arrayDevloper=$devloper->tampilDevloper();
                                if (count($arrayDevloper)) {
                                foreach($arrayDevloper as $data) {
                                ?>
                    <tr>
                        <td><?php echo $c=$c+1;?></td>
                        <td><a href="">Kavling</a></td>
                        <td><?php echo $data['nm_dev'] ?><br>
                        <font class="kecil">Nama Proyek : <?php echo $data['nm_proyek'] ?></font>
                        </td>
                        <td><?php echo $data['alamat_proyek'] ?><br>
                            <font class="kecil">Telp : <?php echo $data['no_telpon'] ?></font>
                        </td>
                        <td><?php echo $data['kat_proyek'] ?><br>
                            <font class="kecil">Luas Lahan : <?php echo $data['tot_luas_lahan'] ?></font>
                        </td>
                        
                        <td><?php echo $data['type_perumahan'] ?></td>
                        <td><?php echo $data['izin_lokasi'] ?><br>
                             <font class="kecil">IMB : <?php echo $data['imb'] ?></font>
                        </td>
                        
                        <td><?php echo $data['sert_induk'] ?><br>
                            <font class="kecil">PBB : <?php echo $data['pbb'] ?></font>

                        </td>
                        
                        <td>
                            <a href="<?php echo base_url() ?>index.php?r=developer&pg=dev_edit&id_dev=<?php echo $data['id_dev'];?>&aksi=edit"><button class="btn btn-success btn-xs" type="button"><i class="fa fa-paste"></i></button></a>
                            
                            <button class="btn btn-primary btn-xs" type="button" data-id="<?php echo $data['id_konsumen'] ?>"><i class="fa fa-check"></i></button>
                            
                        </td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                    </tbody>
                </table>