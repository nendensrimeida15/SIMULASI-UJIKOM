{{-- //////////////////////////////////////////////////////////// --}}
{{-- ///////////////// CREATED BY SANDY RIFALDI ///////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
@extends('Layouts.index')
@section('title', 'Form Input Pengguna')
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">FORM INPUT PENGGUNA</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('data-pengguna')}}"> Data Pengguna</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Form Input Pengguna</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->

<!-- row -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Form Input Pengguna
                </div>
                <div class="pd-30 pd-sm-40 bg-gray-100">
                    <form action="{{ route('store-pengguna') }}" method="post">
                        @csrf
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">USERNAME</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" name="username" value="{{ Session::get('username') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">EMAIL</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="email" name="email" value="{{ Session::get('email') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">PASSWORD</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="password" name="password" value="{{ Session::get('password') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">NAMA LENGKAP</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" name="nama_lengkap" value="{{ Session::get('nama_lengkap') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">ALAMAT</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <textarea class="form-control" placeholder="" type="text" name="alamat">{{ Session::get('alamat') }}</textarea >
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">ROLE </label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <select class="form-control select2" name="role">
                                    <option value="{{ Session::get('role') }}">{{ Session::get('role') }}</option>
                                    <option disabled value>Pilih Role</option>
                                    <option value="administrator">administrator</option>
                                    <option value="petugas">petugas</option>
                                    <option value="peminjam">peminjam</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-30 mg-e-5 mg-t-5">Save</button>
                        <a href="{{ route('data-pengguna') }}" class="btn btn-secondary pd-x-30 mg-t-5">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /row -->
@endsection
