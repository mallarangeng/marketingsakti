$(function () {
	//modal jual kavling
		//$("#data-menu").load(main);
		$(".jual-kav").click(function(e){
        e.preventDefault();
        //var idk = $("#idk").val();
        //alert (idk);
        
		$("#modal-jual").modal('show');
        $(".modal-title").html('Penjualan Kavling');
        $.post("view/kavling/jual_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
	
		//simpan jual kavling
	$("#simpan-jual-kav").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/penjualan.php"
		var id_kon = $("#id_kon").val();
		var id_sal = $("#id_sal").val();
		if (id_kon==""){
			alert ("Anda belum memilih data kosnsumen");
			return false;
		}
		if (id_sal==""){
			alert ("Anda belum memilih data Sales");
			return false;
		}
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value$id_pjl,$id_kon, $id_kav, $id_sta, $id_sal, $harga_k,$harga_j, $total_k, $tgl_booking,$status_beli,$input_by, $input_on
		var id_pjl = $("#id_pjl").val();
		//var id_kon = $("#id_kon").val();
        var id_kav = $("#id_kav").val();
        var id_sta = $("#id_sta").val();
        //var id_sal = $("#id_sal").val();
        var harga_k  = $("#harga_k").text();
        var harga_j  = $("#harga_j").text();
        var total_k = $("#total_k").text();
        var tgl_booking  = $("#tgl_booking").val();
        var status_beli  = $("#status_beli").val();
        var input_by  = $("#input_by").val();
        var input_on  = $("#input_on").val();
		//alert (harga_k);
		//post tanpa ajax
        //$.post(url,{judul: judul, link: link, parent: parent, icon: icon, urutan: urutan},function(data){
         
        //$('#modal-menu-add').modal('hide'); 
		//$("#hasil").html(data);
		//$("#data-menu").load('view/menu/menu_data.php');
        //});
		$.ajax({
                  url: 'control/penjualan.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_pjl='+id_pjl+'&id_kon='+id_kon+'&id_kav='+id_kav+'&id_sta='+id_sta+'&id_sta='+id_sta+'&id_sal='+id_sal+'&harga_k='+harga_k+'&harga_j='+harga_j+'&total_k='+total_k+'&tgl_booking='+tgl_booking+'&status_beli='+status_beli+'&input_by='+input_by+'&input_on='+input_on,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
					 
                    $('#hasil').html(data);
					//$("#data-menu").load("view/menu/menu_data.php");
					$('#modal-jual').modal('hide');
					//$(location).attr('href','?r=penjualan&pg=penjualan');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });
	//modal tambah menu
	var main = "view/menu/menu_data.php";
	$("#data-menu").load(main);
		$(".tambah-menu").click(function(e){
        e.preventDefault();
		$("#modal-menu-add").modal('show');
        $(".modal-title").html('Tambah menu');
        $.post("view/menu/menu_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
	
	//simpan menu
	$("#simpan-menu").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/menu.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
		var id_menu = $("#id_menu").val();
		var username = $("#username").val();
        var judul = $("#judul").val();
        var folder = $("#folder").val();
        var link = $("#link").val();
        var parent  = $("#parent").val();
        var icon  = $("#icon").val();
        var urut  = $("#urut").val();
		//alert (urut);
		//post tanpa ajax
        //$.post(url,{judul: judul, link: link, parent: parent, icon: icon, urutan: urutan},function(data){
         
        //$('#modal-menu-add').modal('hide'); 
		//$("#hasil").html(data);
		//$("#data-menu").load('view/menu/menu_data.php');
        //});
		$.ajax({
                  url: 'control/menu.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_menu='+id_menu+'&username='+username+'&judul='+judul+'&folder='+folder+'&link='+link+'&parent='+parent+'&icon='+icon+'&urut='+urut,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
					 
                    $('#hasil').html(data);
					$("#data-menu").load("view/menu/menu_data.php");
					$('#modal-menu-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });


    var main = "view/konsumen/konsumen_data.php";
    $("#data-konsumen").load(main);
        $(".tambah-konsumen").click(function(e){
        e.preventDefault();
        //memanggil modal untuk konsumen
        $("#modal-konsumen-add").modal('show');
        $(".modal-title").html('Tambah Konsumen');
        $.post("view/konsumen/konsumen_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
    //simpan menu
    $("#simpan-konsumen").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/konsumen.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
        var id_konsumen = $("#id_konsumen").val();
        var nama = $("#nama").val();
        var thn = $("#thn").val();
        var bln = $("#bln").val();
        var tgl = $("#tgl").val();
        var jenis_kel = $("#jenis_kel").val();
        var alamat = $("#alamat").val();
        var hp = $("#hp").val();
        var email  = $("#email").val();
        var ket  = $("#ket").val();
	

        var ktp  = $("#ktp").val();
        var ft  = $("#ft").val();
        var kk  = $("#kk").val();
        var s_nikah  = $("#s_nikah").val();
        var skbmr  = $("#skbmr").val();
        var npwp  = $("#npwp").val();
        var spt  = $("#spt").val();
        var rek_listrik  = $("#rek_listrik").val();
        var sk_skdu  = $("#sk_skdu").val();
        var siup  = $("#siup").val();
        var f_btn  = $("#f_btn").val();
        var f1  = $("#f1").val();
        var f4  = $("#f4").val();
        var a1  = $("#a1").val();
        var e1  = $("#e1").val();
        var e2  = $("#e2").val();
        var sp_listrik  = $("#sp_listrik").val();
        var input_on  = $("#input_on").val();
        var input_by  = $("#input_by").val();
        var edit_on  = $("#edit_on").val();
        var edit_by  = $("#edit_by").val();
        var del_on  = $("#del_on").val();
        var del_by  = $("#del_by").val();
        var del  = $("#del").val();
        

        //$.post(url,{judul: judul, link: link, parent: parent, icon: icon, urutan: urutan},function(data){
         
        //$('#modal-menu-add').modal('hide'); 
        //$("#hasil").html(data);
        //$("#data-menu").load('view/menu/menu_data.php');
        //});
        $.ajax({
                  url: 'control/konsumen.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_konsumen='+id_konsumen+'&nama='+nama+'&thn='+thn+'&bln='+bln+'&tgl='+tgl+'&jenis_kel='+jenis_kel+'&alamat='+alamat+'&hp='+hp+'&email='+email+'&ket='+ket+'&ktp='+ktp+'&ft='+ft+'&kk='+kk+'&s_nikah='+s_nikah+'&skbmr='+skbmr+'&npwp='+npwp+'&spt='+spt+'&rek_listrik='+rek_listrik+'&sk_skdu='+sk_skdu+'&siup='+siup+'&f_btn='+f_btn+'&f1='+f1+'&f4='+f4+'&a1='+a1+'&e1='+e1+'&e2='+e2+'&sp_listrik='+sp_listrik+'&input_on='+input_on+'&input_by='+input_by+'&edit_on='+edit_on+'&edit_by='+edit_by+'&del_by='+del_by+'&del_on='+del_on+'&del='+del,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil').html(data);
                    $("#data-konsumen").load("view/konsumen/konsumen_data.php");
                    $('#modal-konsumen-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });	
		//modal tambah sales
	var main = "view/sales/sales_data.php";
	$("#data-sales").load(main);
		$(".tambah-sales").click(function(e){
        e.preventDefault();
		$("#modal-sales-add").modal('show');
        $(".modal-title").html('Tambah sales');
        $.post("view/sales/sales_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
	
		//simpan sales
	$("#simpan-sales").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/sales.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
		var id_sales = $("#id_sales").val();
		var nama = $("#nama").val();
        var hp = $("#hp").val();
        var email = $("#email").val();
        var alamat  = $("#alamat").val();
		
		//post tanpa ajax
        //$.post(url,{judul: judul, link: link, parent: parent, icon: icon, urutan: urutan},function(data){
         
        //$('#modal-menu-add').modal('hide'); 
		//$("#hasil").html(data);
		//$("#data-menu").load('view/menu/menu_data.php');
        //});
		
		$.ajax({
                  url: 'control/sales.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_sales='+id_sales+'&nama='+nama+'&hp='+hp+'&email='+email+'&alamat='+alamat,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
					 
                    $('#hasil-sales').html(data);
					$("#data-sales").load("view/sales/sales_data.php");
					$('#modal-sales-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });
	
	//tambah blok
	var main = "view/blok/blok_data.php";
	$("#data-blok").load(main);
		$(".tambah-blok").click(function(e){
        e.preventDefault();
		$("#modal-blok-add").modal('show');
        $(".modal-title").html('Tambah Blok');
        $.post("view/blok/blok_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
        //tambahan hendri 
        //tambahan hendri
	
	//ambil data developer di blok
	/*$("#dev").click(function(e){
		e.preventDefault();
            var id_dev = '4';
			alert (id_dev);
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
        });*/
	/*$("#test").click(function(e){
        e.preventDefault();
		alert('dsdsd');
		$('#modal-blok-add').modal('hide');
		$("#modal-blok-add").modal('show');
        $(".modal-title").html('Tambah Blok');
        $.post("view/blok/blok_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });*/
	
	//batal blok
	$("#batal-simpan-blok").click(function(e){
        //alert("sd");
		$(location).attr('href','?r=blok&pg=blok');
        
        
    });
	//simpan blok
	$("#simpan-blok").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/blok.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
		var id_blok = $("#id_blok").val();
		var blok = $("#blok").val();
        var id_dev = $("#id_dev").val();
		
		$.ajax({
                  url: 'control/blok.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_blok='+id_blok+'&blok='+blok+'&id_dev='+id_dev,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
					 
                    $('#hasil-blok').html(data);
					//$("#data-blok").load("view/blok/blok_data.php");
					$(location).attr('href','?r=blok&pg=blok');
					$('#modal-blok-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });
        //modal user
    var main = "view/user/user_data.php";
    $("#data-user").load(main);
        $(".tambah-user").click(function(e){
        e.preventDefault();
        $("#modal-user-add").modal('show');
        $(".modal-title").html('Tambah User');
        $.post("view/user/user_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });
    //simpan User
    $("#simpan-user").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/user.php"
        //cara1 ambil value
        //var vSwitch = $('input:text[name=swtch]').val();

        //cara2 ambil value
        var username = $("#username").val();
        var id_jabatan = $("#id_jabatan").val();
        var password = $("#password").val();
        var email = $("#email").val();
        var fullname = $("#fullname").val();
        var blokir = $("#blokir").val();
        var picture = $("#picture").val();
        
        
        $.ajax({
                  url: 'control/user.php',
                  type: 'GET',
                  data: 'aksi=tambah&username='+username+'&id_jabatan='+id_jabatan+'&password='+password+'&email='+email+'&fullname='+fullname+'&blokir='+blokir+'&picture='+picture,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil-user').html(data);
                    $("#data-user").load("view/user/user_data.php");
                    $('#modal-user-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });

    var main = "view/pembayaran/pembayaran_data.php";
    $("#data-pembayaran").load(main);
        $(".tambah-pembayaran").click(function(e){
        e.preventDefault();
        $("#modal-pembayaran-add").modal('show');
        $(".modal-title").html('Tambah Pembayaran');
        $.post("view/pembayaran/pembayaran_form.php",
            {id_penjualan:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });

        $("#ke-pembayaran").click(function(e){
        //     e.preventDefault();
        $(location).attr('href','?r=pembayaran&pg=pembayaran');
        //$('#hasil-pembayaran').html(data);
        //$("#data-pembayaran").load("view/pembayaran/pembayaran_data.php");
        });

         $("#simpan-pembayaran").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/pembayaran.php"
        var id_pembayaran = $("#id_pembayaran").val();
        var id_penjualan = $("#id_penjualan").val();
        var tgl_bayar = $("#tgl_bayar").val();
        var tgl_tempo = $("#tgl_tempo").val();
        var id_jenis = $("#id_jenis").val();
        var pembayaran_ke = $("#pembayaran_ke").val();
        var jumlah_pembayaran = $("#jumlah_pembayaran").val();
        var telat = $("#telat").val();
        var denda = $("#denda").val();
        var ket_pembayaran = $("#ket_pembayaran").val();
        var input_on  = $("#input_on").val();
        var input_by  = $("#input_by").val();
        var edit_on  = $("#edit_on").val();
        var edit_by  = $("#edit_by").val();
        var del_on  = $("#del_on").val();
        var del_by  = $("#del_by").val();
        var del  = $("#del").val();
        
        $.ajax({
                  url: 'control/pembayaran.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_pembayaran='+id_pembayaran+'&id_penjualan='+id_penjualan+'&tgl_bayar='+tgl_bayar+'&tgl_tempo='+tgl_tempo+'&id_jenis='+id_jenis+'&pembayaran_ke='+pembayaran_ke+'&jumlah_pembayaran='+jumlah_pembayaran+'&telat='+telat+'&denda='+denda+'&ket_pembayaran='+ket_pembayaran+'&input_on='+input_on+'&input_by='+input_by+'&edit_on='+edit_on+'&edit_by='+edit_by+'&del_by='+del_by+'&del_on='+del_on+'&del='+del,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil-pembayaran').html(data);
                    $("#data-pembayaran").load("view/pembayaran/pembayaran_data.php");
                    
                    $('#modal-pembayaran-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });
    var main = "view/jenis_pembayaran/jenis_pembayaran_data.php";
    $("#data-jenis-pembayaran").load(main);
        $(".tambah-jenis-pembayaran").click(function(e){
        e.preventDefault();
        $("#modal-jenis-pembayaran-add").modal('show');
        $(".modal-title").html('Tambah Jenis Pembayaran');
        $.post("view/jenis_pembayaran/jenis_pembayaran_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });

      $("#simpan-jenis-pembayaran").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/jenis_pembayaran.php"
        var id_jenis = $("#id_jenis").val();
        var pembayaran_jenis = $("#pembayaran_jenis").val();
        var note = $("#note").val();
       
        
        $.ajax({
                  url: 'control/jenis_pembayaran.php',
                  type: 'GET',
                  data: 'aksi=tambah&id_jenis='+id_jenis+'&pembayaran_jenis='+pembayaran_jenis+'&note='+note,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                     
                    $('#hasil-jenis-pembayaran').html(data);
                    $("#data-jenis-pembayaran").load("view/jenis_pembayaran/jenis_pembayaran_data.php");
                    $('#modal-jenis-pembayaran-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });

    var main = "view/penjualan/penjualan_data.php";
    $("#data-penjualan").load(main);


    var main = "view/developer/developer_data.php";
    $("#data-developer").load(main);
        $(".tambah-developer").click(function(e){
        e.preventDefault();
        $("#modal-developer-add").modal('show');
        $(".modal-title").html('Tambah Developer');
        $.post("view/developer/developer_form.php",
            {id:$(this).attr('data-id')},
            function(html){
                $(".modal-body").html(html);
            }
        );
        //alert("sd");
    });

        $("#simpan-developer").click(function(e){ 
        e.preventDefault(); //mencegah action form biasa   
        //alert('dadsdsdsds');
        var url = "control/developer.php"
        var id_dev = $("#id_dev").val();
        var nm_dev = $("#nm_dev").val();
        var nm_proyek = $("#nm_proyek").val();
        var alamat_proyek = $ ("#alamat_proyek").val();
        var no_telpon = $ ("#no_telpon").val();
        var kat_proyek = $ ("#kat_proyek").val();
        var tot_luas_lahan = $ ("#tot_luas_lahan").val();
        var type_perumahan = $ ("#type_perumahan").val();
        var izin_lokasi = $ ("#izin_lokasi").val();
        var imb = $ ("#imb").val();
        var sert_induk = $ ("#sert_induk").val();
        var pbb = $ ("#pbb").val();
        var input_on  = $("#input_on").val();
        var input_by  = $("#input_by").val();
        var edit_on  = $("#edit_on").val();
        var edit_by  = $("#edit_by").val();
        var del_on  = $("#del_on").val();
        var del_by  = $("#del_by").val();
        var del  = $("#del").val();
        $.ajax({
                  url: 'control/developer.php',
                  type: 'GET',
                 data: 'aksi=tambah&id_dev='+id_dev+'&nm_dev='+nm_dev+'&nm_proyek='+nm_proyek+'&alamat_proyek='+alamat_proyek+'&no_telpon='+no_telpon+'&kat_proyek='+kat_proyek+'&tot_luas_lahan='+tot_luas_lahan+'&type_perumahan='+type_perumahan+'&izin_lokasi='+izin_lokasi+'&imb='+imb+'&sert_induk='+sert_induk+'&pbb='+pbb+'&input_on='+input_on+'&input_by='+input_by+'&edit_on='+edit_on+'&edit_by='+edit_by+'&del_by='+del_by+'&del_on='+del_on+'&del='+del,
                  success: function(data) {
                    //called jika sukses dan tampilkan di tag id username1
                    $('#hasil-developer').html(data);
                    $("#data-developer").load("view/developer/developer_data.php");
                    $('#modal-developer-add').modal('hide');
                  },
                  error: function(e) {
                    //called when there is an error
                    //console.log(e.message);
                  }
                });
    });

   // var main = "view/kavling/kavling_data.php";
    //$("#data-kavling").load(main);
      //  $(".tambah-kavling").click(function(e){
       // e.preventDefault();
       // $("#modal-kavling-add").modal('show');
       // $(".modal-title").html('Tambah Kavling');
       // $.post("view/kavling/kavling_form.php",
        //    {id:$(this).attr('data-id')},
         //   function(html){
           //     $(".modal-body").html(html);
            //}
       // );
        //alert("sd");
   // });


});