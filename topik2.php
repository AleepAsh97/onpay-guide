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
	<a class="navbar-brand" href="index.php">Halaman Utama</a>
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
			<a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">2.1 Tetapan Sistem <i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo1">
						<a href="#section1" onclick="closeNav()" class="list-group-item">2.1.1 Perniagaan (WAJIB)</a>
						<a href="#section2" onclick="closeNav()" class="list-group-item">2.1.2 Staf (optional)</a>
						<a href="#section3" onclick="closeNav()" class="list-group-item">2.1.3 Affiliate (optional)</a>
						<a href="#section5" onclick="closeNav()" class="list-group-item">2.1.4 Dropship</a>
						<a href="#section5" onclick="closeNav()" class="list-group-item">2.1.5 Pengedar</a>
						<a href="#section4" onclick="closeNav()" class="list-group-item">2.1.6 Kaedah Pembayaran</a>
						<a href="#section5" onclick="closeNav()" class="list-group-item">2.1.7 Emel</a>
						<a href="#section6" onclick="closeNav()" class="list-group-item">2.1.8 SMS (optional)</a>
						<a href="#section7" onclick="closeNav()" class="list-group-item">2.1.9 Invois</a>
						<a href="#section7" onclick="closeNav()" class="list-group-item">2.1.10 Cukai</a>
		</div>
		<a href="#demo214" class="list-group-item list-group-item-success" data-toggle="collapse">2.2 Kaedah Pembayaran (WAJIB)<i class="fa fa-caret-down"></i></a>
						<div class="collapse" id="demo214">
						<a href="#section8" onclick="closeNav()" class="list-group-item">Penetapan Akaun PayPal</a>
						<a href="#section9" onclick="closeNav()" class="list-group-item">Penetapan Akaun iPay88</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">Penetapan Akaun MOLPay</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">Penetapan Akaun senangPay</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">Penetapan Fungsi CEK</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">Penetapan Fungsi Wang Pos</a>
						</div>
		<a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">2.3 Tetapan Templat Emel<i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo2">
						<a href="#section8" onclick="closeNav()" class="list-group-item">2.2.1 Tetapan Templat Emel Pendaftaran Ejen</a>
						<a href="#section9" onclick="closeNav()" class="list-group-item">2.2.2 Tetapan Templat Emel Tetapan Semula Kata Laluan Ejen</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">2.2.3 Tetapan Templat Emel Pembayaran Komisen</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">2.2.4 Tetapan Templat Emel Ucapan Hari Lahir</a>
		</div>
		<a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">2.4 Tetapan Penghantar / Kurier<i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo3">
						<a href="#section11" onclick="closeNav()" class="list-group-item">2.3.1 Tambah Kurier</a>
						<a href="#section12" onclick="closeNav()" class="list-group-item">2.3.2 Kemaskini/Padam Kurier</a>
		</div>
		<a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">2.5 Label Penghantaran<i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo4">
						<a href="#section11" onclick="closeNav()" class="list-group-item">2.3.1 Tetapan Saiz Cetakan Kertas Khas (Saiz Borang Pos Laju) (Lebar × Tinggi = 210 mm × 101mm)</a>
						<a href="#section12" onclick="closeNav()" class="list-group-item">2.3.2 Isi Maklumat Anda ke dalam Borang Pos Laju</a>
						<a href="#section12" onclick="closeNav()" class="list-group-item">2.3.3 Cara Cetak Label Penghantaran Pelanggan</a>
		</div>
		<a href="#section10" onclick="closeNav()" class="list-group-item list-group-item-success">2.6 Senarai Hitam ID Ejen</a>
		<a href="#section10" onclick="closeNav()" class="list-group-item list-group-item-success">2.7 Profil Akaun</a>
		<a href="#section10" onclick="closeNav()" class="list-group-item list-group-item-success">2.8 Tukar Kata Laluan</a>
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
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/borang_sistem_perniagaan.png">
					<img src="img/borang_sistem_perniagaan.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>Borang Maklumat Perniagaan</p>
					</div>
				</a>
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
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/staf.png">
					<img src="img/staf.png" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan staf</p>
					</div>
				</a>
			</div>
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
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/konsep_komisen.png">
					<img src="img/konsep_komisen.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>Gambar konsep komisen.</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/cookies.png">
					<img src="img/cookies.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>Gambar cookies.</p>
					</div>
				</a>
			</div>
		</div>
				<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/formula_komisen.png">
					<img src="img/formula_komisen.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>Gambar formula komisen.(Klik gambar untuk lihat formula)</p>
					</div>
				</a>
			</div>
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
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/dropship.png">
					<img src="img/dropship.png" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar ruangan dropship</p>
					</div>
				</a>
			</div>
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
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/pengedar.png">
					<img src="img/pengedar.png" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar ruangan pengedar</p>
					</div>
				</a>
			</div>
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
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/kaedah_pembayaran.png">
					<img src="img/kaedah_pembayaran.png" alt="Lights" style="width:50%">
					<div class="caption">
						<p>Gambar ruangan kaedah pembayaran</p>
					</div>
				</a>
			</div>
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
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/emel.png">
					<img src="img/emel.png" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan emel</p>
					</div>
				</a>
			</div>
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
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/sms.png">
					<img src="img/sms.png" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan SMS</p>
					</div>
				</a>
			</div>
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
	<div class="div">
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/invois.png">
					<img src="img/invois.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>Gambar ruangan invois</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/header_invois.png">
					<img src="img/header_invois.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>Langkah 1</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/status_invois.png">
					<img src="img/status_invois.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>Langkah 2</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/contoh_invois.png">
					<img src="img/contoh_invois.png" alt="Lights" style="width:20%">
					<div class="caption">
						<p>Langkah 3</p>
					</div>
				</a>
			</div>
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
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/cukai.png">
					<img src="img/cukai.png" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan cukai</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section11" class="subtopic col-md-12">
	<h4>2.2.1 Penetapan Akaun PayPal</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/paypal.png">
					<img src="img/paypal.png" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Pendaftaran Akaun OnPay</p>
					</div>
				</a>
			</div>
			<p>Sila buka emel dari "admin@onpay.my" yang bertajuk <strong>"Pendaftaran Akaun OnPay"</strong>.</p>
		</div>
		
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/msgdetail.jpg" target="_blank">
					<img src="img/msgdetail.jpg" alt="Lights" style="width:60%">
				</a>
			</div>
		</div>
</div>
<div id="section12" class="subtopic col-md-12">
	<h4>1.2.2 Tekan Hyperlink Pengaktifan Akaun</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/hyperlink_pengesahan.jpg" target="_blank">
					<img src="img/hyperlink_pengesahan.jpg" alt="Lights" style="width:30%%">
					<div class="caption">
						<p>Sila tekan hyperlink pengaktifan seperti di bawah:</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/hyperlink_pengesahan1.jpg" target="_blank">
					<img src="img/hyperlink_pengesahan1.jpg" alt="Lights" style="width:20%">
					<div class="caption">
						<p>Sila gunakan hyperlink (#1). Anda juga boleh masukkan secara manual dengan klik link (#2).</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/kod_salah.jpg" target="_blank">
					<img src="img/kod_salah.jpg" alt="Lights" style="width:20%">
					<div class="caption">
						<p>Copy kod pengaktifan dan paste ke ruangan di atas.</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section13" class="subtopic col-md-12">
	<h4>1.2.3 Pengaktifan Akaun OnPay Berjaya</h4>
	<div class="col-md-6">
			<div class="thumbnail">
				<a href="img/pengaktifan_berjaya.jpg" target="_blank">
					<img src="img/pengaktifan_berjaya.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar Pengaktifan Akaun</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section14" class="subtopic col-md-12">
	<h4>1.3.1 Layari Halaman Log Masuk Akaun anda</h4>
	<p>Terdapat 2 cara untuk melayari ke halaman log masuk untuk akaun anda</p>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/halaman_utama.jpg" target="_blank">
					<img src="img/halaman_utama.jpg" alt="Lights" style="width:50%">
					<div class="caption">
						<p>1.Layari halaman subdomain anda kemudian klik butang "Admin".</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/halaman_log_masuk.jpg" target="_blank">
					<img src="img/halaman_log_masuk.jpg" alt="Lights" style="width:50%">
					<div class="caption">
						<p>2.Atau layari "subdomain_anda.onpay.my/admin"</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section15" class="subtopic col-md-12">
	<h4>1.3.2 Masukkan ID Admin dan Kata Laluan</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/log_masuk.png" target="_blank">
					<img src="img/log_masuk.png" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Letakkan ID dan Kata Laluan di ruangan "ID Admin" dan "Kata Laluan".</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section16" class="subtopic col-md-12">
	<h4>1.3.3 Log Masuk Akaun OnPay Berjaya</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/dashboard_admin.jpg" target="_blank">
					<img src="img/dashboard_admin.jpg" alt="Lights" style="width:70%">
					<div class="caption">
						<p>Sekiranya proses log masuk berjaya, anda akan dibawa ke halaman Dashboard Admin seperti di atas:</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/ralat_log_gagal.jpg" target="_blank">
					<img src="img/ralat_log_gagal.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Sekiranya ralat "ID atau Kata Laluan salah" terpapar, sila:<br>
							1.Isikan semula ID dan Kata Laluan<br>
							2.Tekan hyperlink Terlupa Kata Laluan</p>
					</div>
				</a>
			</div>
		</div>
</div>
</div>
</div>
</body>
</hmtl>