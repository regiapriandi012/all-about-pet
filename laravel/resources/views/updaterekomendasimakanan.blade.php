<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All About Pet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->
    <link rel="stylesheet" href="{{url('')}}/assets/inc/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/inc/animations/css/animate.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
    <link rel="stylesheet" href="{{url('')}}/assets/inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('')}}/assets/inc/owl-carousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/reset.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/mobile.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/skin/cool-gray.css">
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
                        <a href="{{ url('/indexadmin') }}"><img src="{{url('')}}/assets/img/logo2.png" width=140px; height=50px; style="margin-top: 10px;"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="{{url('logout')}}" style="margin-top:5px">Selamat Datang Admin!</a></li>
                            <li>
                                <a class="btn btn-blank loginadmin" href="{{ url('dashboardadmin') }}" role="button" style="background-color: white; border-radius: 5px!important; color: #315D7C !important; margin: 20px;padding: 5px 20px 5px 20px;">Dashboard Admin</a>
                                <a class="btn btn-blank loginadmin" href="{{ url('logout') }}" role="button" style="background-color: white; border-radius: 5px!important; color: #315D7C !important; margin: 20px;padding: 5px 15px 5px 15px !important;">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section id="1-section" class="page text-center">
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center">
                       
                </div>
            </div>
    </div>
    <div class="rotate-box-2-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="rotate-box-info">

<form action="{{ route('update.rekomendasimakanan',['id' => $rekomendasimakanan->id]) }}" method="POST" enctype="multipart/form-data">
@method('PATCH')    
@csrf
<h3>Update Artikel Rekomendasi Makanan</h3>
    <fieldset>

        <p style="text-align: left;"><label for="title">Artikel Title</label></p>
        <input style="  width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px !important; resize: vertical;" type="text" id="title" name="title" value="{{ old('title') ?? $rekomendasimakanan->title }}"> @error('title')
        <div class="text-danger">{{ $message }}</div> @enderror

        <p style="text-align: left;"><label for="author">Author</label></p>
        <input style="  width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px !important; resize: vertical;" type="text"  id="author" name="author" value="{{ old('author') ?? $rekomendasimakanan->author }}"> @error('author')
        <div class="text-danger">{{ $message }}</div> @enderror

        <p style="text-align: left;"><label for="content">Content</label></p>
        <textarea style="  width: 100%; height: 150px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px !important; background-color: #f8f8f8; font-size: 16px; resize: none;" id="content" rows="10" cols="130" name="content">{{ old('content') ?? $rekomendasimakanan->content}}</textarea>

        <p style="text-align: left;"><label for="image">Image</label></p>
        <input style="  width: 100%; padding: 5px; border: 1px solid #ccc; border-radius: 4px !important; resize: vertical;" type="file" id="image" name="image" value="{{ old('image') ?? $rekomendasimakanan->image }}"> @error('image')
        <div class="text-danger">{{ $message }}</div> @enderror

        <br>
        <button style="  background-color: #2596be; /* Green */ border: none; color: white; border-radius: 5px !important; padding: 5px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;" type="submit">Submit</button>

    </fieldset>

</form>
</div>
                    </div>
                    </a>
                    <br><br><br>
                </div>
            </div>
        </div>
        </section>
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
    <script src="{{url('')}}/assets/inc/jquery/jquery-1.11.1.min.js"></script>
    <script src="{{url('')}}/assets/inc/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/assets/inc/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/assets/inc/stellar/js/jquery.stellar.min.js"></script>
    <script src="{{url('')}}/assets/inc/animations/js/wow.min.js"></script>
    <script src="{{url('')}}/assets/inc/waypoints.min.js"></script>
    <script src="{{url('')}}/assets/inc/isotope.pkgd.min.js"></script>
    <script src="{{url('')}}/assets/inc/classie.js"></script>
    <script src="{{url('')}}/assets/inc/jquery.easing.min.js"></script>
    <script src="{{url('')}}/assets/inc/jquery.counterup.min.js"></script>
    <script src="{{url('')}}/assets/inc/smoothscroll.js"></script>
    <script src="{{url('')}}/assets/js/theme.js"></script>
</body>

</html>