@extends('layouts.appsombra_eng')
@section('title', 'Roastery')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('product') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('product_en') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">EN</a>
    </p>
</li>
@endsection


@section('css')
@endsection

@section('content')

@foreach($roastery as $r)
<div class="Address" style="padding-bottom: 30px; padding-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <a href="{{ route('product_en') }}" style="text-decoration: none; color: black;"><i style="position: absolute; left: 40px; bottom: 495px;" class="fas fa-reply" style="position: absolute; left: 40px; bottom : 20px;"></i></a>
            <div class="card" style="width: 100%; padding: 60px 53px 30px 53px;">
                <img src="{{ asset('img/product/roastery/' . $r->imagep) }}">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card" style="width: 100%; padding: 20px; filter: drop-shadow(-1px 1px 1px black);">
                <h4 style="font-weight: bolder;">{{ $r->pname_eng }}</h4>
                {!! $r->specification_eng !!}

            </div>
            <hr>
            <div class="card" style="width: 100%; padding: 20px; filter: drop-shadow(2px 2px 2px black);">
                <h6 style="font-weight: bolder;">Description </h6>
                <table border="2" style="border: none;">
                    {!! $r->description_eng !!}
                </table>
                <div class="" style="text-align: right;">
                    <a href="{{ $r->link_tokopedia }}"  class="btn" style="text-align: right; background: #61bf56; color: white; font-size: 13px; filter: drop-shadow(2px 1px 2px black);">Buy by
                        TOKOPEDIA<img
                            style="filter: drop-shadow(1px 3px 3px black) ; height: 20px; margin-bottom: 5px; margin-left: 5px;"
                            src="{{ asset('image/icon/ikon-tokopedia.png') }}"></a>
                    <a href="{{ $r->link_shopee  }}"  class="btn" style="text-align: right; background: #f1582c; color: white; font-size: 13px; filter: drop-shadow(2px 1px 2px black);">Buy by
                        SHOPEE<img
                            style="filter: drop-shadow(1px 3px 3px black) ; height: 20px; margin-bottom: 6px; margin-left: 5px;"
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
                <a href="{{ route('article_detail_en', $f->judul_eng_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul_eng }}</a>
            </li>
        @endforeach
    </ul>
@endsection

@section('script')
@endsection
