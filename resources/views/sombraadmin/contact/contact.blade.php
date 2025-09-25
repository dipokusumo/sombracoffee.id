@extends('layouts.appsombraadmin')
@section('title', 'Article')
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
                   <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
                      <p>&ensp;
                        Halaman Utama
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item" style="background: #406b2f;">
                        <a href="{{ route('cmsSliders') }}" class="nav-link">
                            <i class="fas fa-stream"></i>
                          <p style="color: white; padding-left: 30px;">SLIDERS</p>
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
                     <li class="nav-item">
                       <a href="{{ route('cmsArticle') }}" class="nav-link">
                         <i class="fas fa-stream"></i>
                         <p style="color: white; padding-left: 30px;">Article</p>
                       </a>
                     </li>
                   </ul>
                 </li>

                 <li class="nav-header">Contact Email</li>
                  <li class="nav-item menu-is-opening menu-open">
                   <a href="#" class="nav-link">
                    <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
                     <p>&ensp;
                       Email
                       <i class="right fas fa-angle-left"></i>
                     </p>
                   </a>
                   <ul class="nav nav-treeview">
                     <li class="nav-item" style="background: linear-gradient(47deg, #fc912f, transparent)">
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
                    <h1 class="m-0">Email</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Chart</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">Email</li>
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
                    <h1>Email</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Chart</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">Email</li>
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
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Time</th>
                        <th> </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      @foreach($contact as $c)
                      <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->messagez }}</td>
                        <td><p>{{ $c->updated_at->format('j '). $c->updated_at->format('F') . $c->updated_at->format(' Y') }}</p></td>
                        <td><a href="{{ route('cmsContactDelete', $c->id_contact) }}" type="button" class="btn btn-danger btn-sm">Delete</a></td>
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
