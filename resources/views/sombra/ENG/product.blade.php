@extends('layouts.appsombra_eng')
@section('title', 'Produk')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('product') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('product_en') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">EN</a>
    </p>
</li>
@endsection

@section('css')
<link href="{{ asset('css/sombra/indexP.css') }}" rel="stylesheet">
<style>
    .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet{
        background: white;
    }

    .sliderCol {
        padding: 0px 10px 0px 10px;
    }

    .sliderImg{
        width: 100%;
    }

    .bpom {
        width: 300px;
        position: relative;
        top: 30px;
    }

    .halal {
        width: 150px;
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
            width: 300px;
            position: relative;
            top: 0px;
            right: 8px;
            margin-bottom: 20px;
        }

        .halal {
            width: 150px;
        }

        .iamgeUS {
            width: 100%;
            padding-bottom: 20px;
        }

        .swiper{
             height: 161px;
        }
    }
</style>
@endsection

@section('content')
<section class="Product List">
    <div class="container">

        <div class="row" style="padding-bottom: 30px; padding-top: 30px;">
            <div class="col-lg-12">
                <h4 class="submitR">GREENBEAN</h4>
                <p class="gbdesc">{{ $descgb->description_eng }}</p>
            </div>
        </div>

        <div class="row" style="padding-bottom: 40px;">
            <div class="col-sm-12 col-md-12 sliderCol">
                <!-- Swiper -->
                <div class="swiper mySwiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-76669f0fbb3a9e8c" aria-live="polite"
                        style="transition-duration: 0ms;">
                        @foreach($slidersgb as $s)
                        <div class="swiper-slide" role="group" aria-label="1 / 6"
                            style="width: 1360px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <img class="sliderImg" src="{{ asset('img/slidersGreenBean/'. $s->imagesg) }}">
                        </div>
                        @endforeach
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

        <div class="row" style="padding-top: 50px; padding-bottom: 10px;">

            @foreach($productg as $p)
            <div class="col-sm-6 col-lg-4" style="margin-bottom: 40px;">
                <a href="{{ route('product_greenbean_en', $p->pname_eng_slug) }}"
                    style="text-decoration: none; color: black">
                    <div class=containerz>
                        <div class=cardz>
                            <div class=imagez style="text-align: center">
                                <img src="{{ asset('img/product/greenbean/' . $p->imagep) }}" style="height: 207px; width: 155.25px;">
                                <h6 style="padding-top: 10px;"><b>{{ $p->pname_eng }}</b></h6>
                                <p>{{ $p->pname_sub_eng }}</p>
                            </div>

                            <div class=contentz>

                                <p style="font-size: 16px;">{{ substr($p->description_eng, 0, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

        <div class="row" style="padding-bottom: 30px;">
            <div class="col-lg-12">
                <h4 class="submitG">ROASTERY</h4>
                <p class="rdesc">{{ $descr->description_eng }}</p>
            </div>
        </div>

        <div class="row" style="padding-bottom: 40px;">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-5" style="text-align: center">
                        <img src="{{ asset('image/logo/bpom.png') }}" class="bpom">
                    </div>
                    <div class="col-sm-5" style="text-align: center">
                        <img src="{{ asset('image/logo/halal.png') }}" class="halal">
                        <p style="font-family: 'Alatsi', sans-serif; text-align: center;">
                            No.Halal : 1616009071020
                        </p>
                    </div>
                    <div class="col-sm-1">
                    </div>
                </div>
                <br />
            </div>
            <div class="col-sm-1">
            </div>
        </div>

        <div class="row" style="padding-bottom: 40px;">
            <div class="col-sm-12 col-md-12 sliderCol">
                <!-- Swiper -->
                <div
                    class="swiper mySwiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-76669f0fbb3a9e8c" aria-live="polite"
                        style="transition-duration: 0ms;">
                        @foreach($slidersr as $s)
                        <div class="swiper-slide" role="group" aria-label="1 / 4"
                            style="opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            <img class="sliderImg" src="{{ asset('img/slidersRoastery/'. $s->imagesr) }}">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" style="position: relative; bottom: 50px;">
                        <span class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 2"></span><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                            aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet"
                            tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 50px;">
            @foreach($productr as $p)
            <div class="col-sm-6 col-lg-4" style="margin-bottom: 20px;">
                <a href="{{ route('product_roastery_en', $p->pname_eng_slug) }}"
                    style="text-decoration: none; color: black">
                    <div class=containerz>
                        <div class=cardz>
                            <div class=imagez style="text-align: center">
                                <img src="{{ asset('img/product/roastery/' . $p->imagep) }}" style="height: 207px;">
                                <h6 style="padding-top: 10px;"><b>{{ $p->pname_eng }}</b></h6>
                                <p>{{ $p->pname_eng_sub }}</p>
                            </div>
                            <div class=contentz>

                                <p style="font-size: 16px;">{{ substr($p->description_eng, 0, 80) . "..." }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

    </div>
</section>
@endsection

@section('footerarticle')
<ul class="nav flex-column">
    @foreach($footerarticle as $f)
    <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2">
        <a href="{{ route('article_detail_en', $f->judul_eng_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul_eng
            }}</a>
    </li>
    @endforeach
</ul>
@endsection

@section('script') ewq
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
