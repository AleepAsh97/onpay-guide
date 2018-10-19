<!DOCTYPE hmtl>
<hmtl lang="en">
<head>
		<title>Tutorial OnPay</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="index.js"></script>
		
<script>

	$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});

/* Set the width of the side navigation to 250px */
function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
}

</script>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
	<a class="navbar-brand" onclick="openNav()"><span class="glyphicon glyphicon-list"></span></a>
	<a class="navbar-brand" href="index.php">Utama</a>
	<div class="container-fluid" id="con-flu">
	<div class="navbar-header">
		<div class="scrollmenu">
			<a href="topik1.php">Topik 1</a>
			<a href="topik2.php">Topik 2</a>
			<a href="#about">Topik 3</a>
			<a href="#support">Topik 4</a>
			<a href="#blog">Topik 5</a>
			<a href="#tools">Topik 6</a>  
			<a href="#base">Topik 7</a>
			<a href="#custom">Topik 8</a>
			<a href="#more">Topik 9</a>
			<a href="#logo">Topik 10</a>
			<a href="#friends">Topik 11</a>
			<a href="#partners">Topik 12</a>
</div>
		<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<!-- menu -->
		<div id="MainMenu">
		<div class="list-group panel">
			<a href="#demo1" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#MainMenu">2.1 Tetapan Sistem <i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo1">
						<a href="#section1" onclick="closeNav()" class="list-group-item">2.1.1 Perniagaan (WAJIB)</a>
						<a href="#section2" onclick="closeNav()" class="list-group-item">2.1.2 Staf (optional)</a>
						<a href="#section3" onclick="closeNav()" class="list-group-item">2.1.3 Affiliate (optional)</a>
						<a href="#section4" onclick="closeNav()" class="list-group-item">2.1.4 Dropship</a>
						<a href="#section5" onclick="closeNav()" class="list-group-item">2.1.5 Pengedar</a>
						<a href="#section6" onclick="closeNav()" class="list-group-item">2.1.6 Kaedah Pembayaran</a>
						<a href="#section7" onclick="closeNav()" class="list-group-item">2.1.7 Emel</a>
						<a href="#section8" onclick="closeNav()" class="list-group-item">2.1.8 SMS (optional)</a>
						<a href="#section9" onclick="closeNav()" class="list-group-item">2.1.9 Invois</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">2.1.10 Cukai</a>
		</div>
		<a href="#demo214" class="list-group-item list-group-item-success active" data-toggle="collapse">2.2 Kaedah Pembayaran (WAJIB)<i class="fa fa-caret-down"></i></a>
						<div class="collapse" id="demo214">
							<a href="#section11" onclick="closeNav()" class="list-group-item">Penetapan Akaun Bank</a>
						<a href="#section12" onclick="closeNav()" class="list-group-item">Penetapan Akaun PayPal</a>
						<a href="#section13" onclick="closeNav()" class="list-group-item">Penetapan Akaun iPay88</a>
						<a href="#section14" onclick="closeNav()" class="list-group-item">Penetapan Akaun MOLPay</a>
						<a href="#section15" onclick="closeNav()" class="list-group-item">Penetapan Akaun senangPay</a>
						<a href="#section16" onclick="closeNav()" class="list-group-item">Penetapan Akaun BillPlz</a>
						<a href="#section17" onclick="closeNav()" class="list-group-item">Penetapan Fungsi CEK</a>
						<a href="#section18" onclick="closeNav()" class="list-group-item">Penetapan Fungsi Wang Pos</a>
						</div>
		<a href="#demo2" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#MainMenu">2.3 Tetapan Templat Emel<i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo2">
						<a href="#section19" onclick="closeNav()" class="list-group-item">2.2.1 Tetapan Templat Emel Pendaftaran Ejen</a>
						<a href="#section20" onclick="closeNav()" class="list-group-item">2.2.2 Tetapan Templat Emel Tetapan Semula Kata Laluan Ejen</a>
						<a href="#section21" onclick="closeNav()" class="list-group-item">2.2.3 Tetapan Templat Emel Pembayaran Komisen</a>
						<a href="#section22" onclick="closeNav()" class="list-group-item">2.2.4 Tetapan Templat Emel Ucapan Hari Lahir</a>
		</div>
		<a href="#demo21" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#MainMenu">2.4 Tetapan Templat SMS<i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo21">
						<a href="#section23" onclick="closeNav()" class="list-group-item">2.4.1 Tetapan Templat SMS Pendaftaran Ejen</a>
						<a href="#section24" onclick="closeNav()" class="list-group-item">2.4.2 Tetapan Templat SMS Tetapan Semula Kata Laluan Ejen</a>
						<a href="#section25" onclick="closeNav()" class="list-group-item">2.4.3 Tetapan Templat SMS Pembayaran Komisen</a>
						<a href="#section26" onclick="closeNav()" class="list-group-item">2.4.4 Tetapan Templat SMS Ucapan Hari Lahir</a>
		</div>
		<a href="#demo3" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#MainMenu">2.5 Tetapan Penghantar / Kurier<i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo3">
						<a href="#section27" onclick="closeNav()" class="list-group-item">2.5.1 Tambah Kurier</a>
						<a href="#section28" onclick="closeNav()" class="list-group-item">2.5.2 Kemaskini/Padam Kurier</a>
		</div>
		<a href="#demo4" class="list-group-item list-group-item-success active" data-toggle="collapse" data-parent="#MainMenu">2.6 Label Penghantaran<i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo4">
						<a href="#section29" onclick="closeNav()" class="list-group-item">2.6.1 Tetapan Saiz Cetakan Kertas Khas (Saiz Borang Pos Laju) (Lebar × Tinggi = 210 mm × 101mm)</a>
						<a href="#section30" onclick="closeNav()" class="list-group-item">2.6.2 Isi Maklumat Anda ke dalam Borang Pos Laju</a>
						<a href="#section31" onclick="closeNav()" class="list-group-item">2.6.3 Cara Cetak Label Penghantaran Pelanggan</a>
		</div>
		<a href="#section32" onclick="closeNav()" class="list-group-item list-group-item-success active">2.7 Senarai Hitam ID Ejen</a>
		<a href="#section33" onclick="closeNav()" class="list-group-item list-group-item-success active">2.8 Profil Akaun</a>
		<a href="#section34" onclick="closeNav()" class="list-group-item list-group-item-success active">2.9 Tukar Kata Laluan</a>
	</div>
	</div>
	
</div>
</div>
	</div>
	<div>
	</div>
	</div>
</nav>
<div class="container" style="margin-top: 50px">
	<div class="row">
<div id="section1" class="subtopic col-md-12">
	<h4><strong>2.1.1 Perniagaan</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan</div>
	  <div class="panel-body">
	  	<p><strong>a) Isikan maklumat anda.</strong><br> 
		- Item bertanda * adalah wajib diisi.<br>
		- Isikan kesemua bahagian ini dengan lengkap. Ini bertujuan untuk digunakan di dalam template sistem (ex: emel, invois etc).</p>

		<p><strong>b) Laman Web Perniagaan</strong><br> 
		- Isi sekiranya anda mempunyai laman web mempromosikan / mempamerkan produk anda seperti blog atau lain.</p>

		<p><strong>c) Matawang</strong><br> 
		- Ringgit Malaysia : RM</p>

		<p><strong>d) Maklumat Tambahan</strong><br> 
		- Tandakan kotak "Paparkan maklumat utama di halaman utama" demi memaparkan maklumat tambahan di halaman utama subdomain anda.</p>

		<p><strong>Simpan maklumat.</strong><br> 
		- Setelah selesai mengisi maklumat, tekan butang "Simpan Tetapan" di bahagian atas kanan borang.</p>

	  </div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Borang Perniagaan"  data-image="img/borang_sistem_perniagaan.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/borang_sistem_perniagaan.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section2" class="subtopic col-md-12">
	<h4><strong>2.1.2 Staf</strong></h4><br>
		<div class="panel panel-primary">
	  <div class="panel-heading">Tandakan tick jika anda ingin mengaktifkan fungsi staf.</div>
	  <div class="panel-body">
	  <p>Staf anda boleh melihat carta Top 10 Staf dengan tick kotak "Papar carta top 10 staf" dan klik paparan di "Julat Data Carta Top 10 Staf" samada mahukan data secara keseluruhan,tahunan,bulanan atau custom (tetap sendiri tarikh julat data dikumpul)</p>
	  <p>Formula Nombor Invois Komisyen<br>
		Formula ini akan digunakan untuk menentukan format nombor invois bagi komisyen ejen anda. Anda boleh menentukan formatnya menggunakan kod pemboleh ubah yang disediakan.<br><br>
		Contohnya:<br><br>
		Formula:<br> 
		@tahun_penuh@bulan@hari-@nombor_komisyen<br><br>
		Dimana:<br><br>
		@tahun_pendek = 16<br> 
		@tahun_penuh = 2016<br>
		@bulan = 03<br>
		@hari = 26<br>
		@nombor_komisyen = 139<br><br> 
		akan menghasilkan:
		20160326-139</p>
		<p><strong>Simpan maklumat.</strong><br> 
		- Setelah selesai mengisi maklumat, tekan butang "Simpan Tetapan" di bahagian atas kanan borang.</p>

	  </div>
	</div>
	<div class="row">
   <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Staf"  data-image="img/staf.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/staf.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section3" class="subtopic col-md-12">
	<h4><strong>2.1.3 Affiliate</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Maklumat Konsep Komisen</div>
	  <div class="panel-body">
	  <p>Secara dasarnya, website akan menyimpan cookies.<br><br>
	  Untuk lebih memahami konsep pembayaran "Pertama" / "Terkini",<br><br>

		1) Ejen A mempromosikan link affiliate-nya kepada seorang pelanggan bernama Abu, namun Abu membatalkan hasratnya untuk membeli.<br>
		Disini, Ejen A akan disimpan di dalam senarai cookies sebagai penama komisen "pertama".<br><br> 

		2) Pada masa yang lain pula, Ejen B juga mempromosikan link affiliate-nya kepada pelanggan yang sama, iaitu Abu, tetapi kali ini, Ejen B berjaya CLOSE SALE. 
		Ejen B juga akan disimpan di dalam senarai cookies sebagai penama terakhir / "terkini".
		Jadi, Pilihan Konsep Komisyen:<br><br> 
		<strong>Pertama</strong> : Ejen A - dibayar komisyen	(kerana menimbulkan kesedaran kepada pelanggan)<br><br>
		<strong>Terkini</strong> : Ejen B - dibayar komisyen (kerana berjaya CLOSE SALE)<br><br>
		<strong>Anda bebas untuk memilih konsep komisyen yang anda gemari.</strong></p>
	  </div>
	</div>
	<div class="panel panel-info">
	  <div class="panel-heading">Maklumat Hayat Cookie</div>
	  <div class="panel-body">
	  <p>Cookies yang disimpan pelayar web seperti Chrome, Firefox dan sebagainya mempunyai tarikh luput. Anda boleh menetapkan tempoh aktif cookie tersebut.<br><br>
	  Selain itu, Cookies juga boleh dipadamkan melalui cara manual, ataupun melalui penggunaan software pihak ketiga seperti software pembersih komputer "CCleaner".</p>
	  </div>
	</div>
	<div class="panel panel-success">
	  <div class="panel-heading">Terma dan Syarat</div>
	  <div class="panel-body">
	  <p>Tujuan terma & syarat sebagai penetapan dan pematuhan kepada undang-undang oleh semua ejen di saat pengguna mendaftar sebagai ejen. Terma dan syarat menyelamatkan penganjur dari terjebak dari tuntutan diluar jangkaan. Terma dan syarat juga boleh digunakan untuk meletakkan batasan terhadap khidmat yang dianjurkan. </p>
	  </div>
	</div>
	<p><strong>Simpan maklumat.</strong><br> 
	- Setelah selesai mengisi maklumat, tekan butang "Simpan Tetapan" di bahagian atas kanan borang.</p>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Affiliate"  data-image="img/affiliate.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/affiliate.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section4" class="subtopic col-md-12">
	<h4><strong>2.1.4 Dropship</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Dropship</div>
	  <div class="panel-body">
	  <p>Dropship anda boleh melihat carta Top 10 Ejen dengan tick kotak "Papar carta top 10 staf" dan klik paparan di "Julat Data Carta Top 10 Ejen" samada mahukan data secara keseluruhan,tahunan,bulanan atau custom (tetap sendiri tarikh julat data dikumpul)</p>
	  </div>
	</div>
	<div class="panel panel-success">
	  <div class="panel-heading">Terma dan Syarat</div>
	  <div class="panel-body">
	  <p>Tujuan terma & syarat sebagai penetapan dan pematuhan kepada undang-undang oleh semua ejen di saat pengguna mendaftar sebagai ejen. Terma dan syarat menyelamatkan penganjur dari terjebak dari tuntutan diluar jangkaan. Terma dan syarat juga boleh digunakan untuk meletakkan batasan terhadap khidmat yang dianjurkan. </p>
	  </div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Dropship"  data-image="img/dropship.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/dropship.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section5" class="subtopic col-md-12">
	<h4><strong>2.1.5 Pengedar</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Pengedar</div>
	  <div class="panel-body">
	  <p>Pengedar anda boleh melihat carta Top 10 Ejen dengan tick kotak "Papar carta top 10 staf" dan klik paparan di "Julat Data Carta Top 10 Ejen" samada mahukan data secara keseluruhan,tahunan,bulanan atau custom (tetap sendiri tarikh julat data dikumpul)</p>
	  </div>
	</div>
	<div class="panel panel-success">
	  <div class="panel-heading">Terma dan Syarat</div>
	  <div class="panel-body">
	  <p>Tujuan terma & syarat sebagai penetapan dan pematuhan kepada undang-undang oleh semua ejen di saat pengguna mendaftar sebagai ejen. Terma dan syarat menyelamatkan penganjur dari terjebak dari tuntutan diluar jangkaan. Terma dan syarat juga boleh digunakan untuk meletakkan batasan terhadap khidmat yang dianjurkan. </p>
	  </div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Pengedar"  data-image="img/pengedar.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/pengedar.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section6" class="subtopic col-md-12">
	<h4><strong>2.1.6 Kaedah Pembayaran</strong></h4><br>
	<div class="panel panel-success">
	  <div class="panel-heading">Panduan Kaedah Pembayaran</div>
	  <div class="panel-body">
	  <p>- Tick ruangan "Paparkan Logo" jika anda mahu paparkan logo.<br><br>
		 <strong>Kedudukan kaedah pembayaran boleh diubah secara drag and drop dengan memegang pada nombor</strong></p>
	  </div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Kaedah Pembayaran"  data-image="img/kaedah_pembayaran.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/kaedah_pembayaran.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section7" class="subtopic col-md-12">
	<h4><strong>2.1.7 Emel</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Emel</div>
	  <div class="panel-body">
	  <p>1. Anda perlu mengisi ruangan penerima notifikasi dengan emel anda.</p>
		<p><strong>*** Anda dibenarkan mengisi sebanyak 3 emel sahaja. ***</strong></p>
		<p>2. Di bahagian notifikasi anda boleh custom notifikasi untuk jualan, pelanggan, affiliate, dropship, pengedar</p>
	  </div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Emel"  data-image="img/emel.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/emel.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section8" class="subtopic col-md-12">
	<h4><strong>2.1.8 SMS</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan SMS</div>
	  <div class="panel-body">
	  <p>Sebelum anda menggunakan fungsi SMS, pastikan anda mempunyai kredit yang mencukupi untuk menghantar SMS.</p>
		<p><strong>*** Anda boleh topup kredit anda di menu utama OnPay ***</strong></p>
		<p>2. Di bahagian notifikasi anda boleh custom notifikasi SMS untuk jualan, pelanggan, affiliate, dropship, pengedar</p>
	  </div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan SMS"  data-image="img/sms.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/sms.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section9" class="subtopic col-md-12">
	<h4><strong>2.1.9 Invois</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Invois</div>
	  <div class="panel-body">
	  <p>1. Tetapkan Pilihan Templat Kepala Invois dan Masukkan Gambar<br>
	  2. Isikan Teks Status Pembayaran<br>
	  3. Tekan Butang Previu untuk paparkan contoh invois</p>
	  </div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Invois"  data-image="img/invois.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/invois.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
                       <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Langkah 2"  data-image="img/status_invois.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/status_invois.png" alt="Another alt text">
            </a>
            <p>Langkah 2</p>
        </div>
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Langkah 1"  data-image="img/header_invois.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/header_invois.png" alt="Another alt text">
            </a>
            <p>Langkah 1</p>
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Langkah 3"  data-image="img/contoh_invois.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/contoh_invois.png" alt="Another alt text">
            </a>
            <p>Langkah 3</p>
        </div>
	</div>
</div>
<div id="section10" class="subtopic col-md-12">
	<h4><strong>2.1.10 Cukai</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Invois</div>
	  <div class="panel-body">
	  <p>Ruangan yang bertanda <strong style="color: red;">*</strong> wajib diisi sepenuhnya.</p>
		<p><strong>** Kadar cukai dalam bentuk peratusan sahaja **</strong></p><br>
		<p>1. Untuk ruangan Jenis Cukai anda boleh tekan samada Ekslusif atau Inklusif</p>
		<p>2. Jika anda klik kotak Kos Penghantaran, kos tersebut akan dikira secara automatik di dalam pengiraan cukai</p>
	  </div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Cukai"  data-image="img/cukai.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/cukai.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div id="section11" class="subtopic col-md-12">
	<h4><strong>2.2.1 Penetapan Akaun Bank</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Penetapan Akaun Bank</div>
	  <div class="panel-body">
	  <p>Anda boleh tetapkan Akaun Bank anda di menu <strong>"Tetapan"</strong> kemudian <strong>"Akaun Bank"</strong>.<br><br>
	  1.Sila pilih nama bank anda, diikuti dengan nama akaun anda serta nombor akaun anda<br>
	  2.Setelah selesai, sila tekan butang <strong>"Tambah Akaun Bank"</strong></p>
	  <p>Anda boleh kemaskini maklumat akaun bank anda dengan menekan butang <strong>"Kemaskini"</strong> atau memadam maklumat akaun bank anda dengan menekan butang <strong>"Buang"</strong></p>
	  </div>
	</div>
	<div class="row">
	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Akaun Bank"  data-image="img/akaun_bank.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/akaun_bank.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>	
	</div>
</div>
<div id="section12" class="subtopic col-md-12">
	<h4><strong>2.2.2 Penetapan Akaun PayPal</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Cara mendapatkan Token Identity Paypal:</div>
	  <div class="panel-body">
	  	<p>1. Log Masuk akaun PayPal</p>
	  	<p>2. Setelah berjaya akses halaman profil anda, sila tekan butang <strong>"My Selling Tools"</strong></p>
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun PayPal"  data-image="img/paypal_profile_navbar.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/paypal_profile_navbar.png" alt="Another alt text">
            </a>
            <p>3. Tekan <strong>"Update"</strong> pada pilihan <strong>"Instant Payment Notification"</strong></p>
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun PayPal"  data-image="img/paypal_ipn.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/paypal_ipn.png" alt="Another alt text">
            </a>
            <p>- Tekan butang "Choose IPN setting" di bahagian paling bawah.<br>
			- Masukkan URL IPN dari halaman tetapan paypal:</p>
			<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun PayPal"  data-image="img/paypal_kod_ar_ipn.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/paypal_kod_ar_ipn.png" alt="Another alt text">
            </a>
            <p>- Save untuk simpan tetapan paypal.</p>
            <p>4. Tekan <strong>"Update"</strong>  pada pilihan <strong>"Website Preference"</strong></p>
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun PayPal"  data-image="img/paypal_web_preference.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/paypal_web_preference.png" alt="Another alt text">
            </a>
	  </div>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">Aktifkan "Auto Return"</div>
	  <div class="panel-body">
	  <p>1. Isikan "Return URL": Copy dari halaman tetapan paypal:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun PayPal"  data-image="img/paypal_kod_ar_ipn.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/paypal_kod_ar_ipn.png" alt="Another alt text">
            </a>	
	  </div>
	</div>
	<div class="panel panel-primary">
	  <div class="panel-heading">Aktifkan "Payment Data Transfer". </div>
	  <div class="panel-body">
	  <p>- ubah setting "Encrypted Website Payment" : OFF<br> 
	  - ubah setting "Paypal Account Optional" : ON<br>
      - ubah setting "Contact Telephone Number" : OFF<br>
      - ubah setting "Express Checkout" : NO<br><br>
      5) Save dan copy Kod Token Identiti.<br>
      - Gunakan kod yang di"copy" kedalam tetapan paypal OnPay.</p>
      <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun PayPal"  data-image="img/cas.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/cas.png" alt="Another alt text">
            </a>
            <p><a href="https://www.paypal.com/my/webapps/mpp/paypal-fees">Rujuk Cas Transaksi PayPal</a></p>
	  </div>
	</div>
</div>
<div id="section13" class="subtopic col-md-12">
	<h4><strong>2.2.3 Penetapan Akaun iPay88</strong></h4><br>	
	<div class="panel panel-primary">
	  <div class="panel-heading">Penetapan Akaun iPay88 </div>
	  <div class="panel-body">
	  	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun iPay88"  data-image="img/borang_tetapan_ipay88.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/borang_tetapan_ipay88.png" alt="Another alt text">
            </a>
            <p>1. Isikan Kod Pedagang iPay88 dan Kod Kunci Pedagang iPay88 kedalam kotak berkaitan.<br> 
			2. masukkan caj pengendalian sekiranya diperlukan.</p>

			<p>Saranan Kadar Cas Pengendalian :<br>
			- Credit Card : 4%<br> 
			- Interbank-Transfer : 4%</p>
	  </div>
	</div>
</div>
<div id="section14" class="subtopic col-md-12">
	<h4><strong>2.2.4 Penetapan Akaun MOLPay</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Penetapan Akaun MOLPay </div>
	  <div class="panel-body">
	  	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun MOLPay"  data-image="img/borang_tetapan_molpay.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/borang_tetapan_molpay.png" alt="Another alt text">
            </a>
            <p>1. Log masuk ke akaun MOLPay anda.<br> 
			2. Tetapkan Return URL seperti di dalam halaman "Tetapan MOLPay" di OnPay.<br> 
			3. Tetapkan Notification URL seperti di dalam halaman "Tetapan MOLPay" di OnPay.<br> 
			4. Tetapkan Callback URL seperti di dalam halaman "Tetapan MOLPay" di OnPay.<br> 
			5. Masukkan ID Pedagang dan Kunci Pengesahan ke dalam tetapan MOLPay di OnPay.</p>
	  </div>
	</div>
</div>
<div id="section15" class="subtopic col-md-12">
	<h4><strong>2.2.5 Penetapan Akaun senangPay</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Penetapan Akaun senangPay </div>
	  <div class="panel-body">
	  	<p>1. Log masuk ke akaun senangPay anda dan buka halaman tetapan profil senangPay.</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun senangPay"  data-image="img/senangpay_1.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/senangpay_1.png" alt="Another alt text">
    </a>
    	<p>2. Tetapkan Return URL seperti di dalam halaman "Tetapan senangPay" di OnPay.<br>
			3. Tetapkan Callback URL seperti di dalam halaman "Tetapan senangPay" di OnPay.<br> 
			4. Masukkan ID Pedagang dan Kunci Pengesahan ke dalam tetapan senangPay di OnPay.</p>
			<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun senangPay"  data-image="img/senangpay_2.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/senangpay_2.png" alt="Another alt text">
    </a>
	  </div>
	</div>
</div>
<div id="section16" class="subtopic col-md-12">
	<h4><strong>2.2.6 Penetapan Akaun BillPlz</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Penetapan Akaun BillPlz</div>
	  <div class="panel-body">
	  <p>1. Log masuk ke akaun BillPlz anda dan buka halaman tetapan profil anda.</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun BillPlz"  data-image="img/billplzmenu.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/billplzmenu.png" alt="Another alt text">
		</a>
    <p>2. Sila isikan ruangan Kunci Rahsia API dan ID Kutipan. Anda boleh dapatkan Kunci Rahsia API dan ID Kutipan di akaun BillPlz anda</p>
    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun BillPlz"  data-image="img/billpz.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/billplz.png" alt="Another alt text">
	</a>
    <p>Menu untuk mendapatkan Kunci Rahsia API</p>
    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun BillPlz"  data-image="img/apikey.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/apikey.png" alt="Another alt text">
	</a>
	<p>Menu untuk mendapatkan ID Kutipan</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Penetapan Akaun BillPlz"  data-image="img/billplz_1.jpg" data-target="#image-gallery">
    <img class="img-responsive" src="img/billplz_1.jpg" alt="Another alt text">
	</a>
	  </div>
	</div>
</div>
<div id="section17" class="subtopic col-md-12">
	<h4><strong>2.2.7 Penetapan Fungsi CEK</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Penetapan Fungsi CEK</div>
	  <div class="panel-body">
	  <p>1. Isikan keterangan yang anda ingin paparkan di bahagian keterangan cek pada borang anda.</p>
	  </div>
	</div>
</div>
<div id="section18" class="subtopic col-md-12">
	<h4><strong>2.2.8 Penetapan Fungsi Wang Pos</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Penetapan Fungsi Wang Pos</div>
	  <div class="panel-body">
	  <p>1. Isikan keterangan yang anda ingin paparkan di bahagian keterangan Wang Pos pada borang anda.</p>
	  </div>
	</div>
</div>
<div id="section19" class="subtopic col-md-12">
	<h4><strong>2.3.1 Tetapan Templat Emel Pendaftaran Ejen</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat Emel Pendaftaran Ejen</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam emel notifikasi ejen : Pendaftaran Ejen.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat emel anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Pendaftaran Ejen"  data-image="img/borang_emel_pembolehubah_pendaftaran.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_emel_pembolehubah_pendaftaran.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat Emel Pendaftaran Ejen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Pendaftaran Ejen"  data-image="img/contohemel.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/contohemel.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section20" class="subtopic col-md-12">
	<h4><strong>2.3.2 Tetapan Templat Emel Tetapan Semula Kata Laluan Ejen</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat Tetapan Semula Kata Laluan Ejen</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam emel notifikasi ejen : Penemtapan Semula Kata Laluan Ejen.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat emel anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Penemtapan Semula Kata Laluan Ejen"  data-image="img/borang_emel_pembolehubah_password.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_emel_pembolehubah_password.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat Emel Pendaftaran Ejen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Penemtapan Semula Kata Laluan Ejen"  data-image="img/contohemelpassword.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/contohemelpassword.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section21" class="subtopic col-md-12">
	<h4><strong>2.3.3 Tetapan Templat Emel Pembayaran Komisen</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat Pembayaran Komisen</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam emel notifikasi ejen : Pembayaran Komisen.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat emel anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Pembayaran Komisen"  data-image="img/borang_emel_pembolehubah_komisen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_emel_pembolehubah_komisen.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat Emel Pendaftaran Ejen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Pembayaran Komisen"  data-image="img/contohemelkomisen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/contohemelkomisen.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section22" class="subtopic col-md-12">
	<h4><strong>2.3.4 Tetapan Templat Emel Ucapan Hari Lahir</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat Ucapan Hari Lahir</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam emel notifikasi ejen : Ucapan Hari Lahir.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat emel anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Ucapan Hari Lahir"  data-image="img/borang_emel_pembolehubah_birthday.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_emel_pembolehubah_birthday.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat Emel Pendaftaran Ejen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat Emel Ucapan Hari Lahir"  data-image="img/contohemelbirthday.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/contohemelbirthday.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section23" class="subtopic col-md-12">
	<h4><strong>2.4.1 Tetapan Templat SMS Pendaftaran Ejen</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat SMS Pendaftaran Ejen</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam SMS notifikasi ejen : Pendaftaran Ejen.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat SMS anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat SMS Pendaftaran Ejen"  data-image="img/smsdaftarejen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/smsdaftarejen.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat SMS Pendaftaran Ejen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat SMS Pendaftaran Ejen"  data-image="img/contohsmsdaftarejen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/contohsmsdaftarejen.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section24" class="subtopic col-md-12">
	<h4><strong>2.4.2 Tetapan Templat SMS Tetapan Semula Kata Laluan Ejen</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat SMS Tetapan Semula Kata Laluan Ejen</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam SMS notifikasi ejen : Penemtapan Semula Kata Laluan Ejen.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat SMS anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat SMS Pendaftaran Ejen"  data-image="img/smsdaftarejen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/smsdaftarejen.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat SMS Tetapan Semula Kata Laluan Ejen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tetapan Templat SMS Pendaftaran Ejen"  data-image="img/contohsmspassword.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/contohsmspassword.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section25" class="subtopic col-md-12">
	<h4><strong>2.4.3 Tetapan Templat SMS Pembayaran & Pengesahan Komisen</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat SMS Pembayaran & Pengesahan Komisen</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam SMS notifikasi ejen : Pembayaran & Pengesahan Komisen.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat SMS anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Pembayaran & Pengesahan Komisen"  data-image="img/smsdaftarejen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/smsdaftarejen.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat SMS Pembayaran Komisen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Pembayaran & Pengesahan Komisen"  data-image="img/smsbayarkomisen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/smsbayarkomisen.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat SMS Pengesahan Komisen</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Pembayaran & Pengesahan Komisen"  data-image="img/smssahkomisen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/smssahkomisen.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section26" class="subtopic col-md-12">
	<h4><strong>2.4.4 Tetapan Templat Emel Ucapan Hari Jadi</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Templat SMS Ucapan Hari Jadi</div>
	  <div class="panel-body">
	  <p>1. Isikan penulisan templat yang anda ingin paparkan ke dalam SMS notifikasi ejen : Ucapan Hari Jadi.</p>
	  <p>Anda boleh menggunakan pembolehubah di bawah dalam penulisan templat SMS anda:</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Pembayaran & Pengesahan Komisen"  data-image="img/smsdaftarejen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/smsdaftarejen.png" alt="Another alt text">
	</a>
	<p>Contoh Penulisan Templat SMS Ucapan Hari Jadi</p>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Pembayaran & Pengesahan Komisen"  data-image="img/smsharijadi.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/smsharijadi.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section27" class="subtopic col-md-12">
	<h4><strong>2.5.1 Tambah Kurier</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tambah Kurier</div>
	  <div class="panel-body">
	  <p>Sila gunakan borang di bawah untuk menambah kurier. Isikan maklumat dengan tepat. </p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tambah Kurier"  data-image="img/borang_tetapan_kurier.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_tetapan_kurier.png" alt="Another alt text">
	</a>
	<p><strong>Integrasi Pihak Ketiga (EasyParcel dan MyParcelAsia)</strong></p>
	<p><strong>EasyParcel</strong></p>
	<p>Untuk tutorial integrasi bersama EasyParcel anda boleh <a href="https://www.easyparcel.my/blog/announcement/tutorial-easyparcel-integration-with-onpay/">klik halaman ini</a></p>
	<p><strong>MyParcelAsia</strong></p>
	<li>Anda perlu dapatkan <strong>Kunci API</strong> dan <strong>Kunci Rahsia</strong> di akaun MyParcelAsia anda</li>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tambah Kurier"  data-image="img/myparcelasia1.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/myparcelasia1.png" alt="Another alt text">
	</a>
	<li>Kemudian Isi semua Maklumat di ruangan bawah.</li>
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tambah Kurier"  data-image="img/ruanganparcelasia.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/ruanganparcelasia.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section28" class="subtopic col-md-12">
	<h4><strong>2.5.2 Kemaskini/Padam Kurier</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Kemaskini/Padam Kurier</div>
	  <div class="panel-body">
	  <p><strong>KEMASKINI:</strong></p>	
	<p>1. Tekan butang <strong>Kemaskini</strong> disebelah kiri .<br> 
	2. Borang tambah kurier akan bertukar menjadi borang kemaskini kurier. Pilihan kurier yang sedang dikemaskini akan ditanda dengan warna biru seperti gambar di bawah.<br> 
	3. Kemaskini maklumat yang diinginkan dan tekan butang <strong>Kemaskini Penghantar</strong></p> 
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kemaskini Kurier"  data-image="img/borang_tetapan_kurier_kemaskini.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_tetapan_kurier_kemaskini.png" alt="Another alt text">
	</a>
	<p><strong>PADAM:</strong></p> 
	<p>1. Tekan butang <strong>x</strong> pada pilihan kurier yang ingin dipadam.<br>
	2). Tekan <strong>Ya</strong> di kotak popup pengesahan pemadaman.</p> 
	<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Kemaskini Kurier"  data-image="img/borang_tetapan_kurier_padam.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_tetapan_kurier_padam.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section29" class="subtopic col-md-12">
	<h4><strong>2.6.1 Tetapan Saiz Cetakan Kertas Khas (Saiz Borang Pos Laju) (Lebar × Tinggi = 210 mm × 101mm)</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tetapan Saiz Cetakan Kertas Khas (Saiz Borang Pos Laju) (Lebar × Tinggi = 210 mm × 101mm)</div>
	  <div class="panel-body">
	  <p>Anda boleh rujuk tutorial Bahasa Inggeris di bawah:</p>
	  <li><a href="http://windowsitpro.com/windows-7/q-how-do-i-create-custom-paper-size-printing-windows-7">http://windowsitpro.com/windows-7/q-how-do-i-create-custom-paper-size-printing-windows-7</a></li>
	  <li><a href="https://support.apple.com/kb/PH18619?locale=en_US">https://support.apple.com/kb/PH18619?locale=en_US</a></li><br><br>
	  <p><strong>Tutorial dalam Bahasa Melayu</strong></p>
	  <p><strong>1. Buka Control Panel</strong></p>
	  <p>(Windows vista - Windows 10) = Tekan "start" dan taip "Control Panel"</p>
	  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/control_panel_10.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/control_panel_10.png" alt="Another alt text">
	</a>
	<p>(Windows XP) = Tekan "start" > "settings" > "Control Panel"</p>
	 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/control_panel_xp.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/control_panel_xp.png" alt="Another alt text">
	</a>
	<p>Mana mana windows = Buka "My Computer" > Taip "Control Panel" pada "address bar".</p>
	 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/control_panel_addressbar.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/control_panel_addressbar.png" alt="Another alt text">
	</a>
	<p><strong>2. Tekan "View Devices and Printers"</strong></p>
	<p><strong>3. Buka "Print Server Properties"</strong></p>
	<li> Tekan mana-mana printer yang ada.</li> 
	<li> Tekan "Print Server Properties" pada bahagian atas.</li>
	 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/control_panel_print_server.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/control_panel_print_server.png" alt="Another alt text">
	</a>
	<p><strong>4. Tandakan kotak "Create New Form". Isikan saiz (Lebar × Tinggi = 21 cm × 10.1 cm)</strong></p>
	 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/control_panel_print_server_new.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/control_panel_print_server_new.png" alt="Another alt text">
	</a>
	  </div>
	</div>
</div>
<div id="section30" class="subtopic col-md-12">
	<h4><strong>2.6.2 Isi Maklumat Anda kedalam Borang Pos Laju</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Isi Maklumat Anda kedalam Borang Pos Laju</div>
	  <div class="panel-body">
	  <p>Sila isikan maklumat anda dengan lengkap. Maklumat ini akan digunakan bagi setiap percetakan borang pos laju.<br> 
		Maklumat pelanggan akan di masukkan secara automatik apabila anda menekan butang <strong>Jana Label</strong> di Senarai Jualan.</p>
		 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/borang_tetapan_label_penghantaran_poslaju.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_tetapan_label_penghantaran_poslaju.png" alt="Another alt text">
	</a>
	  </div>
	</div>
</div>
<div id="section31" class="subtopic col-md-12">
	<h4><strong>2.6.3 Cara Cetak Label Penghantaran Pelanggan</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Cara Cetak Label Penghantaran Pelanggan</div>
	  <div class="panel-body">
	  <p>Anda boleh mencetak label pos laju pelanggan melalui :<br> 
		1. Log masuk kepada halaman dashboard admin anda.<br> 
		2. Buka Senarai Jualan.<br>
		3. Tekan butang <strong>Jana Label</strong> bagi pelanggan yang dikehendaki.<br>
		4. Pilih Pos Laju.<br>
		5. Tekan butang <strong>Jana Label</strong>.</p>
		<p><strong>Nota : Hanya pembayaran yang disahkan sahaja dibenarkan untuk menjana label penghantaran.</strong></p>
		 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/senarai_jualan.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/senarai_jualan.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section32" class="subtopic col-md-12">
	<h4><strong>2.7 Senarai Hitam ID Ejen</strong></h4><br>
	<p><strong>Fungsi Senarai Hitam ID Ejen</strong></p>
	<div class="panel panel-primary">
	  <div class="panel-heading">Senarai Hitam ID Ejen</div>
	  <div class="panel-body">
	<p>Fungsi ini membolehkan anda menetapkan ID Ejen yang tidak boleh digunakan oleh ejen-ejen anda sebagai ID mereka.<br> 
	Hal ini adalah demi mengelakkan penipuan yang mungkin berlaku terhadap pelanggan. Contohnya, sekiranya ejen mendaftar sebagai admin, maka mereka boleh menyamar sebagai admin/pemilik bisnes anda dan menipu pelanggan. 
	Contoh-contohnya ayat yang tidak boleh digunakan adalah:<br><br>
	admin<br>
	owner<br>
	pemilik<br>
	billing<br>
	janganreply<br>
	mail<br>
	help<br>
	customerservice<br>
	service<br><br>

	Atau sebagainya mengikut keperluan anda.</p><br>
	<p><strong>Tambah Rekod Senarai Hitam</strong><br><br> 
	1. Isikan ID Ejen yang ingin disenarai hitam.<br> 
	2. Tekan butang <strong>Tambah</strong>.<br><br> 


	<strong>Padam Rekod Senarai Hitam</strong><br><br> 
	1. Tekan butang <strong>x</strong> pada lajur ejen yang ingin dipadamkan rekod senarai hitam.</p>
		 <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/borang_tetapan_senarai_hitam_ejen.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_tetapan_senarai_hitam_ejen.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section33" class="subtopic col-md-12">
	<h4><strong>2.8 Profil Akaun (Kemaskini maklumat akaun)</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Profil Akaun</div>
	  <div class="panel-body">
	  <p>1. Anda boleh mengemaskini maklumat akaun anda melalui borang tetapan ini.<br>
		2. Sila lengkapkan borang ini dan tekan butang <strong>Kemaskini Profil</strong></p>
		<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/borang_tetapan_profil.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_tetapan_profil.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
<div id="section34" class="subtopic col-md-12">
	<h4><strong>2.9 Tukar Kata Laluan (Kemaskini Kata Laluan)</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Tukar Kata Laluan</div>
	  <div class="panel-body">
	  	<p>1. Sila isikan kata laluan sekarang pada kotak pertama, dan isikan kata laluan baru kedalam kotak kedua dan ketiga.<br>
		- Kata laluan mestilah sekurang-kurangnya 8 huruf<br>
		2. Sila lengkapkan borang ini dan tekan butang <strong>Tukar</strong></p>
		<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/borang_tetapan_tukar_password.png" data-target="#image-gallery">
    <img class="img-responsive" src="img/borang_tetapan_tukar_password.png" alt="Another alt text">
	</a>
	  </div>
	</div>
	
</div>
</div>
</div>
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
</body>
</hmtl>