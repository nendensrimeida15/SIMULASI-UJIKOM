{{-- //////////////////////////////////////////////////////////// --}}
{{-- ///////////////// CREATED BY SANDY RIFALDI ///////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
@extends('Layouts.index')
@section('title', 'Form Input Peminjaman')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">FORM INPUT PEMINJAMAN</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('peminjaman')}}"> Data Peminjaman</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Form Input Peminjaman</li>
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
                    Form Input Peminjaman
                </div>
                <div class="pd-30 pd-sm-40 bg-gray-100">
                    <form action="{{ route('store-peminjaman') }}" method="post">
                        @csrf
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">PENGGUNA</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <select class="form-control select2" name="user_id" style="width: 100%">
                                    <option value="{{ Session::get('user_id') }}"></option>
                                    <option disabled value>Pilih Pengguna</option>
                                    @foreach ($users as $item)
                                    {{-- <option value="{{ $item->id }}">{{ $item->username }}</option> --}}
                                    <option value="{{ $item->id }}" @if(Session::get('user_id') == $item->id) selected @endif>{{ $item->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">BUKU</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <select class="form-control select2" name="buku_id" style="width: 100%">
                                    <option value="{{ Session::get('buku_id') }}"></option>
                                    <option disabled value>Pilih Buku</option>
                                    @foreach ($books as $item)
                                    {{-- <option value="{{ $item->id }}">{{ $item->judul }}</option> --}}
                                    <option value="{{ $item->id }}" @if(Session::get('buku_id') == $item->id) selected @endif>{{ $item->judul }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">TANGGAL PEMINJAMAN</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="date" name="tanggal_peminjaman" value="{{ Session::get('tanggal_peminjaman') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">TANGGAL PENGEMBALIAN</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="date" name="tanggal_pengembalian" value="{{ Session::get('tanggal_pengembalian') }}">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-3">
                                <label class="form-label mg-b-0">STATUS PEMINJAMAN</label>
                            </div>
                            <div class="col-md-9 mg-t-5 mg-md-t-0">
                                <input class="form-control" placeholder="" type="text" name="status_peminjaman" value="{{ Session::get('status_peminjaman') }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-30 mg-e-5 mg-t-5">Save</button>
                        <a href="{{ route('peminjaman') }}" class="btn btn-secondary pd-x-30 mg-t-5">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /row -->
@endsection
