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
		position: relative; 
	}
	#section1 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section2 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section3 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section4 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section5 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section6 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section7 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section8 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section9 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section10 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section11 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section12 {padding-top:50px;height:100%;color: #fff; background-color: #fff;}
	#section13 {padding-top:50px;height:100%;color: #fff; background-color: #fffs;}

	/* The side navigation menu */
.sidenav {
	height: 100%; /* 100% Full-height */
	width: 0; /* 0 width - change this with JavaScript */
	position: fixed; /* Stay in place */
	z-index: 1; /* Stay on top */
	top: 0; /* Stay at the top */
	left: 0;
	background-color: white; /* Black*/
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
	color: #008000;
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
			<a href="#contact">Topik 2</a>
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
			<a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">1.1 Pendaftaran Akaun OnPay <i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo1">
						<a href="#section1" onclick="closeNav()" class="list-group-item">1.1.1 Layari Laman Web</a>
						<a href="#section2" onclick="closeNav()" class="list-group-item">1.1.2 Pilih Subdomain</a>
						<a href="#section3" onclick="closeNav()" class="list-group-item">1.1.3 Pilih Emel</a>
						<a href="#section4" onclick="closeNav()" class="list-group-item">1.1.4 Pilih ID dan Kata Laluan</a>
						<a href="#section5" onclick="closeNav()" class="list-group-item">1.1.5 Isi Maklumat Profil Diri</a>
						<a href="#section6" onclick="closeNav()" class="list-group-item">1.1.6 Pengesahan spam/robot (reCAPTCHA)</a>
						<a href="#section7" onclick="closeNav()" class="list-group-item">1.1.7 Klik Butang Daftar</a> 
		</div>
		<a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">1.2 Pengaktifan Akaun OnPay <i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo2">
						<a href="#section8" onclick="closeNav()" class="list-group-item">1.2.1 Semak Emel "Pendaftaran Akaun OnPay</a>
						<a href="#section9" onclick="closeNav()" class="list-group-item">1.2.2 Tekan hyperlink pengaktifan akaun</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">1.2.3 Pengaktifan Akaun OnPay Berjaya</a>
		</div>
		<a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">1.3 Log Masuk Akaun OnPay <i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo3">
						<a href="#section11" onclick="closeNav()" class="list-group-item">1.3.1 Layari halaman Log Masuk Akaun Anda"</a>
						<a href="#section12" onclick="closeNav()" class="list-group-item">1.3.2 Masukkan ID Admin dan Kata Laluan</a>
						<a href="#section13" onclick="closeNav()" class="list-group-item">1.3.3 Log Masuk Akaun OnPay Berjaya</a>
		</div>
	</div>
	</div>
	
</div>
</div>
	</div>
	<div>
	</div>
	</div>
</nav>

<div id="section1" class="container-fluid">
	<h4>1.1.1 Layari laman web untuk mendaftar.</h4><br>
			<p>1. Anda perlu melayari laman web <a href="https://onpay.my/register">https://onpay.my/register</a> untuk mendaftar isi semua maklumat di dalam borang tersebut</p>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/url.jpg" target="_blank">
					<img src="img/url.jpg" alt="Lights" style="width:70%">
					<div class="caption">
						<p>Gambar URL untuk pendaftaran OnPay</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/full.jpg" target="_blank">
					<img src="img/full.jpg" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar borang pendaftaran OnPay</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section2" class="container-fluid">
	<h4>1.1.2 Pilih Subdomain</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/subdomain.jpg" target="_blank">
					<img src="img/subdomain.jpg" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar ruangan subdomain</p>
					</div>
				</a>
			</div>
		</div>
		<p><strong>TIPS MEMILIH SUBDOMAIN</strong></p>
		<li>mestilah unik.</li>
		<li>minimum 3 huruf, maksimum 30 huruf.</li>
		<li>guna kombinasi abjad, nombor, dash dan underscore sahaja.</li><br>
		<p><strong>***Disarankan menggunakan nama syarikat/nama produk/nama bisnes sebagai nama subdomain anda.***</strong></p>
		<p><strong>PERINGATAN</strong></p>
		<p>- Tidak menggunakan menggunakkan nama subdomain yang telah berdaftar.</p>
		<p>- Satu subdomain untuk satu akaun dan tidak boleh menukar nama subdomain selepas pendaftaran.</p>
</div>
<div id="section3" class="container-fluid">
	<h4>1.1.3 Isi Emel</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/emel.jpg" target="_blank">
					<img src="img/emel.jpg" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar ruangan emel</p>
					</div>
				</a>
			</div>
		</div>
		<p><strong>TIPS MENGISI EMEL</strong></p>
		<li>Hanya format sah sahaja diterima contoh : (ahmad@gmail.com) .</li>
		<li>Emel yang pernah wujud di dalam pangkalan data tidak dibenarkan untuk digunakan. Emel yang belum berdaftar sahaja dibenarkan.</li><br>
		<p><strong>***Anda boleh gunakan emel sebagai ID Admin jika terlupa ID admin anda.***</strong></p>
		<p><strong>PERINGATAN</strong></p>
		<p>- Emel notifikasi pendaftaran akaun akan dihantar ke emel yang anda daftarkan. Pastikan anda boleh akses emel tersebut untuk pengesahan pendaftaran akaun.</p>
</div>
<div id="section4" class="container-fluid">
	<h4>1.1.4 Pilih ID dan Kata Laluan</h4>
<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/idpass.jpg" target="_blank">
					<img src="img/idpass.jpg" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar ruangan emel</p>
					</div>
				</a>
			</div>
		</div>
		<p><strong>TIPS MEMILIH ID DAN KATA LALUAN</strong></p>
		<li>mestilah unik.(ID)</li>
		<li>Guna kombinasi abjad, nombor, dash dan underscore sahaja.(ID)</li>
		<li>Maksimum 30 karakter huruf sahaja.(ID & Kata Laluan)</li>
		<li>Boleh guna apa-apa kombinasi.(Kata Laluan)</li><br>
		<p></p>
		<p><strong>PERINGATAN</strong></p>
		<p>- <strong>*JANGAN KONGSI ID DAN KATA LALUAN KEPADA PIHAK KETIGA.*</strong>.</p>
		<p>- Boleh kemaskini ID di menu "Tetapan", submenu "Profil Akaun", untuk Kata Laluan pada submenu "Tukar Kata Laluan".</p>
</div>
<div id="section5" class="container-fluid">
	<h4>1.1.5 Isi Maklumat Profil Diri</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/profilanda.jpg" target="_blank">
					<img src="img/profilanda.jpg" alt="Lights" style="width:60%">
					<div class="caption">
						<p>Gambar ruangan maklumat diri</p>
					</div>
				</a>
			</div>
		</div>
		<p><strong>TIPS MENGISI RUANGAN MAKLUMAT DIRI</strong></p>
		<li>Ruangan Nombor HP hanya menerima format (0123456789, 012-3456789, 6012-3456789, +6012-3456789).</li><br>
		<p><strong>***Sila gunakan NAMA PENUH dan NOMBOR HP yang benar untuk tujuan invois,email dan lain-lain.***</strong></p>
		<p><strong>PERINGATAN</strong></p>
		<p>- Anda boleh mengubah maklumat profil anda selepas Log Masuk (log in) dan mengakses "Profil Akaun" melalui menu "Tetapan" di bahagian atas kanan menu navigasi (navbar).</p>
</div>
<div id="section6" class="container-fluid">
	<h4>1.1.6 Pengesahan spam/robot (reCAPTCHA)</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/reCAPTCHA.jpg" target="_blank">
					<img src="img/reCAPTCHA.jpg" alt="Lights" style="width:50%">
					<div class="caption">
						<p>Gambar reCAPTCHA</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/pengesahanrobot.jpg" target="_blank">
					<img src="img/pengesahanrobot.jpg" alt="Lights" style="width:40%">
					<div class="caption">
						<p>Gambar borang pengesahan robot</p>
					</div>
				</a>
			</div>
		</div>
		<p>- Sila tandakan kotak "Saya Bukan Robot" untuk memaparkan soalan pengesahan.</p>
		<p>- Jawab soalan dengan betul untuk mengesahkan bahawa anda bukan robot/spam.</p>

</div>
<div id="section7" class="container-fluid">
	<h4>1.1.7 Klik Butang Daftar</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/terimakasih.jpg" target="_blank">
					<img src="img/terimakasih.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar mesej "Terima Kasih"</p>
					</div>
				</a>
			</div>
		</div>
		<p>Setelah butang "Daftar" ditekan, anda akan dibawa kepada halaman pengesahan penerimaan pendaftaran. Anda akan menerima mesej seperti berikut: </p>
</div>
<div id="section8" class="container-fluid">
	<h4>1.2.1 Semak Emel Bertajuk "Pendaftaran Akaun OnPay"</h4>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/newmsg.jpg" target="_blank">
					<img src="img/newmsg.jpg" alt="Lights" style="width:100%">
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
<div id="section9" class="container-fluid">
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
<div id="section10" class="container-fluid">
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
<div id="section11" class="container-fluid">
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
<div id="section12" class="container-fluid">
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
<div id="section13" class="container-fluid">
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
</body>
</hmtl>