<?php
$posisi=array(
'Utara',
'Timur',
'Selatan', 
'Barat',
);
?>

<select name="posisi">
<option value="">Plih Posisi</option>
<?php
foreach($posisi as $key => $value):
echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
endforeach;
?>
</select>