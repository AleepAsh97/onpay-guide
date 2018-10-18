<!DOCTYPE hmtl>
<hmtl lang="en">
<head>
		<title>Tutorial OnPay</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
		 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar URL Pendaftaran OnPay"  data-image="img/url.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/url.jpg" alt="Another alt text">
            </a>
             <p>Klik untuk melihat gambar</p>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Borang Pendaftaran OnPay"  data-image="img/full.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/full.jpg" alt="Another alt text">
            </a>
           <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section2">
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
	<div class="row">
	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Subdomain"  data-image="img/subdomain.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/subdomain.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section3">
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
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Emel"  data-image="img/emel.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/emel.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section4">
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
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan ID dan Kata Laluan"  data-image="img/idpass.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/idpass.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section5">
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
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan Maklumat Diri"  data-image="img/profilanda.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/profilanda.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section6">
	<h4><strong>1.1.6 Pengesahan spam/robot (reCAPTCHA)</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Mengenai Pengesahan SPAM/Robot (reCAPTCHA)</div>
	  <div class="panel-body"><li>Sila tandakan kotak "Saya Bukan Robot" untuk memaparkan soalan pengesahan.</li>
		<li>Jawab soalan dengan betul untuk mengesahkan bahawa anda bukan robot/spam.</li></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar reCAPTCHA"  data-image="img/reCAPTCHA.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/reCAPTCHA.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Borang Pengesahan Robot"  data-image="img/pengesahanrobot.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/pengesahanrobot.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section7">
	<h4><strong>1.1.7 Klik Butang Daftar</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Setelah butang "Daftar" ditekan, anda akan dibawa kepada halaman pengesahan penerimaan pendaftaran. Anda akan menerima mesej seperti berikut: </p></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Mesej Terima Kasih"  data-image="img/terimakasih.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/terimakasih.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section8">
	<h4><strong>1.2.1 Semak Emel Bertajuk "Pendaftaran Akaun OnPay"</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>1. Sila semak di emel anda emel bertajuk "Pendaftaran Akaun OnPay"</p>
		<p>2. Sila buka emel dari "admin@onpay.my" yang bertajuk <strong>"Pendaftaran Akaun OnPay"</strong>.</p></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Email Pendaftaran Akaun OnPay"  data-image="img/newmsg.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/newmsg.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Contoh Emel Pendaftaran Akaun OnPay"  data-image="img/msgdetail.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/msgdetail.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section9">
	<h4><strong>1.2.2 Tekan Hyperlink Pengaktifan Akaun</strong></h4><br>
	<div class="panel panel-primary">
	  <div class="panel-heading">Panduan Pengaktifan Akaun</div>
	  <div class="panel-body"><p>1. Sila Tekan hyperlink pengaktifan seperti di Gambar 1</p>
		<p>2) Sekiranya hyperlink (#1) gagal berfungsi, sila klik hyperlink (2.1) untuk pengaktifan secara manual. Copy kod pengaktifan dari Gambar 2 dan gunakan di halaman pengaktifan.</p>
		<p>Sila pastikan anda copy & paste kod pengaktifan demi mengelakkan ralat <strong>"kod pengaktifan tidak sah"</strong> seperti di Gambar 3.</p></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar 1"  data-image="img/hyperlink_pengesahan.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/hyperlink_pengesahan.jpg" alt="Another alt text">
            </a>
            <p>Gambar 1</p>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar 2"  data-image="img/hyperlink_pengesahan1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/hyperlink_pengesahan1.jpg" alt="Another alt text">
            </a>
            <p>Gambar 2</p>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar 3"  data-image="img/kod_salah.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/kod_salah.jpg" alt="Another alt text">
            </a>
            <p>Gambar 3</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section10">
	<h4><strong>1.2.3 Pengaktifan Akaun OnPay Berjaya</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Pengaktifan Akaun anda berjaya apabila keluar mesej seperti di dalam Gambar Pengaktifan Akaun</p></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Pengaktifan Akaun"  data-image="img/pengaktifan_berjaya.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/pengaktifan_berjaya.jpg" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section11">
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
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Langkah 1"  data-image="img/halaman_utama.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/halaman_utama.jpg" alt="Another alt text">
            </a>
            <p>Langkah 1</p>
        </div>
	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Langkah 2"  data-image="img/halaman_log_masuk.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/halaman_log_masuk.jpg" alt="Another alt text">
            </a>
            <p>Langkah 2</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section12">
	<h4><strong>1.3.2 Masukkan ID Admin dan Kata Laluan</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Letakkan ID dan Kata Laluan di ruangan "ID Admin" dan "Kata Laluan".</p></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar Ruangan ID Admin dan Kata Laluan"  data-image="img/log_masuk.png" data-target="#image-gallery">
                <img class="img-responsive" src="img/log_masuk.png" alt="Another alt text">
            </a>
            <p>Klik untuk melihat gambar</p>
        </div>
	</div>
</div>
<div class="subtopic col-md-12" id="section13">
	<h4><strong>1.3.3 Log Masuk Akaun OnPay Berjaya</strong></h4><br>
	<div class="panel panel-info">
	  <div class="panel-heading">Info</div>
	  <div class="panel-body"><p>Sekiranya proses log masuk berjaya, anda akan dibawa ke halaman Dashboard Admin seperti di Gambar 1:</p>
		<p>Sekiranya ralat "ID atau Kata Laluan salah" terpapar seperti di Gambar 2, sila:<br>
							1.Isikan semula ID dan Kata Laluan<br>
							2.Tekan hyperlink Terlupa Kata Laluan</p></div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar 1"  data-image="img/dashboard_admin.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/dashboard_admin.jpg" alt="Another alt text">
            </a>
            <p>Gambar 1</p>
        </div>
	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gambar 2"  data-image="img/ralat_log_gagal.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/ralat_log_gagal.jpg" alt="Another alt text">
            </a>
            <p>Gambar 2</p>
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