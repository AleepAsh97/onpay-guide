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

.subtopic {
	padding: 30px;
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
</nav>

<div class="container" style="margin-top: 50px">
<div class="row">
	<div class="subtopic col-md-12" id="section1">
		<h4><strong>1.1.1 Layari laman web untuk mendaftar.</strong></h4><br>
		<div class="panel panel-info">
			<div class="panel-heading">Langkah Pertama</div>
			<div class="panel-body"><p>1. Anda perlu melayari laman web <a href="https://onpay.my/register">https://onpay.my/register</a> untuk mendaftar isi semua maklumat di dalam borang tersebut</p>
			<p>2. Selepas itu, anda akan dibawa ke halaman Borang Pendaftaran OnPay</p></div>
		</div>
		<div class="row">
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
	</div>
	<div class="subtopic col-md-12" id="section2">
		<h4><strong>1.1.2 Pilih Subdomain</strong></h4><br>
		<div class="panel panel-primary">
			<div class="panel-heading">Panduan Memilih Subdomain</div>
			<div class="panel-body"><li>Mestilah unik.</li>
			<li>Minimum 3 huruf, maksimum 30 huruf.</li>
			<li>Guna kombinasi abjad, nombor, dash dan underscore sahaja.</li></div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">Info</div>
			<div class="panel-body"><p><strong>Disarankan menggunakan nama syarikat/nama produk/nama bisnes sebagai nama subdomain anda.</strong></p></div>
		</div>
		<div class="panel panel-danger">
			<div class="panel-heading"><strong>PERINGATAN</strong></div>
			<div class="panel-body">
			<li>Tidak menggunakan menggunakkan nama subdomain yang telah berdaftar.</li>
			<li>Satu subdomain untuk satu akaun dan tidak boleh menukar nama subdomain selepas pendaftaran.</li></div>
		</div>
		<div class="row">
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
	</div>
</div>
</div>
</body>
</hmtl>