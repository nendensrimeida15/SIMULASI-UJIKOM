@extends('Layouts.index')
@section('title', 'Data Peminjaman')
@section('content')
@yield('peminjaman')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">DATA PEMINJAMAN</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Peminjaman</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->

<!--div-->
<div class="row row-sm">
    <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
        <div class="card">

            <div class="pd-t-10 pd-s-10 pd-e-10 bg-white bd-b">
                <div class="row">
                    <div class="col-md-6">
                        <p>Data Peminjaman</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex my-auto btn-list justify-content-end">
                            <a href="#" class="btn btn-primary btn-sm "><i class="fa fa-plus me-2"></i>Peminjaman</a>
                            <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-upload me-2"></i>Import</a>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa fa-download me-2"></i>Export
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)" onclick="exportExcel()">Excel</a>
                                    <a class="dropdown-item" href="javascript:void(0)" onclick="exportPdf()">PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label mt-2 mb-0">Kategori Buku</label>
                    <select  class="form-control select">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                {{-- <table class="table table-bordered table-hover mb-0 text-md-nowrap mb-3"> --}}
                <table class="table table-bordered table-hover mb-3 text-md-nowrap width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pengguna</th>
                            <th>Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status Peminjaman</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <th>{{ $data->firstItem() + $loop->index }}</th>
                            <th>{{ $item->user->username }}</th>
                            <th>{{ $item->buku->judul }}</th>
                            <th>{{ $item->tanggal_peminjaman }}</th>
                            <th>{{ $item->tanggal_pengembalian }}</th>
                            <td>{{ $item->status_peminjaman }}</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="fe fe-edit"></i> EDIT</a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fe fe-trash"></i> DELETE</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!--/div-->
@endsection
