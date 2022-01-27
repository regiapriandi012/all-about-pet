<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All About Pet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
    <link rel="stylesheet" href="assets/inc/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/inc/animations/css/animate.min.css">
    <link rel="stylesheet" href="assets/inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
    <link rel="stylesheet" href="assets/inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/inc/owl-carousel/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/skin/cool-gray.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body data-spy="scroll" data-target="#main-navbar">
    <!-- <div class="page-loader"></div> -->
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
                        <a href="{{ url('/') }}"><img src="assets/img/logo2.png" width=140px; height=50px; style="margin-top: 10px;"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="{{ url('konsultasi') }}" style="margin-top:5px">Konsultasi Dokter</a></li>
                            <li><a class="page-scroll" href="{{ url('booking') }}" style="margin-top:5px">Pemesanan Klinik</a></li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn"><img src="assets/img/clipart1890471.png" width="20px" style="margin-top: 5px"></button>
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
        <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(assets/img/slider-bg.png); background-color: #FFFFFF">
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
                @forelse ($tipsmerawathewan as $data)
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="rotate-box-info">
                                <h4>{{$data->title}}</h4>
                                <p>Writen by: {{$data->author}}</p>
                                    <br><a class="btn btn-blank" href="{{ route('artikel.tipsmerawathewan',['id' => $data->id]) }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                            </div>
                            </a>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                @empty

                <td colspan="6" class="text-center">Tidak ada data...</td>

                @endforelse
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
            @forelse ($tipsmerawatkandang as $data)
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="rotate-box-info">
                                <h4>{{$data->title}}</h4>
                                <p>Writen by: {{$data->author}}</p>
                                    <br><a class="btn btn-blank" href="{{ route('artikel.tipsmerawatkandang',['id' => $data->id]) }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                            </div>
                            </a>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                @empty

                <td colspan="6" class="text-center">Tidak ada data...</td>

                @endforelse
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
            @forelse ($tipsmengatasihewansakit as $data)
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="rotate-box-info">
                                <h4>{{$data->title}}</h4>
                                <p>Writen by: {{$data->author}}</p>
                                    <br><a class="btn btn-blank" href="{{ route('artikel.tipsmengatasihewansakit',['id' => $data->id]) }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                            </div>
                            </a>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                @empty

                <td colspan="6" class="text-center">Tidak ada data...</td>

                @endforelse
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
        @forelse ($rekomendasimakanan as $data)
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="rotate-box-info">
                                <h4>{{$data->title}}</h4>
                                <p>Writen by: {{$data->author}}</p>
                                    <br><a class="btn btn-blank" href="{{ route('artikel.rekomendasimakanan',['id' => $data->id]) }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                            </div>
                            </a>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                @empty

                <td colspan="6" class="text-center">Tidak ada data...</td>

                @endforelse
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
            @forelse ($rekomendasivitamin as $data)
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="rotate-box-info">
                                <h4>{{$data->title}}</h4>
                                <p>Writen by: {{$data->author}}</p>
                                    <br><a class="btn btn-blank" href="{{ route('artikel.rekomendasivitamin',['id' => $data->id]) }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                            </div>
                            </a>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                @empty

                <td colspan="6" class="text-center">Tidak ada data...</td>

                @endforelse
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
            @forelse ($informasivaksin as $data)
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="rotate-box-info">
                                <h4>{{$data->title}}</h4>
                                <p>Writen by: {{$data->author}}</p>
                                    <br><a class="btn btn-blank" href="{{ route('artikel.informasivaksin',['id' => $data->id]) }}" role="button" style="background-color: #315D7C !important">Pelajari Lebih Lanjut</a>
                            </div>
                            </a>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                @empty

                <td colspan="6" class="text-center">Tidak ada data...</td>

                @endforelse
        </div>
    </section>
    <section id="testimonial-section">
        <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(assets/img/slider-bg.png);">
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
    <script src="assets/inc/jquery/jquery-1.11.1.min.js"></script>
    <script src="assets/inc/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/inc/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/inc/stellar/js/jquery.stellar.min.js"></script>
    <script src="assets/inc/animations/js/wow.min.js"></script>
    <script src="assets/inc/waypoints.min.js"></script>
    <script src="assets/inc/isotope.pkgd.min.js"></script>
    <script src="assets/inc/classie.js"></script>
    <script src="assets/inc/jquery.easing.min.js"></script>
    <script src="assets/inc/jquery.counterup.min.js"></script>
    <script src="assets/inc/smoothscroll.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>