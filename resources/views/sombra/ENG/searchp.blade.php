@extends('layouts.appsombra_eng')
@section('title', '')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('sombra') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('sombra_en') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825; ">EN</a>
    </p>
</li>
@endsection

@section('css')
<link href="{{ asset('css/sombra/indexP.css') }}" rel="stylesheet">
<style>

    .containerz .cardz {
          position: relative;
          max-width : 300px;
          height : 215px;
          margin : 30px 40px;
          padding : 20px 15px;

          display : flex;
          flex-direction : column;
          transition : 0.3s ease-in-out;
          border-radius : 15px;
        }
        .containerz .cardz:hover {
          height : 320px;
        }


        .containerz .cardz .imagez {
          position : relative;


          top : -20%;
          z-index : 1;
        }

        .containerz .cardz .imagez img {
          max-width : 100%;
          border-radius : 15px;
        }

        .containerz .cardz .contentz {
          position : relative;
          top : -160px;
          padding : 10px 15px;
          color : black;
          text-align : center;

          visibility : hidden;
          opacity : 0;
          transition : 0.3s ease-in-out;

        }

        .containerz .cardz:hover .contentz {
           margin-top : 90px;
           visibility : visible;
           opacity : 1;
           transition-delay: 0.2s;

        }
    </style>
@endsection

@section('content')
<section class="Product List">
    <div class="container">
        <div class="row" style="padding-bottom: 30px;">
            <div class="col-lg-12">
                <h4 class="submitR">GREENBEEN
            </h4>
            </div>
        </div>

        <div class="row">

            @foreach($productg as $p)
            {{-- <div class="col-sm-6 col-lg-3" style="padding: 90px 90px 20px 90px;">
                <a href="{{ route('product_greenbean', $p->pname_slug) }}" style="text-decoration: none; color: black">
                    <img src="{{ asset('img/product/greenbean/' . $p->imagep) }}"
                        style="width: 100%; margin-bottom: 16px;">
                    <h6 style="text-align: center; font-size: 0.9rem; padding-bottom: 10px;">
                        {{ $p->pname }}
                    </h6>
                </a>
            </div> --}}
            <div class="col-sm-6 col-lg-4">
                <a href="{{ route('product_greenbean', $p->pname_eng_slug) }}" style="text-decoration: none; color: black">
                <div class = containerz>
                    <div class = cardz>
                      <div class = imagez style="text-align: center">
                        <img src = "{{ asset('img/product/greenbean/' . $p->imagep) }}" style="height: 207px;">
                        <h6 style="padding-top: 15px;"><b>{{ $p->pname_eng }}</b></h6>
                      </div>
                      <div class = contentz>

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
                <h4 class="submitG"
                >ROASTERY
            </h4>
            </div>
        </div>

        <div class="row">


            @foreach($productr as $p)
            <div class="col-sm-6 col-lg-4">
                <a href="{{ route('product_roastery', $p->pname_eng_slug) }}" style="text-decoration: none; color: black">
                <div class = containerz>
                    <div class = cardz>
                      <div class = imagez style="text-align: center">
                        <img src = "{{ asset('img/product/roastery/' . $p->imagep) }}" style="height: 207px;">
                        <h6 style="padding-top: 15px;"><b>{{ $p->pname_eng }}</b></h6>
                      </div>
                      <div class = contentz>
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
        <a href="{{ route('article_detail', $f->judul_slug) }}" class="nav-link p-0" style="color: black">{{ $f->judul }}</a>
    </li>
    @endforeach
  </ul>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
$("#hide").hide();
$(document).ready(function(){
    $("#myCoffee").hover(function(){
        $("#hide").show();
    }, function(){
        $("#hide").hide();
  });
});
</script>
@endsection
