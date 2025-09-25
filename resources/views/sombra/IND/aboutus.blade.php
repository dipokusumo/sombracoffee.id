@extends('layouts.appsombra_ind')
@section('title', 'Tentang')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('aboutus') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('aboutus_en') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; ">EN</a>
    </p>
</li>
@endsection

@section('css')
<style>
    .iamgeUS {
        width: 95%;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .iamgeUS {
            width: 100%;
            padding-bottom: 20px;
        }
    }
</style>
<style>
    .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
    .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
        background: white;
    }

    .sliderCol {
        padding: 0px 10px 0px 10px;
    }

    .sliderImg {
        width: 100%;
    }

    .bpom {
        width: 120px;
        position: relative;
        top: 15px;
        left: 0%;
    }

    .halal {
        width: 55px;
        position: relative;
        right: 48%;
    }

    .nohalal{
        font-family: 'Alatsi', sans-serif;
        text-align: center;
        font-size: 7px;
        position: relative;
        right: 86%;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {

        .sliderCol {
            padding: 0px 10px 0px 10px;
        }

        .sliderImg {
            width: 100%;
            height: 200px;
        }

        .bpom {
            width: 300px;
            position: relative;
            top: 0px;
            left: 4%;
            margin-bottom: 20px;
        }

        .halal {
            width: 150px;
            position: relative;
            left: 28.5%;
        }

        .nohalal {
            font-family: 'Alatsi', sans-serif;
            text-align: center;
            font-size: 7px;
            position: relative;
            left: 0%;
            padding-bottom: 30px;
       }
    }
</style>
@endsection

@section('content')
<section class="FAQ" style="padding-bottom: 90px; padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="margin-bottom: 25px;">
                <div class="card-body">
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ asset('image/about/opsi1.png') }}" class="iamgeUS">
                        </div>
                        <br>
                        <div class="col-sm-6">
                            <p class="text-justify" style="font-family: 'Alatsi', sans-serif; font-size: 10px;  ">
                                <span><b>Dedikasi Kami Ada Disetiap Tuangan Dalam Kopi</span> <br>
                                    <span>Apakah anda ingin mencicipinya?</b>
                            </p>
                            <h5
                                style="text-align: center; font-family: 'Alatsi', sans-serif; color: #f05825; font-weight: bold; letter-spacing: 3px;">
                                TENTANG SOMBRA COFFEE</h5>
                            <hr style="color: orange">
                            <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;">
                                Sebagai putra daerah Bajawa, <b>Alfredo Sebastianus Soi Pili</b> paham betul mengenai
                                budaya
                                minum
                                kopi di kampung halaman keluarganya yaitu Bajawa, Ngada, Nusa Tenggara Timur. Di sini,
                                minum
                                kopi bukan hanya sebagai kebiasaan saat menjamu tamu, namun juga sangat lekat dengan
                                berbagai kegiatan adat. Hal ini lah yang lalu menginspirasinya untuk mendirikan bisnis
                                kopi
                                miliknya sendiri.
                            </p>
                            <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                                Dimulai dengan pemilihan biji kopi Arabica Bajawa Flores sebagai langkah awal bisnis
                                kopi
                                ini, terlahirlah Sombra Coffee. Nama Sombra sendiri berasal dari kata Sombar yang
                                berarti
                                pohon penaung di daerah Bajawa, NTT. Istilah ini juga yang menjadi penggerak Sombra
                                Coffee
                                untuk menaungi produk kopi berkualitas khususnya kopi yang berasal dari NTT dan
                                menyebarluaskan mengenai keunikannya ke seluruh Indonesia.
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{ asset('image/logo/bpom.png') }}" class="bpom">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('image/logo/halal.png') }}" class="halal">
                                    <p class="nohalal">
                                        No.Halal : 1616009071020
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <div class="card-body">
                    <h5
                        style="text-align: left; font-family: 'Alatsi', sans-serif; color: #f05825; font-weight: bold; letter-spacing: 3px;">
                        Visi
                    </h5>
                    <hr style="color: orange">
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        <b>“Dedikasi dalam setiap tetes”</b>, begitulah motto Kopi Sombra. Dan sesuai dengan motto
                        tersebut, kami berkomitmen untuk memastikan produk kopi dari NTT memiliki standar kualitas
                        tinggi yang mampu bersaing dengan merk kopi lain di kancah nasional maupun internasional.
                    </p>
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        Kami sangat bangga akan budaya serta kekayaan alam NTT, dan kami bertekad untuk menunjukkan
                        identitas NTT melalui produk kami. Hal ini kami lakukan dengan selalu menjaga kualitas hasil
                        produksi dan kepuasan pelanggan. Selain itu, kami juga memastikan bahwa kami menyediakan
                        lebih dari kopi yang dapat dinikmati pelanggan, namun juga edukasi seputar kopi agar
                        pelanggan dapat memiliki akses terhadap informasi mengenai kopi dan proses yang terjadi
                        untuk menghasilkan kopi yang mereka nikmati tersebut.
                    </p>
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        Selanjutnya, kami ingin Sombra tumbuh bukan hanya dalam segi bisnis saja, namun juga sebagai
                        badan yang berkontribusi terhadap sekitar, terutama untuk masyarakat NTT. Kami akan
                        mewujudkannya dengan mendirikan sekolah/akademi dengan standar internasional yang dapat
                        diakses oleh masyarakat sekitar
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-sm-12 col-md-12 sliderCol">
                            <!-- Swiper -->
                            <div
                                class="swiper mySwiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                                <div class="swiper-wrapper" id="swiper-wrapper-76669f0fbb3a9e8c" aria-live="polite"
                                    style="transition-duration: 0ms;">

                                    <div class="swiper-slide" role="group" aria-label="1 / 6"
                                        style="width: 1360px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <img class="sliderImg" src="{{ asset('image/visimisi/vs1.png') }}">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="1 / 6"
                                        style="width: 1360px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <img class="sliderImg" src="{{ asset('image/visimisi/vs2.png') }}">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="1 / 6"
                                        style="width: 1360px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <img class="sliderImg" src="{{ asset('image/visimisi/vs3.png') }}">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="1 / 6"
                                        style="width: 1360px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                        <img class="sliderImg" src="{{ asset('image/visimisi/vs4.png') }}">
                                    </div>


                                </div>

                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"
                                    style="position: relative; bottom: 50px;">
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                        aria-label="Go to slide 1"></span>
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                        aria-label="Go to slide 2"></span>
                                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                        role="button" aria-label="Go to slide 3" aria-current="true"></span>
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                        aria-label="Go to slide 4"></span>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                    <br />
                    <h5
                        style="text-align: left; font-family: 'Alatsi', sans-serif; color: #f05825; font-weight: bold; letter-spacing: 3px;">
                        Misi
                    </h5>
                    <hr style="color: orange">
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        Sesuai dengan visi kami untuk mempromosikan kekayaan dan budaya NTT, kami memastikan bahwa
                        penggunaan <b>"bahan baku 100% kopi dari NTT"</b> menjadi prioritas utama kami.
                    </p>
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        Kami juga mengutamakan prinsip <b>“fair trade coffee”</b> dalam mendapatkan hasil bahan baku
                        biji
                        kopi mentah (green bean) dengan menggunakan sistem kerjasama yang adil dan menguntungkan
                        kedua belah pihak yaitu para petani dan Sombra sendiri
                    </p>
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        Kami memastikan kualitas produk kopi kami terjaga dengan menjaga tingkat kebersihan dari
                        awal hingga akhir proses produksi kami. Setiap produk dari Sombra dijamin <b>"higienis"</b> dan telah
                        melewati proses sesuai standarisasi halal Kementrian Agama dan Badan Pengawasan Obat dan
                        Makanan Republik Indonesia.
                    </p>
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        Kami juga ingin memastikan <b>"kepuasan pelanggan";</b> seluruh pelanggan kami dengan preferensi kopi
                        mereka masing-masing. Untuk memastikan ini, kami berdedikasi untuk memproduksi kopi dengan
                        beragam karakteristik yang unik dari berbagai daerah di NTT sehingga pelanggan kami dapat dapat
                        memutuskan kopi mana yang akan mengisi cangkir sesuai selera mereka.
                    </p>
                    <p class="text-justify" style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        Kami menjadikan <b>"edukasi"</b> sebagai salah satu tujuan kami dan kami menghadirkannya melalui
                        setiap konten kami baik di media sosial maupun website dan juga kemasan produk kami. Selain
                        itu, kami juga akan mendirikan akademi kopi untuk semakin memperdalam edukasi mengenai kopi
                        bagi masyarakat.
                    </p>

                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</section>
@endsection

@section('footerarticle')
<ul class="nav flex-column">
    @foreach($footerarticle as $f)
    <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2">
        <a href="{{ route('article_detail', $f->judul_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul
            }}</a>
    </li>
    @endforeach
</ul>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script>
    $("#hide").hide();
$(document).ready(function(){
    $("#myCoffee").hover(function(){
        $("#hide").show();
    }, function(){
        $("#hide").hide();
  });
});


var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
      });

</script>
@endsection
