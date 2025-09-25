@extends('layouts.appsombra_ind')
@section('title', 'Greenbean')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('product') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('product_en') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; ">EN</a>
    </p>
</li>
@endsection


@section('css')
@endsection

@section('content')

@foreach($greenbean as $g)
<div class="Address" style="padding-bottom: 30px; padding-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <a href="{{ route('product') }}" style="text-decoration: none; color: black;">
                <i style="position: absolute; left: 40px; bottom: 495px;" class="fas fa-reply" style="position: absolute; left: 40px; bottom : 20px;"></i>
            </a>
            <div class="card" style="width: 100%;">
                <img src="{{ asset('img/product/greenbean/' . $g->imagep) }}">
            </div>
        </div>
        <div class="col-sm-8">

            <div class="card" style="width: 100%; padding: 20px; filter: drop-shadow(-1px 1px 1px black);">
                <h4 style="font-weight: bolder;">{{ $g->pname }}</h4>
                {!! $g->specification !!}

            </div>
            <hr>
            <div class="card" style="width: 100%; padding: 20px; filter: drop-shadow(2px 2px 2px black);">
                <h6 style="font-weight: bolder;">Description </h6>
                <table border="2" style="border: none;">
                    {!! $g->description !!}
                </table>

                <div style="text-align: right; padding-top: 20px;">
                    <a href="{{ $g->link_tokopedia }}" target="_blank" class="btn" style="text-align: right; background: #61bf56; color: white; font-size: 13px;">Buy by
                        TOKOPEDIA<img
                            style="filter: sepia(1) ; height: 20px; margin-bottom: 5px; margin-left: 5px;"
                            src="{{ asset('image/icon/ikon-tokopedia.png') }}"></a>
                    <a href="{{ $g->link_shopee  }}" target="_blank" class="btn" style="text-align: right; background: #f1582c; color: white; font-size: 13px;">Buy by
                        SHOPEE<img
                            style="filter: sepia(1) ; height: 20px; margin-bottom: 6px; margin-left: 5px;"
                            src="{{ asset('image/icon/ikon-shopee.png') }}"> </a>
                </div>

            </div>

        </div>
      </div>
    </div>
</div>
@endforeach

@endsection

@section('footerarticle')
    <ul class="nav flex-column">
        @foreach($footerarticle as $f)
            <li style="font-family: 'Alatsi', sans-serif;" class="nav-item mb-2">
                <a href="{{ route('article_detail', $f->judul_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('script')
@endsection
