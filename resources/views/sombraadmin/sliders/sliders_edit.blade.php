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
    <!-- /.content-header -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color: black">Chart</a></li>
                        <li class="breadcrumb-item active" style="color: #a38b0c">Add Sliders</li>
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
                        <li class="breadcrumb-item active" style="color: #a38b0c">Add Sliders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @foreach($sliders as $s)
        <form action="{{ route('cmsSlidersUpdate') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id_sliders" value="{{ $s->id_sliders }}">
          <div class="col-sm-12">
            <a href="{{ route('cmsSliders') }}" class="btn btn-warning btn-sm" style="margin-bottom: 5px; border-radius: 20px 1px 10px;">
              <i class="fas fa-arrow-circle-left" style="position: relative; right: 3%; top: 1px;"></i>
              back
            </a>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <label>Image Sliders</label><br>
                    <div class="input-group">
                        <img src="{{ asset('img/sliders/' . $s->imageb) }}" id="imageb" class="img-thumbnail" style="width: 200px;">
                        <div class="custom-file">
                        <input type="file" name="imageb" accept="image/*" class="custom-file-input" id="imageb" onchange="promoImage(event)">
                        <label class="custom-file-label" for="imageb">{{ old('imageb') ? old('imageb') : $s->imageb }}</label>
                        <input type="hidden" name="imagebs" value="{{ $s->imageb }}">
                        </div>
                    </div>
                    <span style="color:red;">*</span> <span style="font-size: 12px;"><i>Req Image <b>1366 x 768</b></i></span>
                  </div>
                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Judul Slide 1</label>
                      <input type="text" class="form-control" placeholder="" name="judul1" value="{{ old('judul1') ? old('judul1') : $s->judul1 }}">
                    </div>
                  </div>
                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Judul Slide 1 | ENG</label>
                      <input type="text" class="form-control" placeholder="" name="judul1_eng" value="{{ old('judul1_eng') ? old('judul1_eng') : $s->judul1_eng }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label>Deskripsi Slide 1</label>
                    <textarea id="description1" name="description1" rows="7">
                        {{ old('description1') ? old('description1') : $s->description1 }}
                    </textarea>
                  </div>
                  <div class="col-md-6">
                    <label>Deskripsi Slide 1 | ENG</label>
                    <textarea id="description1_eng" name="description1_eng" rows="7">
                        {{ old('description1_eng') ? old('description1_eng') : $s->description1_eng }}
                    </textarea>
                  </div>
                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Link 1 Button Name</label>
                      <input type="text" class="form-control" placeholder="" name="link1_name" value="{{ old('link1_name') ? old('link1_name') : $s->link1_name }}" required>
                    </div>
                  </div>
                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Link 1 Button Name Eng</label>
                      <input type="text" class="form-control" placeholder="" name="link1_name_eng" value="{{ old('link1_name_eng') ? old('link1_name_eng') : $s->link1_name_eng }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 1</label>
                      <input type="text" class="form-control" placeholder="" name="link1" value="{{ old('link1') ? old('link1') : $s->link1 }}">
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 1 | ENG</label>
                      <input type="text" class="form-control" placeholder="" name="link1_eng" value="{{ old('link1_eng') ? old('link1_eng') : $s->link1_eng }}">
                    </div>
                  </div>
                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Judul 2</label>
                      <input type="text" class="form-control" placeholder="" name="judul2" value="{{ old('judul2') ? old('judul2') : $s->judul2 }}">
                    </div>
                  </div>
                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Judul 2 | ENG</label>
                      <input type="text" class="form-control" placeholder="" name="judul2_eng" value="{{ old('judul2_eng') ? old('judul2_eng') : $s->judul2_eng }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label>Description Slide 2</label>
                    <textarea  id="description2" name="description2" rows="7">
                      {{ old('description2') ? old('description2') : $s->description2 }}
                    </textarea>
                  </div>
                  <div class="col-md-6">
                    <label>Description Slide 2 | ENG</label>
                    <textarea id="description2_eng" name="description2_eng" rows="7">
                      {{ old('description2_eng') ? old('description2_eng') : $s->description2_eng }}
                    </textarea>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 2 Button Name</label>
                      <input type="text" class="form-control" placeholder="" name="link2_name" value="{{ old('link2_name') ? old('link2_name') : $s->link2_name }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 2 Button Name Eng</label>
                      <input type="text" class="form-control" placeholder="" name="link2_name_eng" value="{{ old('link2_name_eng') ? old('link2_name_eng') : $s->link2_name_eng }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 2</label>
                      <input type="text" class="form-control" placeholder="" name="link2" value="{{ old('link2') ? old('link2') : $s->link2 }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 2 | ENG</label>
                      <input type="text" class="form-control" placeholder="" name="link2_eng" value="{{ old('link2_eng') ? old('link2_eng') : $s->link2_eng }}" required>
                    </div>
                  </div>

                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Judul 3</label>
                      <input type="text" class="form-control" placeholder="" name="judul3" value="{{ old('judul3') ? old('judul3') : $s->judul3 }}">
                    </div>
                  </div>
                  <div class="col-sm-6" style="margin-top: 10px">
                    <div class="form-group">
                      <label>Judul 3 | ENG</label>
                      <input type="text" class="form-control" placeholder="" name="judul3_eng" value="{{ old('judul3_eng') ? old('judul3_eng') : $s->judul3_eng }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label>Description Slide 3</label>
                    <textarea  id="description3" name="description3" rows="7">
                      {{ old('description3') ? old('description3') : $s->description3 }}
                    </textarea>
                  </div>
                  <div class="col-md-6">
                    <label>Description Slide 3 | ENG</label>
                    <textarea id="description3_eng" name="description3_eng" rows="7">
                      {{ old('description2_eng') ? old('description3_eng') : $s->description3_eng }}
                    </textarea>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 3 Button Name</label>
                      <input type="text" class="form-control" placeholder="" name="link3_name" value="{{ old('link3_name') ? old('link3_name') : $s->link3_name }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 3 Button Name Eng</label>
                      <input type="text" class="form-control" placeholder="" name="link3_name_eng" value="{{ old('link3_name_eng') ? old('link3_name_eng') : $s->link3_name_eng }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 3</label>
                      <input type="text" class="form-control" placeholder="" name="link3" value="{{ old('link3') ? old('link3') : $s->link3 }}" required>
                    </div>
                  </div>
                  <div class="col-sm-12" style="margin-top: 10px">
                    <div class="form-group">
                      <label>link 3 | ENG</label>
                      <input type="text" class="form-control" placeholder="" name="link3_eng" value="{{ old('link3_eng') ? old('link3_eng') : $s->link3_eng }}" required>
                    </div>
                  </div>

                  <div class="col-sm-12" style="margin-top: 50px">

                    <div class="float-right" >
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          @endforeach
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

    $('#description1').summernote({
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

  $('#description1_eng').summernote({
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

  $('#description2').summernote({
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

  $('#description2_eng').summernote({
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

  $('#description3').summernote({
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

  $('#description3_eng').summernote({
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

  $('#imageBack').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });

    var promoImage = function(event) {
      var outputourBrands = document.getElementById('imageBack');
      outputourBrands.src = URL.createObjectURL(event.target.files[0]);
      outputourBrands.onload = function() {
      URL.revokeObjectURL(outputourBrands.src) // free memory
    }
};

</script>
@endsection
