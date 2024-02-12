{{-- //////////////////////////////////////////////////////////// --}}
{{-- ///////////////// CREATED BY SANDY RIFALDI ///////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
@extends('Layouts.index')
@section('title', 'Data Buku')
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">DATA BUKU</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Buku</li>
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
                        <p>Data Buku</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex my-auto btn-list justify-content-end">
                            <a href="{{ route('create-data-buku') }}" class="btn btn-primary btn-sm" title="Tambah data buku"><i class="fa fa-plus me-2"></i>Tambah</a>
                            <a href="#" class="btn btn-secondary btn-sm" title="Import data buku"><i class="fa fa-upload me-2"></i>Import</a>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown" title="Export data buku">
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
            <div class="table-responsive" style="overflow-x: auto; max-width: 100%;">
                <table class="table table-bordered table-hover mb-3 text-md-nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahnun Terbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <td>{{ $data->firstItem() + $loop->index }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td>
                                <a href="{{ route('edit-data-buku', $item) }}" class="btn btn-info btn-sm" title="Edit"><i class="fe fe-edit"></i></a>
                                <a href="{{ route('delete-data-buku', $item) }}" class="btn btn-danger btn-sm" title="Hapus"><i class="fe fe-trash"></i></a>
                                <a href="#" class="btn btn-warning btn-sm" title="Koleksi pribadi"><i class="fe fe-bookmark"></i></a>
                                <a href="#" class="btn btn-primary btn-sm" title="Ulasan"><i class="fe fe-message-square"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
<!--/div-->
@endsection
