@extends('Layouts.index')
@section('title', 'Form Edit Buku')
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">FORM EDIT BUKU</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('data-buku')}}">Data Buku</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Form Edit Buku</li>
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
                    Form Edit Buku
                </div>
                {{-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                <div class="pd-30 pd-sm-40 bg-gray-100">
                    <form method="post" action="{{ route('update', $data->id) }}">
                        @csrf
                        @method('put')
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">JUDUL</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" name="Judul" value="{{ $data->Judul }}" required>
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">PENULIS</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" name="Penulis" value="{{ $data->Penulis }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">PENERBIT</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" name="Penerbit" value="{{ $data->Penerbit }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">TAHTER</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" name="TahunTerbit" value="{{ $data->TahunTerbit }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-30 mg-e-5 mg-t-5">Update</button>
                        <button href="{{ route('data-buku') }}" class="btn btn-dark pd-x-30 mg-t-5">Kembali</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /row -->
@endsection
