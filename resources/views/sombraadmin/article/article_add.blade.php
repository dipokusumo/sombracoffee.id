@extends('layouts.appsombraadmin')
@section('title', 'Article')
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
                        <a href="{{ route('cmsProductG') }}" class="nav-link">
                          <i class="fas fa-stream"></i>
                          <p style="color: white; padding-left: 30px;">GREENBEAN</p>
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
                  <li class="nav-item menu-is-opening menu-open">
                   <a href="#" class="nav-link">
                    <i><img src="{{ asset('image/icon/ikon-sombra.png') }}" style="filter: brightness(0) invert(1); width: 25px;"></i>
                     <p>&ensp;
                       Article
                       <i class="right fas fa-angle-left"></i>
                     </p>
                   </a>
                   <ul class="nav nav-treeview">
                     <li class="nav-item" style="background: linear-gradient(47deg, #fc912f, transparent)">
                       <a href="{{ route('cmsArticle') }}" class="nav-link">
                         <i class="fas fa-stream"></i>
                         <p style="color: white; padding-left: 30px;">Article</p>
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
                    <h1 class="m-0">Article</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Chart</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">Article</li>
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
                    <h1>Article</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Chart</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">Article</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('cmsArticleStore') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-sm-12">
            <a href="{{ route('cmsArticle') }}" class="btn btn-warning btn-sm" style="margin-bottom: 5px; border-radius: 20px 1px 10px;">
              <i class="fas fa-arrow-circle-left" style="position: relative; right: 3%; top: 1px;"></i>
              back
            </a>
            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-sm-12">
                    <label>Image</label><br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>judul</label>
                      <input type="text" class="form-control" placeholder="" name="judul" value="{{ old('judul') }}" required>
                    </div>
                  </div>

                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>judul_eng</label>
                      <input type="text" class="form-control" placeholder="" name="judul_eng" value="{{ old('judul_eng') }}" required>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <label>description_sub</label>
                    <textarea id="description_sub" name="description_sub" rows="7">
                      {{ old('description_sub') }}
                    </textarea>
                  </div>

                  <div class="col-md-6">
                    <label>	description_sub_eng | ENG</label>
                    <textarea id="description_sub_eng" name="description_sub_eng" rows="7">
                      {{ old('description_sub_eng') }}
                    </textarea>
                  </div>

                  <div class="col-md-6">
                    <label>Deskripsi</label>
                    <textarea id="description" name="description" rows="7">
                      {{ old('description') }}
                    </textarea>
                  </div>
                  <div class="col-md-6">
                    <label>Deskripsi | ENG</label>
                    <textarea id="description_eng" name="description_eng" rows="7">
                      {{ old('description_eng') }}
                    </textarea>
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
    $('#description_sub').summernote({
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['insert', ['link']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ]
  });

  $('#description_sub_eng').summernote({
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['insert', ['link']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ]
  });

  $('#description').summernote({
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['insert', ['link']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ]
  });

  $('#description_eng').summernote({
        toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
    ['insert', ['link']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ]
  });

  $('#image').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });
</script>
@endsection
