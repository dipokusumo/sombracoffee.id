@extends('layouts.appsombra_ind')
@section('title', 'AboutUs')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('contactus') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('contactus_en') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; ">EN</a>
    </p>
</li>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 0.1rem rgba(40, 167, 69, 0.25);
    }

    .cardSize1{
        width: 100%;
        padding: 20px 40px 20px 40px;
        background: #e2e1dd;
        z-index: 2;
    }

    .cardSize2{
            width: 40%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: absolute;
            /* top: 20px; */
            left: 600px;
            top: 700px;
    }

    .cardImg1{
        height: 363px;
    }

    .cardImg2{
        width: 190%
    }

    .pdLeft{
            padding-right: calc(var(--bs-gutter-x) * .5) !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
    }

    .pdRight{
        padding-right: calc(var(--bs-gutter-x) * .5) !important;
        padding-left: calc(var(--bs-gutter-x) * .5) !important;
    }


    @@media (min-width: 1281px) {

        .cardSize1{
            width: 100%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            z-index: 2;
       }

        .cardSize2{
            width: 40%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: absolute;
            left: 658px;
            top: 658px;
        }

        .cardImg1{
        height: 416px;
        }

        .cardImg2{
            width: 193%;
        }

        .pdLeft{
            padding-right: calc(var(--bs-gutter-x) * .5) !important;
            padding-left: 0px !important;
        }

        .pdRight{
            padding-right: 0px !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
        }

  /* CSS */

    }

    /*
    ##Device = Laptops, Desktops
    ##Screen = B/w 1025px to 1280px
    */

    @@media (min-width: 1025px) and (max-width: 1280px) {

        .cardSize1{
            width: 100%;
            padding: 20px 40px 31px 40px;
            background: #e2e1dd;
            z-index: 2;
            font-size: 12px !important;
        }

        .cardSize2{
            width: 40%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: absolute;
            /* top: 20px; */
            left: 586px;
            top: 666px;
        }

        .cardImg2{
            width: 205.7%;
            height: 579px;
        }

        .pdLeft{
            padding-right: calc(var(--bs-gutter-x) * .5) !important;
            padding-left: 0px !important;
        }

        .pdRight{
            padding-right: 0px !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
        }

    /* CSS */

    }

    /*
    ##Device = Tablets, Ipads (portrait)
    ##Screen = B/w 768px to 1024px
    */

    @@media (min-width: 768px) and (max-width: 1024px) {

    .cardSize1{
        width: 100%;
        padding: 20px 40px 20px 40px;
        background: #e2e1dd;
        z-index: 2;
    }

    .cardSize2{
        width: 40%;
        padding: 20px 40px 20px 40px;
        background: #e2e1dd;
        position: absolute;
        /* top: 20px; */
        left: 600px;
        top: 700px;
    }

    .cardImg1{
         height: 317px;
    }

    .cardImg2{
        width: 209%;
    }

    .pdLeft{
        padding-right: calc(var(--bs-gutter-x) * .5) !important;
        padding-left: 0px !important;
    }

    .pdRight{
        padding-right: 0px !important;
        padding-left: calc(var(--bs-gutter-x) * .5) !important;
    }

    /* CSS */

    }

    /*
    ##Device = Tablets, Ipads (landscape)
    ##Screen = B/w 768px to 1024px
    */

    @@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

        .cardSize1
        {
            width: 100%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            z-index: 2;
            font-size: 10px;
        }

        .cardSize2{
            width: 40%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: absolute;
            /* top: 20px; */
            left: 383px;
            top: 425px;
            font-size: 10px;
        }

        .cardImg1{
         height: 317px;
        }

        .cardImg2{
            width: 209%;
        }

        .pdLeft{
        padding-right: calc(var(--bs-gutter-x) * .5) !important;
        padding-left: 0px !important;
        }

        .pdRight{
            padding-right: 0px !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
        }

    /* CSS */

    }

    /*
    ##Device = Low Resolution Tablets, Mobiles (Landscape)
    ##Screen = B/w 481px to 767px
    */

    @@media (min-width: 481px) and (max-width: 767px) {

        .cardSize1
        {
            width: 100%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: unset;
            bottom: 50px;
            z-index: 2;
            font-size: 10px;
        }

        .cardSize2
        {
            width: 40%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: absolute;
            /* top: 20px; */
            left: 600px;
            top: 700px;
        }

        .cardImg1{
            height: 163px;
        }

        .cardImg2{
            width: 100%
        }

        .pdLeft{
            padding-right: calc(var(--bs-gutter-x) * .5) !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
        }

        .pdRight{
            padding-right: calc(var(--bs-gutter-x) * .5) !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
        }

    /* CSS */

    }

    /*
    ##Device = Most of the Smartphones Mobiles (Portrait)
    ##Screen = B/w 320px to 479px
    */

    @@media (min-width: 320px) and (max-width: 480px) {


        .cardSize1
        {
            width: 100%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: relative;
            bottom: 50px;
            z-index: 2;
        }

        .cardSize2{
            width: 100%;
            padding: 20px 40px 20px 40px;
            background: #e2e1dd;
            position: unset;
            /* top: 20px; */
            left: 600px;
            top: 700px;
        }

        .cardImg1{
            height: 163px;
            position: relative;
        }

        .cardImg2{
            width: 100%;
            position: relative;
        }

        .pdLeft{
            padding-right: calc(var(--bs-gutter-x) * .5) !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
        }

        .pdRight{
            padding-right: calc(var(--bs-gutter-x) * .5) !important;
            padding-left: calc(var(--bs-gutter-x) * .5) !important;
            margin-top: 50px;
        }


    /* CSS */

    }
</style>
@endsection

@section('content')
<div class="Address">
    <div class="container">
        <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
            <div class="col-sm-1"></div>
            <div class="col-sm-5 pdRight">
                <div class="card cardSize1">

                    <h6>Kontak Sombra Roastery</h6>
                    <p>
                        Grab Food : Sombra Coffee<br />
                        Facebook : Sombra Coffee<br />
                        Instagram : @sombracoffee.id<br>
                        Youtube : Sombra Coffee<br>
                        E-mail : sombratree@gmail.com<br>
                        Kontak WA : +62 813 3901 3817
                    </p>
                    <br>
                    <h6>Lokasi</h6>
                    <h6>Roastery :</h6>
                    <p>
                        Jl. Uki Tau I Futsal Tana Mera Liliba Kupang <br>
                        Jam Operasional :<br>
                        Senin - Jumat : 08.00 - 17.00 WITA<br>
                        Sabtu : 08.00 - 13.00 WITA
                    </p>
                </div>
            </div>
            <div class="col-sm-5 pdLeft">
                <div class="card" style="width: 100%;">

                    <div class="card" style="width: 100%; ">
                        <img src="{{ asset('image/CoffeeShop/sombrasset5.png') }}" class="cardImg1">
                    </div>
                </div>

            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row" style="padding-bottom: 50px;">
            <div class="col-sm-1"></div>

            <div class="col-sm-5">
                <div class="card" style="width: 100%;">

                    <div class="card" style="width: 100%; ">
                        <img src="{{ asset('image/CoffeeShop/QCK06379best.jpg') }}" class="cardImg2">
                    </div>
                </div>

            </div>
            <div class="col-sm-5 pdRight">
                <div class="card cardSize1">

                    <h5>Kontak Sombra Coffee Shop</h5>
                    <p>
                        Grab Food : Sombra Coffee<br />
                        Facebook : Sombra Coffee<br />
                        Instagram : @sombracoffee.id<br />
                        Youtube : Sombra Coffee<br />
                        E-mail : sombratree@gmail.com<br />
                        Kontak WA : +62 813 8202 2012
                    </p>
                    <br>
                    <h5>Lokasi</h4>
                        <h5>Coffee Shop :</h5>
                        <p>
                            Jl. W.J. Lalamentik No. 95 Oebufu, Oebobo Kupang NTT<br>
                            Jam Operasional :<br>
                            Senin - Kamis : 07.00 - 22.00 WITA<br>
                            Jumat : 07.00 - 23.00 WITA<br>
                            Sabtu : 07.00 - 24.00 WITA<br>
                            Minggu : 10.00 - 24.00 WITA
                        </p>
                        <h5>Jadwal Live Music :</h5>
                        <p>
                            Jumat: 21:00 - 24:00 WITA<br>
                            Sabtu: 21:00 - 24:00 WITA
                        </p>

                        <h5>Jadwal Stand Up Comedy :</h5>
                        <p>
                            Hari: Jumat (Minggu ke-2 dan ke-4) <br>
                            Jam: 20:00 - 21:00 WITA
                        </p>
                </div>
            </div>

            <div class="col-sm-1"></div>
        </div>

      <div class="row" style="padding-bottom : 50px;">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.101287196154!2d123.60892011440532!3d-10.172422012632447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569d9b4741a4f7%3A0xb10c6f4ca61af6a!2sSombra%20Coffee!5e0!3m2!1sid!2sid!4v1662975795581!5m2!1sid!2sid" style="width: 100%; height: 350px;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-sm-1"></div>
      </div>

    </div>

  </div>

  <div class="Contact-Us" style="padding-bottom: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
          <div class="card" style="width: 100%; padding-left: 50px; padding-right: 50px; padding-top: 50px; padding-bottom: 50px;">
          <h4 style="text-align: center;margin-bottom: 25px;font-weight: bold;">Hubungi Kami</h4>
            <form action="{{ route('SendContactus') }}" method="POST">
            @csrf
            @if(Session::has('success'))

              <div class="alert alert-success" id="success-alert">

                  {{ Session::get('success') }}

                  @php

                  Session::forget('success');

                  @endphp

              </div>
              @endif
            <p>Nama</p>
            <div class="input-group mb-3">
                <input type="name" name="name" class="form-control" id="floatingInput" placeholder="">
            </div>
            <p>Alamat Email</p>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            </div>
            <div class="form-floating">
              <p>Pesan</p>
              <textarea name="messagez" class="form-control" placeholder="Masukan Pesan"
                style="height: 100px"></textarea>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn"
                style="background-color: #da9528; font-weight: bolder; position: relative; left: 90%; top: 25px;">Kirim</button>
            </div>
            </form>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>


  </div>
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

