@extends('layouts.appsombra_eng')
@section('title', 'AboutUs')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('aboutus') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('aboutus_en') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">EN</a>
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

        .sliderImg{
            width: 100%; height: 200px;
        }

        .bpom {
        width: 200px;
        position: relative;
        top: 30px;
        }

        .halal {
            width: 100px;
            position: relative;
            left: 32%;
        }

        .nohalal{
            font-family: 'Alatsi', sans-serif;
            text-align: center;
            font-size: 7px;
            position: relative;
            left: 5%;
        }
    }
</style>
@endsection

@section('content')
<section class="FAQ" style="padding-bottom: 90px; padding-top: 20px;;">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="card-body">
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ asset('image/about/opsi1.png') }}" class="iamgeUS">
                        </div>
                        <br>
                        <div class="col-sm-6">
                            <p class="text-justify"
                                style="font-family: 'Alatsi', sans-serif; font-size: 10px;  ">
                                <span><b>Our Dedication Is in Every Single Drop of Coffee</span> <br> <span>Do you wanna
                                    have a taste?</b>
                            </p>
                            <h5
                                style="text-align: center; font-family: 'Alatsi', sans-serif; color: #f05825; font-weight: bold; letter-spacing: 3px;">
                                ABOUT SOMBRA COFFEE</h5>
                            <hr style="color: orange">
                            <p class="text-justify"
                                style="font-family: 'Alatsi', sans-serif; text-align: justify;">
                                As a native descendant of the people from Bajawa, <b>Alfredo Sebastianus Soi
                                    Pili</b>understands perfectly about the coffee culture of his familial birthplace in
                                Bajawa, Ngada, East Nusa Tenggara. In this region, coffee is more than simply a beverage
                                served to guests, but has strong connections to the culture and traditions of the
                                natives. This is what then inspired him to make his move in the coffee business and
                                start his own company.
                            </p>
                            <p class="text-justify"
                                style="font-family: 'Alatsi', sans-serif; text-align: justify;">
                                Starting with choosing to use Arabica Bajawa Flores beans as the first step in the coffee industry, Sombra Coffee was born. The name Sombra itself is derived from “Sombar”, which carries a specific meaning to the people of Bajawa; it is a tree of shade that protects you from the harsh sunlight. This terminology is what inspired him to dedicate Sombra Coffee as an umbrella that protects and preserves high quality coffee products, especially ones from East Nusa Tenggara, and expands the awareness about them to the whole nation.
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

        <div class="row" style="padding-top: 40px;">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <div class="card-body">
                    <h5 style="text-align: left; font-family: 'Alatsi', sans-serif; color: #f05825; font-weight: bold; letter-spacing: 3px;">
                        Vision
                    </h5>
                    <hr style="color: orange">
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        <b>“Dedication in every drop”</b>, such is the motto of Sombra Coffee. And true to that motto, we are comitted to ensuring that the coffee produce from East Nusa Tenggara would be ones with high quality to match and compete with other brands on both national and international level.
                    </p>
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        We are immensely proud of the culture and natural richers of East Nusa Tenggara and we’re passionate to showcase the identity of East Nusa Tenggara through our products. We’re doing this by making sure that the product quality and the customer satisfaction are always maintained at a high level. Furthermore, we endeavour to ensure that we offer more than delectable coffee products for our customers to enjoy, but also education about coffee so that our customers may have access to information regarding the coffee and the process involved in producing the coffee they love.
                    </p>
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        in the long run, we would like Sombra to not only as a thriving business, but also as a contributing body to the surroundings, especially the people of East Nusa Tenggara. We would bring this about by establishing schools/academies with international standard that the locals can access.
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-sm-12 col-md-12 sliderCol">
                            <!-- Swiper -->
                            <div class="swiper mySwiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
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

                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" style="position: relative; bottom: 50px;">
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
                                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                    <br />
                    <h5 style="text-align: left; font-family: 'Alatsi', sans-serif; color: #f05825; font-weight: bold; letter-spacing: 3px;">
                        Mission
                    </h5>
                    <hr style="color: orange">
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        True to our vision to promote the riches and culture of East Nusa Tenggara, we make it our main priority to use  <b>"100% raw materials from authentic East Nusa Tenggara coffee".</b>
                    </p>
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        We also ensure our products are certified <b>"fair trade coffee"</b>. We acquire our green beans from local farmers and employ a fair system that benefits both the farmers and ourselves in the process.
                    </p>
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        We always make certain of the hygiene of our coffee through every step of our production. Every single Sombra product are certified <b>"hygienic"</b> and halal according to the standards of the Ministry of Religion and the Food and Drugs Administration of Indonesia.
                    </p>
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        <b>"Customer satisfaction is key";</b> all of them with their own preferences. To ensure this, we are dedicated to producing high quality coffee products with unique characteristics from various regions in East Nusa Tenggara. This way, we offer wide range of coffee for our customers to select and enjoy according to their own preferences.
                    </p>
                    <p class="text-justify"
                        style="font-family: 'Alatsi', sans-serif; text-align: justify;  ;">
                        <b>"Education"</b> is also our priority and we are determines to providing proper information about our coffee through contents on our social media and website and also in our packaging. Moreover, we would also build our own coffee academy to further establish education about coffee to the people.
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
        <a href="{{ route('article_detail_en', $f->judul_eng_slug) }}" class="nav-link p-0" style="color: black">{{
            $f->judul_eng }}</a>
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
