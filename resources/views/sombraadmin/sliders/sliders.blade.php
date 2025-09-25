@extends('layouts.appsombraadmin')
@section('title', 'Slide')
@section('css')
<style>
  .info{
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
    <hr style="margin-top: 0px; margin-bottom: 5px;"/>

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
                    <h5 style="font-family: 'Truculenta', sans-serif;"><b>{{ hari_ini() ."," . date(' d - m - Y') }}</b></h5>
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
                   <li class="nav-item menu-is-opening menu-open">
                    <a href="#" class="nav-link">
                      <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
                      <p>&ensp;
                        Halaman Utama
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item menu-is-opening menu-open" style="background: linear-gradient(47deg, #fc912f, transparent)">
                        <a href="{{ route('cmsSliders') }}" class="nav-link">
                            <i class="fas fa-stream"></i>
                          <p style="color: white; padding-left: 30px;">Sliders</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-header">Pengaturan Produk</li>
                   <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
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
                    <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
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
                     <li class="nav-item">
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
                    <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
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
                    <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
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
                    <h1 class="m-0">Sliders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Chart</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">Sliders</li>
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
                    <h1>Sliders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Chart</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">Sliders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              {{-- <a href="{{ route('cmsSlidersAdd') }}">
                <button type="button" class="btn" style="border-radius: 2px 0px 0px 9px; background: black; color: white;">Add Sliders</button>
              </a> --}}
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th></th>
                        <th>Image</th>
                        <th>Judul Slide 1</th>
                        <th>Judul Slide 1 | ENG</th>
                        <th>Deskripsi Slide 1</th>
                        <th>Deskripsi Slide 1 | ENG</th>
                        <th>link 1 Button Name</th>
                        <th>link 1 Button Name | ENG</th>
                        <th>link 1</th>
                        <th>link 1 | ENG</th>
                        <th>Judul Slide 2</th>
                        <th>Judul Slide 2 | ENG</th>
                        <th>Deskripsi Slide 2</th>
                        <th>Deskripsi Slide 2 | ENG</th>
                        <th>link 2 Button Name</th>
                        <th>link 2 Button Name | ENG</th>
                        <th>link 2</th>
                        <th>link 2 | ENG</th>
                        <th>Judul Slide 3</th>
                        <th>Judul Slide 3 | ENG</th>
                        <th>Deskripsi Slide 3</th>
                        <th>Deskripsi Slide 3 | ENG</th>
                        <th>link 3 Button Name</th>
                        <th>link 3 Button Name | ENG</th>
                        <th>link 3</th>
                        <th>link 3 | ENG</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      @foreach($sliders as $s)
                      <tr>
                        <td>{{ $no }}</td>
                        <td><a href="{{ route('cmsSlidersEdit', $s->id_sliders) }}" type="button" class="btn btn-info btn-sm">Edit</a> | <a href="{{ route('cmsSlidersDelete', $s->id_sliders) }}" type="button" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><img width="144" src="{{ asset('img/sliders/'. $s->imageb) }}"></td>
                        <td>{{ $s->judul1 }}</td>
                        <td>{{ $s->judul1_eng }}</td>
                        <td>{!! $s->description1 !!}</td>
                        <td>{!! $s->description1_eng !!}</td>
                        <td>{{ $s->link1_name }}</td>
                        <td>{{ $s->link1_name_eng }}</td>
                        <td>{{ $s->link1 }}</td>
                        <td>{{ $s->link1_eng }}</td>
                        <td>{{ $s->judul2 }}</td>
                        <td>{{ $s->judul2_eng }}</td>
                        <td>{!! $s->description2 !!}</td>
                        <td>{!! $s->description2_eng !!}</td>
                        <td>{{ $s->link2_name }}</td>
                        <td>{{ $s->link2_name_eng }}</td>
                        <td>{{ $s->link2 }}</td>
                        <td>{{ $s->link2_eng }}</td>
                        <td>{{ $s->judul3 }}</td>
                        <td>{{ $s->judul3_eng }}</td>
                        <td>{!! $s->description3 !!}</td>
                        <td>{!! $s->description3_eng !!}</td>
                        <td>{{ $s->link3_name }}</td>
                        <td>{{ $s->link3_name_eng }}</td>
                        <td>{{ $s->link3 }}</td>
                        <td>{{ $s->link3_eng }}</td>
                      </tr>
                      <?php $no++ ?>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card -->
              </div>


              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>

          <!-- /.content -->
        </div>
@endsection
