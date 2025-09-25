@extends('layouts.appsombra_eng')
@section('title', 'Coffee')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('coffee') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('coffee_en') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">EN</a>
    </p>
</li>
@endsection

@section('css')
<link href="{{ asset('css/sombra/indexP.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="Product List">
    <div class="container">
        <div class="row" style="padding-top: 50px; padding-bottom: 10px;">
            <div class="col-sm-6">
                <h2 style="position: relative; left: 10%; padding-bottom: 40px;" class="atlasi">Our Menu</h2>
            </div>
            <div class="col-sm-6" style="text-align: right;">
                <div class="row" >
                    <div class="col-sm-12">
                        <p style="font-family: 'Alatsi', sans-serif; text-align: right; font-size: 6px; padding-right: 53px;">
                            <img src="{{ asset('image/logo/bpom.png') }}" style="width: 105px;"> | <img src="{{ asset('image/logo/halal.png') }}" style="width: 65px;"><br>
                            No.Halal : 1616009071020
                        </p>
                        <br />
                    </div>
                </div>
            </div>

            @foreach($coffeeshop as $c)
            <div class="col-sm-6 col-lg-3" style="margin-bottom: 40px;">
                <a href=""
                    style="text-decoration: none; color: black">
                    <div class=containerz>
                        <div class=cardz>
                            <div class=imagez style="text-align: center">
                                <img src="{{ asset('img/coffeeshop/'. $c->imagecs) }}" style="height: 207px; width: 155.25px; border-radius: 0px !importent; border-radius: 0px !important;">
                                <h6 style="padding-top: 10px;"><b>{{ $c->nama }}</b></h6>
                            </div>

                            <div class=contentz>

                                <p style="font-size: 16px;"> Order <a href="https://tinyurl.com/sombracoffeegb" target="_blank">here</a> via Grabfood</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>

        <div class="row" style="padding-top: 50px; padding-bottom: 10px; padding-left: 50px; padding-right: 50px;">
            <div class="col-sm-12" style="position relat">
                <h2 style="position: relative; padding-bottom: 40px;" class="atlasi">Coffee Shop</h2>
            </div>
            @foreach($coffeeoutlet as $co)
            <div class="col-sm-6 col-lg-3" style="margin-bottom: 40px;">
                <a href="#"
                    style="text-decoration: none; color: black">
                    <img src="{{ asset('img/coffeeoutlet/' . $co->imageco) }}" style=" border-radius: 0px !importent; border-radius: 0px !important; width: 100%;">
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
                <a href="{{ route('article_detail_en', $f->judul_eng_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul_eng }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('script')
@endsection
