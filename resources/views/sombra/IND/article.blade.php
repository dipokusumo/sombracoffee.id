@extends('layouts.appsombra_ind')
@section('title', 'Artikel')

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
@endsection

@section('content')
@foreach($article as $a)
<div class="row" style="padding-top: 20px; padding-bottom: 20px">
    <div class="col-sm-12">
        <div class="container">
        <div class="card" style="width: 100%; padding: 50px;">
            <div class="row">
            <div class="col-lg-6">

            <img src="{{ asset('img/article/' . $a->image) }}" style="width: 100%;">

            </div>

            <div class="col-lg-6">
                <h3 style="font-weight: bolder;">{{ $a->judul }}</h3>
                    {!! $a->description_sub !!}
                    <div style="text-align: right; position: relative; top: 30px;">
                        <a href="{{ route('article_detail', $a->judul_slug) }}" style="text-decoration: none; border-radius: 0px; background-color: black; color: white;" class="btn">Read More</a>
                    </div>
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
