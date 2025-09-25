@extends('layouts.appsombraadmin')
@section('title', 'Dashboard')
@section('css')
<style>
    .info {
        margin-top: 10px;
    }
</style>
@endsection
@section('content')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: white;">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link" style="text-align: center;">
        <img width="60" src="{{ asset('image/logo/iconsombra.jpg') }}">
    </a>
    <hr style="margin-top: 0px; margin-bottom: 5px;" />

    <!-- Sidebar -->
    <div class="sidebar" style="background: black; padding-bottom: 50px;">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-2 mb-2 d-flex">
            <div class="info">
                <?php
                function hari_ini(){
                  $hari = date ("D");

                  switch($hari){
                    case 'Sun':
                    $hari_ini = "Minggu";
                    break;

                    case 'Mon':
                    $hari_ini = "Senin";
                    break;

                    case 'Tue':
                    $hari_ini = "Selasa";
                    break;

                    case 'Wed':
                    $hari_ini = "Rabu";
                    break;

                    case 'Thu':
                    $hari_ini = "Kamis";
                    break;

                    case 'Fri':
                    $hari_ini = "Jumat";
                    break;

                    case 'Sat':
                    $hari_ini = "Sabtu";
                    break;

                    default:
                    $hari_ini = "Tidak di ketahui";
                    break;
                  }

                  return $hari_ini;

                }
              ?>
                <a href="#" class="d-block" style="text-decoration: none; color: white;">
                    <h5 style="font-family: 'Truculenta', sans-serif;"><b>{{ hari_ini() ."," . date(' d - m - Y') }}</b>
                    </h5>
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-header">Pengaturan Halaman Utama</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i><img src="{{ asset('image/icon/ikon-sombra.png') }}"
                                style="filter: brightness(0) invert(1); width: 25px;"></i>
                        <p>&ensp;
                            Halaman Utama
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsSliders') }}" class="nav-link">
                                <i class="fas fa-solid fa-photo-film"></i>
                                <p style="color: white; padding-left: 30px;">Sliders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Pengaturan Produk</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i><img src="{{ asset('image/icon/ikon-sombra.png') }}"
                                style="filter: brightness(0) invert(1); width: 25px;"></i>
                        <p>&ensp;
                            Produk
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsDescGreenBean') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Desc GREENBEAN</p>
                            </a>
                        </li>

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsSlidersGreenBean') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Sliders GREENBEAN</p>
                            </a>
                        </li>

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsProductG') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">GREENBEAN</p>
                            </a>
                        </li>

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsDescRoastery') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Desc ROASTERY</p>
                            </a>
                        </li>

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsSlidersRoastery') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Sliders ROASTERY</p>
                            </a>
                        </li>

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsProductR') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">ROASTERY</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-header">Pengaturan Coffee Shop</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i><img src="{{ asset('image/icon/ikon-sombra.png') }}"
                                style="filter: brightness(0) invert(1); width: 25px;"></i>
                        <p>&ensp;
                            Coffee Shop
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsCoffeeShop') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Coffee Shop</p>
                            </a>
                        </li>

                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsCoffeeOutlet') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Coffee Outlet</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-header">Pengaturan Article</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i><img src="{{ asset('image/icon/ikon-sombra.png') }}"
                                style="filter: brightness(0) invert(1); width: 25px;"></i>
                        <p>&ensp;
                            Article
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsArticle') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Article</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Contact Email</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i><img src="{{ asset('image/icon/ikon-sombra.png') }}"
                                style="filter: brightness(0) invert(1); width: 25px;"></i>
                        <p>&ensp;
                            Email
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" style="background: #406b2f;">
                            <a href="{{ route('cmsContact') }}" class="nav-link">
                                <i class="fas fa-stream"></i>
                                <p style="color: white; padding-left: 30px;">Email</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: white;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Chart</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Chart</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chart All Menu</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Chart</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <a href="{{ route('cmsSliders') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg" style="background: #484848; color: white;">
                            <span class="info-box-icon" style="background: #a02424;"><i
                                    class="fas fa-solid fa-photo-film"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Sliders</span>
                                <span class="info-box-number">{{ $sliders }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12" style="background: #c8c7c7">
                    <a href="{{ route('cmsDescGreenBean') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #699c25;"><i class="fa-brands fa-readme" style="color:white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Desc GREENBEAN</span>
                                <span class="info-box-number">{{ $descgreenbean }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>

                <div class="col-md-6 col-sm-6 col-12" style="background: #c8c7c7">
                    <a href="{{ route('cmsDescRoastery') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #699c25;"><i class="fa-brands fa-readme" style="color:white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Desc ROASTERY</span>
                                <span class="info-box-number">{{ $descroastery }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12" style="background: #9c9c9c">
                    <a href="{{ route('cmsSlidersGreenBean') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #2b8f60;"><i class="fa-solid fa-images" style="color: white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Sliders GREENBEAN</span>
                                <span class="info-box-number">{{ $slidersgreenBean }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>

                <div class="col-md-6 col-sm-6 col-12" style="background: #9c9c9c">
                    <a href="{{ route('cmsSlidersRoastery') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #2b8f60;"><i class="fa-solid fa-images" style="color: white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Sliders ROASTERY</span>
                                <span class="info-box-number">{{ $slidersroastery }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12" style="background: #7c7c7c">
                    <a href="{{ route('cmsProductG') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #1f691f;"><i class="fa-brands fa-envira"
                                    style="color: white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">GREENBEAN</span>
                                <span class="info-box-number">{{ $greenbean }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>

                <div class="col-md-6 col-sm-6 col-12" style="background: #7c7c7c">
                    <a href="{{ route('cmsProductR') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #1f691f;"><i class="fa-brands fa-envira"
                                    style="color: white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">ROASTERY</span>
                                <span class="info-box-number">{{ $roastery }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 col-12" style="background: brown;">
                    <a href="{{ route('cmsCoffeeShop') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #603cf7;"><i
                                    class="fas fa-brands fa-pagelines" style="color: white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Coffee Shop</span>
                                <span class="info-box-number">{{ $coffeeshop }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>

                <div class="col-md-6 col-sm-6 col-12" style="background: brown;">
                    <a href="{{ route('cmsCoffeeOutlet') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #603cf7;"><i
                                    class="fas fa-brands fa-pagelines" style="color:greenyellow"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Coffee Outlet</span>
                                <span class="info-box-number">{{ $coffeeoutlet }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12 col-sm-6 col-12" style="background: #009688;">
                    <a href="{{ route('cmsArticle') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #6e034d;"><i class="fas fa-solid fa-pager"
                                    style="color: white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Article</span>
                                <span class="info-box-number">{{ $article }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>

                <!-- /.col -->

                </a>
                <!-- /.row -->
            </div>
            <div class="row">

                <div class="col-md-12 col-sm-6 col-12" style="background: #ffe500;">
                    <a href="{{ route('cmsContact') }}" style="text-decoration: none; color: black;">
                        <div class="info-box shadow-lg">
                            <span class="info-box-icon" style="background: #300000;"><i class="fa-regular fa-envelope" style="color:white;"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Contact</span>
                                <span class="info-box-number">{{ $contact }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>

                <!-- /.col -->

                </a>
                <!-- /.row -->
            </div>
        </div>
</div>
</section>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection
