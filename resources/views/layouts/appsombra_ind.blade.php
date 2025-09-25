<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="title" content="Sombra Coffee">
    <meta name="description" content="Sombra didirikan dengan tujuan besar untuk mempromosikan produk kopi yang unik dari Nusa Tenggara Timur dan tradisi yang kaya di sekitarnya.">
    <meta name="keywords" content="Sombra Coffee, sombra coffee, coffee sombra, Kopi Nusa Tenggara Timur, Kopi Sombra, Coffee Sombra, Sombra, Coffee, coffee asli, luwak coffee, sombra dimana?, sombra asal mana, sombra online grab">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Sombra Coffee">
    <meta name="google-site-verification" content="UYirk-YsOefisp9iSFFmg2TY4IhS3dD4pDBmXiinPg0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title' ?? ' ') Sombra Coffee</title>
    <link rel="icon" type="image/png" href="{{ asset('image/logo/icon.png') }}">
    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alatsi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">
    <link href="{{ asset('css/Swiper/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sombra/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font.css') }}">

    <style>
        html body {
            background-image: url(../../image/back/bg_web3.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>

    @yield('css')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JJCEQWWF0B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JJCEQWWF0B');

    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navPadding">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('sombra') }}">
                <img src="{{ asset('image/LOGO_SOMBRA.png') }}" class="sombraicon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

                <div class="d-auto" style="text-align: canter; display: contents;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item navCenter">
                            <a class="nav-link active fontAlatsiB" href="{{ route('aboutus') }}" aria-current="page">TENTANG</a>
                        </li>
                        <li class="nav-item navCenter">
                            <a class="nav-link fontAlatsiB" href="{{ route('product') }}">PRODUK</a>
                        </li>
                        <li class="nav-item navCenter">
                            <a class="nav-link fontAlatsiB" href="{{ route('coffee') }}">TOKO KOPI</a>
                        </li>
                        <li class="nav-item navCenter">
                            <a class="nav-link fontAlatsiB" href="{{ route('article') }}">ARTIKEL</a>
                        </li>
                        <li class="nav-item navCenter">
                            <a class="nav-link fontAlatsiB" href="{{ route('contactus') }}">KONTAK</a>
                        </li>
                        <li class="nav-item navCenter">
                            <a class="nav-link fontAlatsiB" href="{{ route('faq') }}">FAQ</a>
                        </li>
                    </ul>
                </div>

                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 navIconDisplayContent">
                        <li class="nav-item navitemPR5pxPT10px">

                            <div class="box">
                                <form action="{{ route('searchp') }}">
                                    <input type="text" class="input" name="cari" onmouseout="this.value = ''; this.blur();">
                                    <i>
                                        <img src="{{ asset('image/icon/search.png') }}" class="searchWidth20px">
                                    </i>
                                </form>
                            </div>

                        </li>
                        <li class="nav-item PR5px">
                            <a class="nav-link" href="https://tokopedia.link/sombracoffee" target="_blank">
                                <img src="{{ asset('image/icon/ikon-tokopedia.png') }}" class="width30px">
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="https://shopee.co.id/sombra.coffee?v=1d0&smtt=0.581940703- 1655954667.3" target="_blank">
                                <img src="{{ asset('image/icon/ikon-shopee.png') }}" style="width: 30px;">
                            </a>
                        </li>

                        <li class="nav-item navitemPL10px">
                            <div class="garisPembatasTebal"></div>
                        </li>
                        @yield('lang')


                    </ul>
                </div>

            </div>
        </div>
    </nav>
    @yield('content')
    <section class="footersombra" style="background-color: #e7e1d3;">
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-lg-2 col-sm-12" class="footerMLeft">
                        <h5 style="font-family: 'Alatsi', sans-serif; color: black; font-weight: bold;">TENTANG</h5>
                        <ul class="nav flex-column">
                            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2">
                                <a href="{{ route('sombra') }}" class="nav-link p-0" style="color: black">Sliders
                                </a>
                            </li>
                            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2">
                                <a href="{{ route('product') }}" class="nav-link p-0" style="color: black">Produk
                                </a>
                            </li>
                            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2">
                                <a href="{{ route('coffee') }}" class="nav-link p-0" style="color: black">Toko Kopi
                                </a>
                            </li>

                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-sm-12" class="footerMLeft">
                        <h5 style="font-family: 'Alatsi', sans-serif; color: black; font-weight: bold;">ARTIKEL</h5>
                        @yield('footerarticle')
                    </div>

                    <div class="col-lg-2 col-sm-12" class="footerMLeft">
                        <h5 style="font-family: 'Alatsi', sans-serif; color: black; font-weight: bold;">KONTAK</h5>
                        <ul class="nav flex-column">
                            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2"><a href="{{ route('contactus') }}" class="nav-link p-0" style="color: black">Hubungi Kami</a></li>
                            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2"><a href="{{ route('contactus') }}" class="nav-link p-0" style="color: black">Lokasi</a></li>
                            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2"><a href="{{ route('contactus') }}" class="nav-link p-0" style="color: black">Kirim Pesan</a></li>
                        </ul>
                    </div>

                    <div class="offset-1 col-lg-4 col-sm-12">
                        <form>
                            <h5 style="font-family: 'Alatsi', sans-serif; color: black; font-weight: bold;">&copy; <?= date('Y') ?>
                                SOMBRA COFFEE </h5>
                            <p class="fontAlatsi">
                                Coffee and Roastery<br />
                                Dedication In Everysingle Drop of Coffee
                            </p>
                            <a href="https://www.instagram.com/sombracoffee.id/?hl=id" style="text-decoration: none;" target="_blank">
                                <p style="color: black; font-family: 'Alatsi', sans-serif"> <i><img src="{{ asset('image/icon/ig.png') }}" class="width24px"></i> @sombracoffee.id</p>
                            </a>
                            <a href="https://www.youtube.com/channel/UCq2EYcChB8JoBtNuCf0LRzw" style="text-decoration: none;" target="_blank">
                                <p style="color: black; font-family: 'Alatsi', sans-serif"><i><img src="{{ asset('image/icon/yt.png') }}" class="width24px"></i> Sombra Coffee</p>
                            </a>
                            <a href="https://www.facebook.com/Sombracoffee.id/" style="text-decoration: none;" target="_blank">
                                <p style="color: black; font-family: 'Alatsi', sans-serif"><i><img src="{{ asset('image/icon/facebook.png') }}" class="width24px"></i> Sombra Coffee</p>
                            </a>
                            <p class="fontAlatsi"><a href="https://api.whatsapp.com/send?phone=6281339013817&text=Ingin%20memesan%20dan%20penasaran%20dengan%20Sombra%20Coffee?%20PESAN%20SEKARANG!!!" target="_blank" style="text-decoration: none; color: black;">+62 813 39013817</a></p>
                            <br />
                            <p class="fontAlatsi">sombracoffee.id</p>
                            <p class="copyright">Copyright &copy; {{ date('Y') }} <a href="" class="decorationN">Sombra Coffee</a> <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" class="width25px"></i></p>
                        </form>
                    </div>
                </div>

            </footer>
        </div>
        </div>
    </section>
    <a href="https://api.whatsapp.com/send?phone=6281339013817&text=Bisa%20Kamu%20Chat%20Sekarang%20Sombra%20Coffee." class="float" target="_blank">
        <i class="fWA"><img src="{{ asset('image/icon/wa.png') }}"></i>
    </a>


    <script src="{{ asset('js/Swiper/swiper.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    @yield('script')
</body>

</html>
