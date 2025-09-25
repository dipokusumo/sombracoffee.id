@extends('layouts.appsombra_ind')
@section('title', 'Article Detail')

@section('lang')
<li class="nav-item">
    <p style="padding-left: 10px;padding-top: 10px;">
        <a href="{{ route('article') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; color: #f05825;">IN</a>
        <span style="font-family: 'Alatsi', sans-serif;">/</span>
        <a href="{{ route('article_en') }}" style="text-decoration: none; color: black; font-family: 'Alatsi', sans-serif; font-size: 20px; ">EN</a>
    </p>
</li>
@endsection

@section('css')
<style>
    .imageA {
        padding-left: 90px;
        padding-right: 90px;
    }

    .descA {
        padding-top: 40px;
        padding-left: 90px;
        padding-right: 90px;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {

        .imageA {
            padding-left: 0px;
            padding-right: 0px;
        }

        .descA {
            padding-top: 20px;
            padding-left: 0px;
            padding-right: 0px;
        }
    }
</style>
@endsection

@section('content')

@foreach($article as $a)
<div class="row" style="padding-top: 20px; padding-bottom: 40px;">
    <div class="col-sm-12">
        <div class="container">
        <div class="card" style="width: 100%; padding: 50px;">
            <div class="row">
            <div class="col-lg-12 imageA">
                <h3 style="font-weight: bolder; text-align: center; padding-bottom: 40px;">{{ $a->judul }}</h3>
                <img src="{{ asset('img/article/' . $a->image) }}" style="width: 100%;">
            </div>

            <div class="col-lg-12 descA">
                {!! $a->description !!}
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
