@extends('Layouts.index')
@section('title', 'Form Input Buku')
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">FORM INPUT BUKU</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a   href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Form Input Buku</li>
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
                    Form Input Buku
                </div>
                {{-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> --}}
                <div class="pd-30 pd-sm-40 bg-gray-100">
                    <form method="post" action="{{ route('store') }}">
                        @csrf
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label for="judul" class="form-label mg-b-0">Judul</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input id="judul" name="Judul" class="form-control" placeholder="Enter your title"
                                type="text" value="{{ Session::get('Judul') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label for="penulis" class="form-label mg-b-0">Penulis</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input id="penulis" name="Penulis" class="form-control" placeholder="Enter your writer"
                                type="text" value="{{ Session::get('Penulis') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label for="penerbit" class="form-label mg-b-0">Penerbit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input id="penerbit" name="Penerbit" class="form-control" placeholder="Enter your publisher"
                                type="text" value="{{ Session::get('Penerbit') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label for="tahun_terbit" class="form-label mg-b-0">Tahun Terbit</label>
                            </div>
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input id="tahun_terbit" name="TahunTerbit" class="form-control" placeholder="Enter your year published"
                                type="number" value="{{ Session::get('TahunTerbit') }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-30 mg-e-5 mg-t-5">Save</button>
                        <button href="{{ route('data-buku') }}" class="btn btn-dark pd-x-30 mg-t-5">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /row -->
@endsection
