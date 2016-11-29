<?php 
	
	#Base Url dugunakan untuk pemanggilan url jangan lupa di rubah gan
	function base_url ()
		{
			#return sprintf("http://localhost/msc/msc/");#page garis miring ya setelah url
			return sprintf("http://localhost/msc/msc/");#page garis miring ya setelah url
			#panggil fungsi ini dengan cara di (echo base_url();)
		}
		//membuat fungsi rupiah
	function rupiah($nilai, $pecahan = 0) 
		{
    return number_format($nilai, $pecahan, ',', '.');
		}
	//ganti sendiri formatnya, boros coding punyamu mang
	function rupiah2($nilai)
	{
		return number_format($nilai, 0, ',', '.');
	}
	function DateToIndo($date) 
		{ 	// fungsi atau method untuk mengubah tanggal ke format indonesia
			// variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
			$BulanIndo = array("Jan", "Feb", "Mar","Apr", "Mei", "Jun","Jul", "Ags", "Sep","Okt", "Nov", "Des");
			$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
			$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
			$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
			$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
			return($result);
		}
	// Konvesi yyyy-mm-dd -> dd-mm-yyyy
	function tgl_eng_to_ind($tgl) {
		$tgl_ind=substr($tgl,8,2)."-".substr($tgl,5,2)."-".substr($tgl,0,4);
		return $tgl_ind;
	}
	function tglSkrg(){
	date_default_timezone_set('Asia/Jakarta');
	$tgl	= date("Y-m-d");
	return $tgl;
	}
	function userSes(){
	$uses	= $_SESSION['username'];
	return $uses;
	}
	//kode auto 
	function kdauto($tabel, $inisial){
	$struktur	= mysql_query("SELECT * FROM $tabel");
	$field		= mysql_field_name($struktur,0);
	$panjang	= mysql_field_len($struktur,0);

 	$qry	= mysql_query("SELECT max(".$field.") FROM ".$tabel);
 	$row	= mysql_fetch_array($qry); 
 	if ($row[0]=="") {
 		$angka=0;
	}
 	else {
 		$angka		= substr($row[0], strlen($inisial));
 	}
	
 	$angka++;
 	$angka	=strval($angka); 
 	$tmp	="";
 	for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";	
	}
 	return $inisial.$tmp.$angka;
}

function kdauto2($tabel){
  $struktur = mysql_query("SELECT * FROM $tabel");
  $field    = mysql_field_name($struktur,0);//mengetahui nama kolom pada kolom ke 0


  $qry  = mysql_query("SELECT count(".$field.") FROM ".$tabel);//jumlah terbesar
  $row  = mysql_fetch_array($qry); 
  if ($row[0]=="") {
    $angka=1;
  }
  else {
    $angka    = $row[0]+1;
  } 
  return $angka;
}
//kode use : id_penjualan,id_dev,id_sales,id_konsumen
function kdauto3($tabel){
  $struktur = mysql_query("SELECT * FROM $tabel ");
  $field    = mysql_field_name($struktur,0);//mengetahui nama kolom pada kolom ke 0
  $qry  = mysql_query("SELECT max(".$field.") FROM ".$tabel." WHERE LEFT(input_on,7) = LEFT(CURDATE(),7)");//jumlah terbesar
  $row  = mysql_fetch_array($qry); 
  if ($row[0]=="") {
    $angka=1;
  }
  else {
    $angka    = $row[0]+1;
  }
  $nilai 	= '00'.$angka;
  date_default_timezone_set('Asia/Jakarta');
  $tmp 		= date("Ym");
  
  return $tmp.substr($nilai,-3);
  //return $angka;
}
?>