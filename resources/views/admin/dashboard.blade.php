@extends('admin.layouts')

@section('content-admin')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

      
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Artikel</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">400 Artikel</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Staf</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">215 Users</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Foto</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">50 Videos</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Berita Terbaru</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Cerita Terbaru</h1>
      </div>

    {{-- Card --}}
    <div class="row">
        <div class="col-lg-6 mb-4">

            <div class="card shadow mb-4">
                <div class="card-header bg-dark py-3">
                  <h6 class="m-0 font-weight-bold text-white">Cerita dari Faris Rizqilail</h6>
                </div>
                <div class="card-body">
                  The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!
                </div>
              </div>
              

              <div class="card shadow mb-4">
                <div class="card-header bg-dark py-3">
                  <h6 class="m-0 font-weight-bold text-white">Cerita dari Krisna Juan</h6>
                </div>
                <div class="card-body">
                  The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!
                </div>
              </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header bg-primary py-3">
                  <h6 class="m-0 font-weight-bold text-white">Data Terbaru</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('sb-admin/img/undraw_posting_photo.svg')}}" alt="">
                  </div>
                  <p>Data terbaru dari teman kita yang ingin menceritakan tentang apa yang diarasakan. Ayo dengarkan mereka.</a>
                </div>
              </div>
        </div>
    </div>


</div>
@endsection