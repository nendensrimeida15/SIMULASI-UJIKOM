@extends('Layouts.index')
@section('title', 'Data Buku')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">DATA BUKU</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a   href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Buku</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->

<!--div-->
<div class="col-xl-12">
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-2 mt-2">DATA BUKU</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <a href="#" class="btn btn-primary btn-sm">TAMBAH</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0 text-md-nowrap">
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
                    @foreach ($data as $buku)
                    <tbody>
                        <tr>
                            <th>{{ $buku->id }}</th>
                            <td>{{ $buku->Judul }}</td>
                            <td>{{ $buku->Penulis }}</td>
                            <td>{{ $buku->Penerbit }}</td>
                            <td>{{ $buku->TahunTerbit }}</td>
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
