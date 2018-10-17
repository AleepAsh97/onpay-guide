<!DOCTYPE hmtl>
<hmtl lang="en">
<head>
		<title>Tutorial OnPay</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="index.js"></script>
		
<script>

	$(function(){
	$('.toggle-menu').click(function(e){
	e.preventDefault();
	$('.sidebar').toggleClass('toggled');
		});
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

<style>
div.scrollmenu {
	white-space: nowrap; /* [1] */
	overflow-x: auto; /* [2] */
	-webkit-overflow-scrolling: touch; /* [3] */
	-ms-overflow-style: -ms-autohiding-scrollbar; /* [4] */ 
}

div.scrollmenu::-webkit-scrollbar {
	display: none; }

div.scrollmenu a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px;
		text-decoration: none;
}

div.scrollmenu a:hover {
		background-color: #777;
}

	body {
		background-image: url("img/books.jpg");
		position: relative; 
	}

	/* The side navigation menu */
.sidenav {
	height: 100%; /* 100% Full-height */
	width: 0; /* 0 width - change this with JavaScript */
	position: fixed; /* Stay in place */
	z-index: 1; /* Stay on top */
	top: 0; /* Stay at the top */
	left: 0;
	background-color: #6666FF; /* Black*/
	overflow-x: hidden; /* Disable horizontal scroll */
	padding-top: 60px; /* Place content 60px from the top */
	transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
	padding: 4px 4px 4px 32px;
	text-decoration: none;
	font-size: 20px;
	color: #101010;
	display: block;
	transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
	color: #101010;

}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
	position: absolute;
	top: 0;
	right: 25px;
	font-size: 36px;
	margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
	transition: margin-left .5s;
	padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
	.sidenav {padding-top: 15px;}
	.sidenav a {font-size: 18px;}
}

div.panel-body li {
	color: black;
}

div.panel-body p {
	color: black;
}

p {
	color: black;
}

h4 {
	color: black;
}

li {
	color: black;
}

.subtopic {
	padding: 40px;
	background-color: #fff;
}


</style>
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
	<h4>2.1.2 Staf</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/staf.png">
					<img src="img/staf.png" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar ruangan staf</p>
					</div>
				</a>
			</div>
		</div>
		<p>1.Staf anda boleh melihat carta Top 10 Staf dengan tick kotak "Papar carta top 10 staf" dan klik paparan di "Julat Data Carta Top 10 Staf" samada mahukan data secara keseluruhan,tahunan,bulanan atau custom (tetap sendiri tarikh julat data dikumpul)</p>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/formula_komisen.png">
					<img src="img/formula_komisen.png" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar formula komisen. (Klik gambar untuk lihat formula)</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section3" class="subtopic col-md-12">
	<h4>2.1.3 Affiliate</h4>
		<p>1.Ejen anda boleh melihat carta Top 10 Staf dengan tick kotak "Papar carta top 10 ejen" dan klik paparan di "Julat Data Carta Top 10 Ejen" samada mahukan data secara keseluruhan,tahunan,bulanan atau custom (tetap sendiri tarikh julat data dikumpul)</p>
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
<div id="section4" class="subtopic col-md-12">
	<h4>2.1.4 Dropship</h4>
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
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/panduan_asas.png">
					<img src="img/panduan_asas.png" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar panduan asas</p>
					</div>
				</a>
			</div>
		</div>
		<p>1.Dropship anda boleh melihat carta Top 10 Staf dengan tick kotak "Papar carta top 10 ejen" dan klik paparan di "Julat Data Carta Top 10 Ejen" samada mahukan data secara keseluruhan,tahunan,bulanan atau custom (tetap sendiri tarikh julat data dikumpul)</p>
</div>
<div id="section5" class="subtopic col-md-12">
	<h4>2.1.5 Pengedar</h4>
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
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/panduan_asas.png">
					<img src="img/panduan_asas.png" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar panduan asas</p>
					</div>
				</a>
			</div>
		</div>
		<p>1.Ejen anda boleh melihat carta Top 10 Staf dengan tick kotak "Papar carta top 10 ejen" dan klik paparan di "Julat Data Carta Top 10 Ejen" samada mahukan data secara keseluruhan,tahunan,bulanan atau custom (tetap sendiri tarikh julat data dikumpul)</p>
</div>
<div id="section6" class="subtopic col-md-12">
	<h4>2.1.6 Kaedah Pembayaran</h4>
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
	<p>- Kedudukan kaedah pembayaran boleh diubah secara drag and drop dengan memegang pada nombor</p>
	<p>- Tick ruangan "Paparkan Logo" jika anda mahu paparkan logo.</p>
</div>
<div id="section7" class="subtopic col-md-12">
	<h4>2.1.7 Emel</h4>
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
		<p>1. Anda perlu mengisi ruangan penerima notifikasi dengan emel anda.</p>
		<p><strong>*** Anda dibenarkan mengisi sebanyak 3 emel sahaja. ***</strong></p><br>
		<p>2. Di bahagian notifikasi anda boleh custom notifikasi untuk jualan, pelanggan, affiliate, dropship, pengedar</p>
</div>
<div id="section8" class="subtopic col-md-12">
	<h4>2.1.8 SMS</h4>
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
		<p>Sebelum anda menggunakan fungsi SMS, pastikan anda mempunyai kredit yang mencukupi untuk menghantar SMS.</p>
		<p><strong>*** Anda boleh topup kredit anda di menu utama OnPay ***</strong></p><br>
		<p>2. Di bahagian notifikasi anda boleh custom notifikasi SMS untuk jualan, pelanggan, affiliate, dropship, pengedar</p>
</div>
<div id="section9" class="subtopic col-md-12">
	<h4>2.1.9 Invois</h4>
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
						<p>1. Tetapkan Pilihan Templat Kepala Invois dan Masukkan Gambar</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/status_invois.png">
					<img src="img/status_invois.png" alt="Lights" style="width:30%">
					<div class="caption">
						<p>2. Isikan Teks Status Pembayaran</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/contoh_invois.png">
					<img src="img/contoh_invois.png" alt="Lights" style="width:20%">
					<div class="caption">
						<p>3. Tekan Butang Previu untuk paparkan contoh invois</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section10" class="subtopic col-md-12">
	<h4>2.1.10 Cukai</h4>
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
		<p>Ruangan yang bertanda * wajib diisi sepenuhnya.</p>
		<p><strong>** Kadar cukai dalam bentuk peratusan sahaja **</strong></p><br>
		<p>1. Untuk ruangan Jenis Cukai anda boleh tekan samada Ekslusif atau Inklusif</p>
		<p>2. Jika anda klik kotak Kos Penghantaran, kos tersebut akan dikira secara automatik di dalam pengiraan cukai</p>
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