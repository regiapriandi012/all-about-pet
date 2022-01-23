<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>All About Pet</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
		<link rel="stylesheet" href="{{ asset('inc/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('inc/animations/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('inc/font-awesome/css/font-awesome.min.css') }}"> <!-- Font Icons -->
		<link rel="stylesheet" href="{{ asset('inc/owl-carousel/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('inc/owl-carousel/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
		<link rel="stylesheet" href="{{ asset('css/skin/cool-gray.css') }}">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
	</head>
    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>
    	<div class="body">
            <header id="header" class="header-main">
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#315D7C">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="{{ url('/') }}') }}"><img src="img/logo2.png" width=140px; height=50px; style="margin-top: 10px;"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="page-scroll" href="{{ url('konsultasi') }}" style="margin-top:5px">Konsultasi Dokter</a></li>
                                <li><a class="page-scroll" href="{{ url('booking') }}" style="margin-top:5px">Pemesanan Klinik</a></li>
                                <li>
                                    <div class="dropdown">
                                        <button class="dropbtn"><img src="img/clipart1890471.png" width="20px" style="margin-top: 5px"></button>
                                            <div class="dropdown-content" style="text-transform: uppercase">
                                              <a class="page-scroll" href="#1-section">Tips Merawat Hewan Peliharaan</a>
                                              <a class="page-scroll" href="#2-section">Tips Merawat Kandang</a>
                                              <a class="page-scroll" href="#3-section">Tips Mengatasi Hewan Sakit atau Birahi</a>
                                              <a class="page-scroll" href="#4-section">Rekomendasi Makanan</a>
                                              <a class="page-scroll" href="#5-section">Rekomendasi Vitamin</a>
                                              <a class="page-scroll" href="#6-section">Informasi Vaksin dan Obat-Obatan</a>
                                            </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-blank loginadmin" href="{{ url('login') }}" role="button" style="background-color: white; border-radius: 5px!important; color: #315D7C !important; margin: 20px;padding: 5px 20px 5px 20px;">Login</a>
                                </li>
                            </ul>
                    </div>
                  </div>
                </nav>
            </header>
    	<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.png); background-color: #FFFFFF">
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">
						<div id="owl-intro-text" class="owl-carousel">
                            <a class="btn btn-blank tombolutama page-scroll" href="#1-section" role="button" style="background-color: #315D7C !important">Mari Jelajah</a>
                        </div>
						</div>
					</div>
			</section>
            <section id="1-section" class="page text-center">
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Tips Merawat Hewan Peliharaan</h2>
                        </div>
                    </div>
                </div>
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <div class="rotate-box-info">
                                        <h4>tips 1 Memberikan Makanan Sehat dan Bergizi Secara Teratur</h4>
                                        <p>Pilihlah makanan yang bergizi seimbang terutama yang memiliki kandungan protein tinggi. disamping itu juga perhatikan makanan yang cocok dengan hewan peliharaan anda.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <div class="rotate-box-info">
                                        <h4>tips 2 Menyiapkan Tempat Tidur Di luar Kandang</h4>
                                        <p>Pastikan kamu mengeluarkan mereka dari kandang secara rutin agar mereka dapat bermain bebas di area rumah. Anda dapat menaruh tempat tidur diluar kandang agar hewan peliharaan tidak strees.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <div class="rotate-box-info">
                                        <h4>tips 3 Membersihkan Kandang Minimal 1 Kali Sehari</h4>
                                        <p>Bersihkan kandang hewan secara rutin minimal sehari sekali agar tetap terjaga kesehatan kandang dan terhindar dari bakteri yang ada.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <div class="rotate-box-info">
                                        <h4>tips 4 Menjaga Kebersihan Hewan Peliharaan</h4>
                                        <p>Membersihkan hewan peliharaan dapat dilakukan dengan cara memandikannya minimal satu kali dalam seminggu agar hewan peliharaan terhindar dari kutu, bakteri dan juga jamur.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="container"></div>
                </div>
             </section>
             <section id="2-section" class="page text-center">
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Tips Merawat Kandang</h2>
                        </div>
                    </div>
                </div>
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <div class="rotate-box-info">
                                        <h4>tips 1 Rutin Bersihkan Kandang Minimal 1x Sehari</h4>
                                        <p>Memang agak merepotkan karena Anda harus membersihkan kandang hewan peliharaan sehari sekali, tapi membersihkan kandang tidak begitu menguras tenaga kok. Daripada Anda terjangkit penyakit yang dibawa oleh si manis, karena lebih baik mencegah daripada mengobati.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <div class="rotate-box-info">
                                        <h4>tips 2 Cuci Bersih Peralatan Kandang</h4>
                                        <p>Tips selanjutnya yang tidak kalah penting adalah mencuci bersih peralatan yang ada dikandang seperti liter box, pasir, tatakan kandang, tempat makan dan juga tempat minum.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <div class="rotate-box-info">
                                        <h4>tips 4 Jemur Kandang 1 kali dalam Seminggu</h4>
                                        <p>Membersihkan hewan peliharaan dapat dilakukan dengan cara memandikannya minimal satu kali dalam seminggu agar hewan peliharaan terhindar dari kutu, bakteri dan juga jamur.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <div class="rotate-box-info">
                                        <h4>tips 3 Perhatikan Sirkulasi Udara Kandang</h4>
                                        <p>Tips ke 3 adalah memperhatikan sirkulasi udara pada kandang. kadnang yang baik adalah kandang dengan lubang udara yang cukup agar di dalamnya tidak lembap sehingga tidak menimbulkan jamur pada hewan peliharaan.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="container"></div>
                </div>
             </section>
            <section id="3-section" class="page text-center">
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Tips Mengatasi Hewan Sakit atau Birahi</h2>
                        </div>
                    </div>
                </div>
              <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row"">
                            <div class="col-md-3 col-sm-6">
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <div class="rotate-box-info">
                                        <h4>tips 1 Jika Hewan Sakit</h4>
                                        <p>Jika hewan sakit maka segera berikan obat yang sesuai dengan keluhan yang diderita bisa membelinya di pet shop maupun berkonsultasi dengan dokter</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <div class="rotate-box-info">
                                        <h4>tips 2 Jika Hewan Tidak Napsu Makan</h4>
                                        <p>Jika hewan peliharaan anda tidak napsu makan maka berikan suplemen penambah napsu makan dan suapkan makanan basah menggunakan spet makanan kepada hewan peliharaan.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <div class="rotate-box-info">
                                        <h4>tips 3 Jika Kucing Birahi</h4>
                                        <p>Jika kucing birahi dengan ditandainya kucing semakin ganas dan suaranya yang bertambah berat maka kawinkanlah hewan peliharaan anda bisa dengan jasa pencak. Atau ketika hewan sudah berusia lanjut maka sterilkan hewan peliharaan anda pada dokter.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    </div>
                </div>
            </section>
            <section id="4-section" class="page text-center">
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Rekomendasi Makanan</h2>
                        </div>
                    </div>
                </div>
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <div class="rotate-box-info">
                                        <h4>Rekomendasi Makanan Kucing</h4>
                                        <p>Royal Canin Gastrotinetal = Bantu pemulihan kucing sehabis diare<br>
                                            Nature Bridge Intensive = bantu pemulihan kucing pasca sakit<br>
                                            Proplan Adut = bantu penggemukan badan<br>
                                            Royal Canin Skin and Hair = bantu melembutkan bulu<br>
                                            Equilibrio = bantu penggemukan badan (harga lebih terjangkau)</p><br>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <div class="rotate-box-info">
                                        <h4>Rekomendasi Makanan Kelinci</h4>
                                        <p>Jolly = Bantu penggemukan badan kelinci (harga lebih terjangkau)<br>
                                            Dr Bunny = bantu penggemukan badan kelinci<br>
                                            Wortel = Makanan alami untuk menghaluskan bulu kelinci<br>
                                            Axoi = Makanan untuk merawat imunitas kelinci</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <div class="rotate-box-info">
                                        <h4>Rekomendasi Makanan Anjing</h4>
                                        <p>Royal Canin Gastrotinetal = Bantu pemulihan kucing sehabis diare<br> 
                                            Nature Bridge Intensive = bantu pemulihan kucing pasca sakit<br>    
                                            Pedigree = Bantu penggemukan badan anjing<br>   
                                            Alpoo = bantu pengggemukan badan anjing (harga lebih terjangkau)</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    </div>
                </div>
            </section>
            <section id="5-section" class="page text-center">
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Rekomendasi Vitamin</h2>
                        </div>
                    </div>
                </div>
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <div class="rotate-box-info">
                                        <h4>Vitamin untuk kucing</h4>
                                        <p>Nutrigel Plus = imunitas<br>
                                            ROFF = penggemuk badan<br>
                                            Cat Plus = bulu lembut</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <div class="rotate-box-info">
                                        <h4>Vitamin untuk kelinci</h4>
                                        <p>Roffy Rabbit = imunitas<br>
                                            Nutrigel Plus= imunitas</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <div class="rotate-box-info">
                                        <h4>Vitamin untuk otter</h4>
                                        <p>fish oil = imunitas<br>
                                            nutrigel plus=imunitas<br>
                                            rougge = kekuatan tulang</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <div class="rotate-box-info">
                                        <h4>Vitamin untuk anjing</h4>
                                        <p>Nutrigel Plus = imunitas<br>
                                            CODIGGA = bulu halus</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    </div>
                </div>
            </section>
            <section id="6-section" class="page text-center">
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>Informasi Vaksin Dan Obat-Obatan</h2>
                        </div>
                    </div>
                </div>
              <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                            </div>
                            <div class="col-md-3 col-sm-6">
                            <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <div class="rotate-box-info">
                                        <h4>Tentang Vaksin</h4>
                                        <p>Pada usia hewan peliharaan yang menginjak 2 bulan maka diberikan vaksin rabies untuk vaksin pertamanya, kemudian pada 6 bulan berikutnya diberikan vaksin FVRCP untuk daya tahan tubuhnya. Dan selanjutny pada umur 1 tahun diberkan vaksin FPV untuk mencegah hewan dari penyakit menular.</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <div class="rotate-box-info">
                                        <h4>Obat Anjing</h4>
                                        <p>Obat diare = Probio VarDiggest<br>
                                            Obat Jamur dan Kutu = Scabiess Demodex<br>
                                            Obat Flue = Zoetis Clavamox<br>
                                            Obat mata = Trixin<br>
                                            Obat Demam = Maxindo</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <a href="{{ url('artikel') }}" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <div class="rotate-box-info">
                                        <h4>Obat Kucing</h4>
                                        <p>Obat diare = Probio VarDiggest<br>
                                            Obat Jamur dan Kutu = Scabiess Demodex<br>
                                            Obat Flue = Zoetis Clavamox<br>
                                            Obat mata = Trixin<br>
                                            Obat Demam = Maxindo</p>
                                        <br><a class="btn btn-blank" href="{{ url('artikel') }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                                    </div>
                                </a>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    </div>
                </div>
            </section>
            <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/slider-bg.png);">
                    <div class="cover">
                    </div>
                </div>
            </section>
            <footer class="text-off-white">
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">All About Pet 2021</p>
                    </div>
                </div>
            </footer>
            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
        </div>
		<script src="inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="inc/animations/js/wow.min.js"></script>
        <script src="inc/waypoints.min.js"></script>
		<script src="inc/isotope.pkgd.min.js"></script>
		<script src="inc/classie.js"></script>
		<script src="inc/jquery.easing.min.js"></script>
		<script src="inc/jquery.counterup.min.js"></script>
		<script src="inc/smoothscroll.js"></script>
		<script src="js/theme.js"></script>
        <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
