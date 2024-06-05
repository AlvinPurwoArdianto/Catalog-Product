<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Catalogue Product</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2:400,600,700|Poppins:400,600,700&display=swap"
        rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('user/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        html,
        body,
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <div class="header_section fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h1 class="text-white mt-2">Catalog</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#produk">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    </form>
                </div>
            </nav>
        </div>
    </div>
    {{-- End Navbar --}}

    <!-- Banner -->
    <div class="banner_section layout_padding" id="home">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner_img"><img src="{{ asset('user/images/banner-img.png') }}"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Cari Produkmu Disini!</h1>
                                    <form>
                                        <input type="text" class="search_text" placeholder="Search text here"
                                            name="Search text here">
                                        <div class="search_bt"><a href="#">Search Now</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- categroy section start -->
    <section>
        <div class="categroy_section layout_padding" id="produk">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="categroy_taital text-center">Product</h1>
                    </div>
                </div>
                <div class="categroy_section_2">
                    <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @foreach ($produk as $data)
                                        <div class="col-md-4">
                                            <div class="hover01 column">
                                                <figure class="text-center" border="1"><img
                                                        src="{{ asset('/images/produk/' . $data->cover) }}"></figure>
                                            </div>
                                            <h3 class="materials_text">{{ $data->nama_produk }}</h3>
                                            <p class="categroy_text">words which don't look even slightly believable. If
                                                you are
                                                going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            </p>
                                            <div class="readmore_btn">
                                                <div class="readmore_btn"><a href="#">Read More</a></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categroy section end -->


    <!-- footer section start -->
    <div class="footer_section layout_padding mt-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="location_text">
                        <ul>
                            <li>
                                <a href="https://maps.app.goo.gl/XBC2rqJ72CAq4yDP6"><span class="padding_left_10"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i></span>Cilebak Rancamanyar
                                    <br>Kabupaten Bandung </a>
                            </li>
                            <li>
                                <a href=""><span class="padding_left_10"><i class="bi bi-whatsapp"
                                            aria-hidden="true"></i></span>088222334252</a>
                            </li>
                            <li>
                                <a href="#"><span class="padding_left_10"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></span>alvinpurwo03@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="newslatter_main">
                        <h1 class="useful_text">Follow Us</h1>
                        <div class="footer_social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- footer section end -->


    <!-- Javascript files-->
    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/popper.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('user/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('user/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>
