@extends('layouts.appsombra_eng')
@section('title', '')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('sombra') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('sombra_en') }}"
            style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">EN</a>
    </p>
</li>
@endsection

@section('css')
<link href="{{ asset('css/sombra/indexS.css') }}" rel="stylesheet">
<style>
.backBlack{
    background: linear-gradient(to right, #1a1a1ab3, black);
}
.backBlack2{
        background: rgba(0, 0, 0, 0);
        background-size: 100%;
    }
@media only screen and (max-width: 600px) {
    .backBlack{
        background: rgba(0, 0, 0, 0.712);
        background-size: 74%;
    }
    .backBlack2{
        background: black;
        background-size: 100%;
    }
}
</style>
@endsection

@section('content')
<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="swiper mySwiper">
    <div class="parallax-bg" style="
    background-image: url({{ asset('image/slides/slide1.png') }});

  " data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper backBlack2">
        <div class="swiper-slide backBlack">
            <div class="title judul1" data-swiper-parallax="-300">
                {{ $sliders->judul1_eng }}
            </div>
            <div class="text description1" data-swiper-parallax="-100" style="position: relative; top: 20px;">
                <p class="fontGFS">
                    {!! $sliders->description1_eng !!}
                </p>
            </div>
            <div class="subtitle" data-swiper-parallax="-200">
                <a href="{{ $sliders->link1_eng }}" target="_blank" class="btn link1">
                    <span style="color: white;">{{ $sliders->link1_name_eng }}</span>
                </a>
            </div>
        </div>
        <div class="swiper-slide backBlack">
            <div class="title judul2" data-swiper-parallax="-300">
                {{ $sliders->judul2_eng }}</div>
            <div class="text description2" data-swiper-parallax="-100">
                <p class="fontGFS">
                    {!! $sliders->description2_eng !!}
                </p>
            </div>
            <div class="subtitle" data-swiper-parallax="-200">
                <a href="{{ $sliders->link2_eng }}" target="_blank" class="btn link2">
                    <span style="color: white;">{{ $sliders->link2_name_eng }}</span>
                </a>
            </div>
        </div>
        <div class="swiper-slide backBlack">
            <div class="title judul3" data-swiper-parallax="-300">{{ $sliders->judul3_eng }}</div>
            <div class="text description3" data-swiper-parallax="-100">
                <p class="fontGFS">
                    {!! $sliders->description3_eng !!}
                </p>
            </div>
            <div class="subtitle" data-swiper-parallax="-200">
                <a href="{{ $sliders->link3_eng }}" target="_blank" class="btn link3">
                    <span style="color: white;">{{ $sliders->link3_name_eng }}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<section class="Product List">
    <div class="container">
        <div class="row productListPadding">
            @foreach($productr as $p)
            <div class="col-sm-6 col-lg-4 productListPBottom">
                <div class=containerz>
                    <div class=cardz>
                        <div class=imagez style="text-align: center">
                            <img src="{{ asset('img/product/roastery/' . $p->imagep) }}" class="imagePList">
                            <h6 class="pNamePT10pxPB10px"><b>{{ $p->pname_eng }}</b></h6>
                            <p class="pNameSubMT10px"><i>{{ $p->pname_sub }}</i></p>
                        </div>
                        <div class=contentz>
                            <p class="productDesc">{{ substr($p->description_eng, 0, 80) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <br>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-12 Lbuynow">
                <a href="{{ route('product_en') }}" target="_blank" class="buynow">
                    <span class="fontAlatsi">BUY NOW</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="category">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-lg-4 kategoriP">

                <div class=containerk>

                    <div class=cardk>
                        <a href="{{ route('coffee_en') }}" style="text-decoration: none;">
                        <div style="text-align: center">

                            <img src="{{ asset('image/category/coffe.jpg') }}" class="imageG">

                            <p class=contentk>Find out more about our coffee shop in East Nusa Tenggara.</p>

                            <button class="btn submitCF" type="submit">COFFEE SHOP</button>
                        </a>
                        </div>


                    </div>

                </div>


        </div>


            <div class="col-sm-4 col-lg-4 kategoriR">
                <a href="{{ route('product_en') }}" style="text-decoration: none;">
                    <div class=containerk>
                        <div class=cardk>
                            <div style="text-align: center">

                                <img src="{{ asset('image/category/roastery.jpg') }}"
                                    style="width: 300px; height: 373.4px;">

                                <p class=contentk>Get to know more about roasting
                                    coffee products that we produce to meet your coffee needs.</p>

                                <button class="btn submitR" type="submit">ROASTERY</button>
                            </div>

                        </div>
                    </div>
                </a>
            </div>


            <div class="col-sm-4 col-lg-4 kategoriG">
                <a href="{{ route('product_en') }}" style="text-decoration: none;">
                    <div class=containerk>
                        <div class=cardk>
                            <div class=imagek style="text-align: center">

                                <img src="{{ asset('image/category/greenbean.png') }}" class="imageG">

                                <p class=contentk>Get to know more about our Green Bean raw materials obtained from farmers in East Nusa Tenggara.</p>

                                <button class="btn submitG" type="submit">GREEN BEAN</button>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <br>
        </div>
    </div>
</section>

{{-- <section class="ARTICLE">
    <div class="container">
        <a href="{{ route('article_detail', $firstarticle->judul_slug) }}" style="text-decoration: none; color: black">
            <div class="row">
                <div class="col-sm-6 col-lg-6 articleP">
                    <img src="{{ asset('img/article/' . $firstarticle->image) }}" class="imageArticle">
                </div>
                <div class="col-sm-6 col-lg-6 articlePDesc">
                    <h1 class="articleJudul">{{ ucwords($firstarticle->judul_eng) }}</h1>
                    <p class="fontAlatsi" style="text-align: justify;">{!! $firstarticle->description_sub_eng !!}</p>
                </div>
            </div>
        </a>
    </div>
</section> --}}



@endsection

@section('footerarticle')
<ul class="nav flex-column">
    @foreach($footerarticle as $f)
    <li class="nav-item mb-2 fontAlatsi">
        <a href="{{ route('article_detail_en', $f->judul_eng_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul_eng
            }}</a>
    </li>
    @endforeach
</ul>
@endsection

@section('script')
<script>
    var swiper = new Swiper(".mySwiper", {
              speed: 600,
              parallax: true,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
              scrollbar: {
                el: ".swiper-scrollbar",
              },
            });
</script>
@endsection
