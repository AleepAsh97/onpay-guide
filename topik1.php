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
		background-image: url("img/books.jpg"); 
	}
	#section1 {padding-top:50px;height:850px;color: #fff; background-color: #fff;}
	#section2 {padding-top:50px;height:1200px;color: #fff; background-color: #fff;}
	#section3 {padding-top:50px;height:1000px;color: #fff; background-color: #fff;}
	#section4 {padding-top:50px;height:1500px;color: #fff; background-color: #fff;}
	#section5 {padding-top:50px;height:1550px;color: #fff; background-color: #fff;}
	#section6 {padding-top:50px;height:900px;color: #fff; background-color: #fff;}
	#section7 {padding-top:50px;height:500px;color: #fff; background-color: #fff;}
	#section8 {padding-top:50px;height:800px;color: #fff; background-color: #fff;}
	#section9 {padding-top:50px;height:1000px;color: #fff; background-color: #fff;}
	#section10 {padding-top:50px;height:1000px;color: #fff; background-color: #fff;}
	#section11 {padding-top:50px;height:1000px;color: #fff; background-color: #fff;}
	#section12 {padding-top:50px;height:1000px;color: #fff; background-color: #fff;}
	#section13 {padding-top:50px;height:1000px;color: #fff; background-color: #fff;}

	/* The side navigation menu */
.sidenav {
	height: 100%; /* 100% Full-height */
	width: 0; /* 0 width - change this with JavaScript */
	position: fixed; /* Stay in place */
	z-index: 1; /* Stay on top */
	top: 0; /* Stay at the top */
	left: 0;
	background-color: #6666ff; /* Black*/
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
	color: red;
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

#well {
	display: ruby-base-container;
}

#MainMenu{
	background-color: black;
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
			<a href="#demo1" class="list-group-item list-group-item-default" data-toggle="collapse" data-parent="#MainMenu">1.1 Pendaftaran Akaun OnPay <i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo1">
						<a href="#section1" onclick="closeNav()" class="list-group-item">1.1.1 Layari Laman Web</a>
						<a href="#section2" onclick="closeNav()" class="list-group-item">1.1.2 Pilih Subdomain</a>
						<a href="#section3" onclick="closeNav()" class="list-group-item">1.1.3 Pilih Emel</a>
						<a href="#section4" onclick="closeNav()" class="list-group-item">1.1.4 Pilih ID dan Kata Laluan</a>
						<a href="#section5" onclick="closeNav()" class="list-group-item">1.1.5 Isi Maklumat Profil Diri</a>
						<a href="#section6" onclick="closeNav()" class="list-group-item">1.1.6 Pengesahan spam/robot (reCAPTCHA)</a>
						<a href="#section7" onclick="closeNav()" class="list-group-item">1.1.7 Klik Butang Daftar</a> 
		</div>
		<a href="#demo2" class="list-group-item list-group-item-default" data-toggle="collapse" data-parent="#MainMenu">1.2 Pengaktifan Akaun OnPay <i class="fa fa-caret-down"></i></a>
					<div class="collapse" id="demo2">
						<a href="#section8" onclick="closeNav()" class="list-group-item">1.2.1 Semak Emel "Pendaftaran Akaun OnPay</a>
						<a href="#section9" onclick="closeNav()" class="list-group-item">1.2.2 Tekan hyperlink pengaktifan akaun</a>
						<a href="#section10" onclick="closeNav()" class="list-group-item">1.2.3 Pengaktifan Akaun OnPay Berjaya</a>
		</div>
		<a href="#demo3" class="list-group-item list-group-item-default" data-toggle="collapse" data-parent="#MainMenu">1.3 Log Masuk Akaun OnPay <i class="fa fa-caret-down"></i></a>
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
<div class="container">
<div class="row" id="row">
	<div class="well" id="well">
<div id="section1" class="container-fluid">
	<h4><strong>1.1.1 Layari laman web untuk mendaftar.</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Langkah Pertama</div>
	  <div class="panel-body"><p>1. Anda perlu melayari laman web <a href="https://onpay.my/register">https://onpay.my/register</a> untuk mendaftar isi semua maklumat di dalam borang tersebut</p>
		<p>2. Selepas itu, anda akan dibawa ke halaman Borang Pendaftaran OnPay</p></div>
	</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/url.jpg">
					<img src="img/url.jpg" alt="Lights" style="width:100%">
					<div class="caption">	
					</div>
				</a>
			</div>
			<p>Anda boleh taip URL seperti di dalam gambar ini.</p>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/full.jpg">
					<img src="img/full.jpg" alt="Lights" style="width:100%">
					<div class="caption">
					</div>
				</a>
			</div>
			<p>Gambar borang pendaftaran OnPay</p>
		</div>
</div>
<div id="section2" class="container-fluid">
	<h4><strong>1.1.2 Pilih Subdomain</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Memilih Subdomain</div>
	  <div class="panel-body">
			<p>1) Subdomain mestilah unik.</p>
			<p>2) Minimum 3 karakter huruf.</p>
			<p>3) Maksimum 30 karakter huruf.</p> 
			<p>4) Nama subdomain hendaklah mengandungi kombinasi abjad, nombor, dash dan underscore sahaja.</p></div>
	</div>
	<div class="panel panel-info">
	  <div class="panel-heading">Cadangan Pemilihan Subdomai</div>
	  <div class="panel-body">
		<p>1) Nama Syarikat anda</p> 
		<p>2) Nama Produk anda</p> 
		<p>3) Nama Bisnes anda</p> 
		<p>Contohnya, sekiranya anda mengisi "carimakan" didalam kotak subdomain, maka alamat url anda ialah carimakan.onpay.my</p>
	  </div>
	</div>
	<div class="panel panel-danger">
	  <div class="panel-heading"><strong>PERINGATAN</strong></div>
	  <div class="panel-body">
		<p>1) <strong>Subdomain adalah unik.</strong> Anda tidak dibenarkan mendaftar subdomain yang sama dengan subdomain yang telah didaftarkan.</p> 
		<p>2) Anda hanya dibenarkan mendaftar satu <strong>subdomain bagi setiap akaun.</strong></p> 
		<p>3) Subdomain <strong>tidak boleh di tukar</strong> selepas pendaftaran.</p>
		<p>Sebarang kesilapan dalam pengisian borang akan dipaparkan kesilapan yang berlaku. Sila rujuk paparan tersebut untuk memperbetulkan kesilapan anda.</p>
</div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/subdomain.jpg">
					<img src="img/subdomain.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan subdomain</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section3" class="container-fluid">
	<h4><strong>1.1.3 Isi Emel</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Mengisi Emel</div>
	  <div class="panel-body">
		<p>1) Hanya emel yang sah format sahaja diterima:</p> 
		<p>Format emel: nama_emel@domain.suffix</p> 
		<p>Contoh emel : ahmad@gmail.com</p> 
		<p>2) Hanya emel yang belum didaftarkan sahaja yang dibenarkan. Emel yang telah wujud di dalam pangkalan data tidak akan dibenarkan untuk digunakan.</p>
	  </div>
	</div>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p><strong>Anda juga boleh menggunakan emel sebagai ID Admin semasa proses Log Masuk (Log In) sekiranya anda terlupa ID Admin anda.</strong></p></div>
	</div>
	<div class="panel panel-danger">
	  <div class="panel-heading"><strong>PERINGATAN</strong></div>
	  <div class="panel-body"><p>Sekiranya anda telah memilih "ahmad@gmail.com", maka emel notifikasi tentang pendaftaran akaun akan dihantar kepada emel tersebut. 
	  <strong>Anda perlu mengakses emel ini demi mengesahkan pendaftaran akaun anda.</strong></p></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/emel.jpg">
					<img src="img/emel.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan emel</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section4" class="container-fluid">
	<h4><strong>1.1.4 Pilih ID dan Kata Laluan</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Memilih ID dan Kata Laluan</div>
	  <div class="panel-body">
		<p><strong>ID:</strong></p> 
  		<p>1) ID mestilah unik.</p> 
  		<p>2) ID Admin hendaklah mengandungi kombinasi abjad, nombor, dash dan underscore sahaja.</p> 
  		<p>3) Demi tujuan keselamatan, anda dinasihatkan untuk memilih ID yang hanya diketahui oleh anda.</p> 
  		<p>4) Hanya 30 kombinasi karakter sahaja yang dibenarkan.</p> 

		<p><strong>Kata Laluan:</strong></p> 
  		<p>1) Anda dibenarkan memilih apa sahaja kombinasi kata laluan yang anda inginkan.</p> 
  		<p>2) Demi tujuan keselamatan, anda dinasihatkan untuk memilih Kata Laluan yang hanya diketahui oleh anda.</p> 
  		<p>3) Hanya 30 kombinasi karakter sahaja yang dibenarkan.</p> 
  		<p>4) Sila isikan kombinasi kata laluan yang sama demi tujuan pengesahan di kotak pengesahan kata laluan.</p>
		</div>
	</div>
	 <div class="panel panel-danger">
	  <div class="panel-heading"><strong>PERINGATAN</strong></div>
	  <div class="panel-body"><p><strong>*JANGAN KONGSI ID DAN KATA LALUAN KEPADA PIHAK KETIGA.*</strong>.</p>
		<p>1) ID adalah unik bagi subdomain anda. ID yang wujud di dalam subdomain lain masih boleh digunakan bagi subdomain anda kerana ID didaftarkan unik di bawah setiap subdomain.</p>
		<p>2) Anda boleh mengubah ID Admin anda selepas Log Masuk (log in) dan mengakses "Profil Akaun" melalui menu "Tetapan" di bahagian atas kanan menu navigasi (navbar).</p>
		<p>3) Kata Laluan juga boleh diubah melalui menu "navbar" "Tetapan" > "Tukar Kata Laluan" di bawah menu "Profil Akaun".</p>
	</div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/idpass.jpg">
					<img src="img/idpass.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan ID dan Kata Laluan</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section5" class="container-fluid">
	<h4><strong>1.1.5 Isi Maklumat Profil Diri</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Mengisi Maklumat Profil Diri</div>
	  <div class="panel-body">
	  	<p><strong>Nama:</strong></p> 
  		<p>1) Anda dibenarkan untuk mengisi apa-apa sahaja kombinasi karakter yang diinginkan.</p> 

		<p><strong>Nombor HP:</strong></p> 
  		<p>1) Nombor HP hanya akan menerima kombinasi nombor, dash (-) dan tambah (+).</p> 
  		<p>2) Sila masukkan Nombor HP mengikut salah satu format di bawah:</p>
		<p>i) prefix+suffix 0123456789</p>
		<p>ii) prefix+(-)+suffix012-3456789</p>
		<p>iii) "Kod Negara"+(-)+prefix+suffix6012-3456789</p>
		<p>iv) (+)+"Kod Negara"+(-)+prefix+suffix+6012-3456789</p>
		
		<p><strong>Jantina:</strong></p> 
  		<p>Sila pilih antara Lelaki atau Perempuan.</p> 

		<p><strong>Tarikh Lahir:</strong></p> 
  		<p>Sila tekan kotak input atau ikon kalendar untuk memaparkan kalendar bagi memudahkan proses pemilihan tarikh.  Format tarikh yang terbaik adalah seperti berikut: "30 Mac 2016"</p>	  	
	  </div>
	</div>
	<div class="panel panel-info">
	  <div class="panel-heading">Cadangan pengisian Profil Pengguna:</div>
	  <div class="panel-body"><p><strong>1) Nama anda perlulah NAMA PENUH ANDA untuk tujuan rasmi Syarikat seperti Invois, email dan lain-lain.<br>
	  2) Pastikan No. HP anda boleh dihubungi jika terdapat masalah berkenaan akaun anda jika tidak dapat</strong></p></div>
	</div>
	<div class="panel panel-danger">
	  <div class="panel-heading"><strong>PERINGATAN</strong></div>
	  <div class="panel-body"><p>1) Anda boleh mengubah maklumat profil anda selepas Log Masuk (log in) dan mengakses "Profil Akaun" melalui menu "Tetapan" di bahagian atas kanan menu navigasi (navbar).</p></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/profilanda.jpg">
					<img src="img/profilanda.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan maklumat diri</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section6" class="container-fluid">
	<h4><strong>1.1.6 Pengesahan spam/robot (reCAPTCHA)</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Mengenai Pengesahan SPAM/Robot (reCAPTCHA)</div>
	  <div class="panel-body"><li>Sila tandakan kotak "Saya Bukan Robot" untuk memaparkan soalan pengesahan.</li>
		<li>Jawab soalan dengan betul untuk mengesahkan bahawa anda bukan robot/spam.</li></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/reCAPTCHA.jpg">
					<img src="img/reCAPTCHA.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar reCAPTCHA</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/pengesahanrobot.jpg">
					<img src="img/pengesahanrobot.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar borang pengesahan robot</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section7" class="container-fluid">
	<h4><strong>1.1.7 Klik Butang Daftar</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Setelah butang "Daftar" ditekan, anda akan dibawa kepada halaman pengesahan penerimaan pendaftaran. Anda akan menerima mesej seperti berikut: </p></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/terimakasih.jpg">
					<img src="img/terimakasih.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar mesej "Terima Kasih"</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section8" class="container-fluid">
	<h4><strong>1.2.1 Semak Emel Bertajuk "Pendaftaran Akaun OnPay"</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>1. Sila semak di emel anda emel bertajuk "Pendaftaran Akaun OnPay"</p>
		<p>2. Sila buka emel dari "admin@onpay.my" yang bertajuk <strong>"Pendaftaran Akaun OnPay"</strong>.</p></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/newmsg.jpg">
					<img src="img/newmsg.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Pendaftaran Akaun OnPay</p>
					</div>
				</a>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/msgdetail.jpg">
					<img src="img/msgdetail.jpg" alt="Lights" style="width:100%">
				</a>
			</div>
		</div>
</div>
<div id="section9" class="container-fluid">
	<h4><strong>1.2.2 Tekan Hyperlink Pengaktifan Akaun</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Pengaktifan Akaun</div>
	  <div class="panel-body"><p>1. Sila Tekan hyperlink pengaktifan seperti di Gambar 1</p>
		<p>2) Sekiranya hyperlink (#1) gagal berfungsi, sila klik hyperlink (2.1) untuk pengaktifan secara manual. Copy kod pengaktifan dari Gambar 2 dan gunakan di halaman pengaktifan.</p>
		<p>Sila pastikan anda copy & paste kod pengaktifan demi mengelakkan ralat <strong>"kod pengaktifan tidak sah"</strong> seperti di Gambar 3.</p></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/hyperlink_pengesahan.jpg">
					<img src="img/hyperlink_pengesahan.jpg" alt="Lights" style="width:100%%">
					<div class="caption">
						<p>Gambar 1</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/hyperlink_pengesahan1.jpg">
					<img src="img/hyperlink_pengesahan1.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar 2</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/kod_salah.jpg">
					<img src="img/kod_salah.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar 3</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section10" class="container-fluid">
	<h4><strong>1.2.3 Pengaktifan Akaun OnPay Berjaya</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Pengaktifan Akaun anda berjaya apabila keluar mesej seperti di dalam Gambar Pengaktifan Akaun</p></div>
	</div>
	<div class="col-md-6">
			<div class="thumbnail">
				<a href="img/pengaktifan_berjaya.jpg">
					<img src="img/pengaktifan_berjaya.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar Pengaktifan Akaun</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section11" class="container-fluid">
	<h4><strong>1.3.1 Layari Halaman Log Masuk Akaun anda</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body">
	  	<p>Terdapat dua cara untuk melayari halaman log masuk untuk akaun anda:<br>
		1) Layari halaman utama anda "subdomain_anda.onpay.my"<br>
		i- Contoh: demo.onpay.my<br>
		ii- Tekan butang "Admin" di bahagian atas kanan halaman utama anda.</p>
		<p>2) Layari "subdomain_anda.onpay.my/admin"<br>
		Contoh: demo.onpay.my/admin<br>
		Anda akan dibawa ke halaman seperti di bawah:</p>

	  </div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/halaman_utama.jpg">
					<img src="img/halaman_utama.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Langkah 1</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/halaman_log_masuk.jpg">
					<img src="img/halaman_log_masuk.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Langkah 2</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section12" class="container-fluid">
	<h4><strong>1.3.2 Masukkan ID Admin dan Kata Laluan</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Letakkan ID dan Kata Laluan di ruangan "ID Admin" dan "Kata Laluan".</p></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/log_masuk.png">
					<img src="img/log_masuk.png" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar ruangan "ID Admin" dan "Kata Laluan".</p>
					</div>
				</a>
			</div>
		</div>
</div>
<div id="section13" class="container-fluid">
	<h4><strong>1.3.3 Log Masuk Akaun OnPay Berjaya</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Sekiranya proses log masuk berjaya, anda akan dibawa ke halaman Dashboard Admin seperti di Gambar 1:</p>
		<p>Sekiranya ralat "ID atau Kata Laluan salah" terpapar seperti di Gambar 2, sila:<br>
							1.Isikan semula ID dan Kata Laluan<br>
							2.Tekan hyperlink Terlupa Kata Laluan</p></div>
	</div>
	<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/dashboard_admin.jpg">
					<img src="img/dashboard_admin.jpg" alt="Lights" style="width:70%">
					<div class="caption">
						<p>Gambar 1</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="img/ralat_log_gagal.jpg">
					<img src="img/ralat_log_gagal.jpg" alt="Lights" style="width:100%">
					<div class="caption">
						<p>Gambar 2</p>
					</div>
				</a>
			</div>
		</div>
</div>
</div>
</div>
</div>
</body>
</hmtl>