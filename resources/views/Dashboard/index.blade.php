@extends('Layouts.index')
@section('title', 'Dashboard')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div>
    <h4 class="content-title mb-2">Hi, welcome back!</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a   href="javascript:void(0);">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Project</li>
      </ol>
    </nav>
  </div>
</div>
<!-- /breadcrumb -->

<!-- main-content-body -->
<div class="main-content-body">

  <div class="row row-sm">
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="card overflow-hidden project-card">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="my-auto">
                          <div class="me-4 ht-60 wd-60 my-auto primary">
                            <a href="{{ route('data-buku') }}">
                                <img src="{{ asset('') }}images/book.png" width="100px" height="100px" class="ht-40 wd-60">
                            </a>
                          </div>
                      </div>
                      <div class="project-content">
                          <h6 class="card-title">Data Buku</h6>
                          <ul>
                              <li>
                                  <strong>Total</strong>
                                  <span>{{ $total_buku }}</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="card  overflow-hidden project-card">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="my-auto">
                          <div class="me-4 ht-60 wd-60 my-auto warning">
                          <img src="{{ asset('images/category.png') }}" width="100px" height="100px" class="ht-40 wd-60">
                          </div>
                      </div>
                      <div class="project-content">
                          <h6 class="card-title">Kategori Buku </h6>
                          <ul>
                              <li>
                                  <strong>Total</strong>
                                  <span></span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="card overflow-hidden project-card">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="my-auto">
                          <div class="me-4 ht-60 wd-60 my-auto danger">
                            <a href="{{ route('peminjaman') }}">
                          <img src="{{ asset('') }}images/listbook.png" width="100px" height="100px" class="ht-40 wd-60">
                            </a>
                          </div>
                      </div>
                      <div class="project-content">
                          <h6 class="card-title">Data Peminjam</h6>
                          <ul>
                              <li>
                                  <strong>Total</strong>
                                  <span>{{ $total_peminjaman }}</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="card overflow-hidden project-card">
              <div class="card-body">
                  <div class="d-flex">
                      <div class="my-auto">
                          <div class="me-4 ht-60 wd-60 my-auto success">
                            <a href="{{ route('data-pengguna') }}">
                          <img src="{{ asset('') }}images/user.png" width="100px" height="100px" class="ht-40 wd-60">
                            </a>
                          </div>
                      </div>
                      <div class="project-content">
                          <h6 class="card-title">Data Pengguna</h6>
                          <ul>
                              <li>
                                  <strong>Total</strong>
                                  <span>{{  $total_user }}</span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- /row -->

@endsection
