@extends('layouts.appsombraadmin')
@section('title', 'Sliders Roastery')
@section('css')
<style>
  .info{
    margin-top: 10px;
  }

  .note-editor.note-airframe .note-editing-area .note-editable, .note-editor.note-frame .note-editing-area .note-editable{
    padding-bottom: 60px;
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
                   <li class="nav-item menu-is-opening menu-open">
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

                          <li class="nav-item menu-is-opening menu-open" style="background: linear-gradient(47deg, #fc912f, transparent)">
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
    <!-- /.content-header -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Product Green Bean</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Produk</a></li>
                        <li class="breadcrumb-item"><a style="color: black">Sliders</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">ROASTERY</li>
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
                    <h1>Edit Product Green Bean</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Produk</a></li>
                        <li class="breadcrumb-item"><a style="color: black">Sliders</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">ROASTERY</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @foreach($slidersR as $s)
        <form action="{{ route('cmsSlidersRoasteryUpdate') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{ $s->id  }}">
          <div class="col-sm-12">
            <a href="{{ route('cmsSlidersRoastery') }}" class="btn btn-warning btn-sm" style="margin-bottom: 5px; border-radius: 20px 1px 10px;">
              <i class="fas fa-arrow-circle-left" style="position: relative; right: 3%; top: 1px;"></i>
              back
            </a>
            <div class="card">
              <div class="card-body">
                <div class="row">

                    <div class="col-sm-12">
                        <label>Image Sliders</label><br>
                        <div class="input-group">
                            <img src="{{ asset('img/slidersRoastery/' . $s->imagesr) }}" id="imagesr" class="img-thumbnail" style="width: 200px;">
                            <div class="custom-file">
                            <input type="file" name="imagesr" accept="image/*" class="custom-file-input" id="imagesr" onchange="promoImage(event)">
                            <label class="custom-file-label" id="imagesr" for="imagesr">{{ old('imagesr') ? old('imagesr') : $s->imagesr }}</label>
                            <input type="hidden" name="imagesrs" value="{{ $s->imagesr }}">
                            </div>
                        </div>
                        <span style="color:red;">*</span> <span style="font-size: 12px;"><i>Req Image <b>3024 x 4032</b></i></span>
                      </div>


                  <div class="col-sm-12" style="margin-top: 50px">

                    <div class="float-right" >
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </form>
          @endforeach

        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>

@endsection

@section('script')
<script>
    $('#imagesr').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })

  var promoImage = function(event) {
      var outputourBrands = document.getElementById('imagesr');
      outputourBrands.src = URL.createObjectURL(event.target.files[0]);
      outputourBrands.onload = function() {
      URL.revokeObjectURL(outputourBrands.src) // free memory
    }
};
</script>
@endsection
