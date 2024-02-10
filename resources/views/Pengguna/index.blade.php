{{-- ////////////////////////////////////////////////////////////////
/////////////////// CREATED BY SANDY RIFALDI ////////////////////////
//////////////////////////////////////////////////////////////// --}}
@extends('Layouts.index')
@section('title', 'Data Pengguna')
@section('content')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">DATA PENGGUNA</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Data Pengguna</li>
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
                        <p>Data Pengguna</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex my-auto btn-list justify-content-end">
                            <a href="{{ route('create-pengguna') }}" class="btn btn-primary btn-sm "><i class="fa fa-plus me-2"></i>Tambah</a>
                            <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-upload me-2"></i>Import</a>
                            {{-- <a href="#" class="btn btn-success btn-sm"><i class="fe fe-download"></i>Tambah</a> --}}
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
                    <label class="form-label mt-2 mb-0">Kategori Pengguna</label>
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <th>{{ $data->firstItem() + $loop->index }}</th>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                                <a href="{{ route('edit-pengguna', $item) }}" class="btn btn-info btn-sm"><i class="fe fe-edit"></i> EDIT</a>
                                <a href="{{ route('delete-pengguna', $item) }}" class="btn btn-danger btn-sm"><i class="fe fe-trash"></i> DELETE</a>
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

<script>
    $(function() {
        // formelement
        $('.select2').select2({ width: 'resolve' });

        // init datatable.
        $('#tbl_list').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

    });

    function reload_table(){
        var f1 =  $('#f1').val();
        window.location.href="data_barang?f1="+f1;
    }
    function exportExcel() {
        var f1 =  $('#f1').val();
        var s = $('.whatever').val();
        window.open(
        "data_barang/export_excel?s="+s+"&f1="+f1,
            '_blank' // <- This is what makes it open in a new window.
        );
    }
    function exportPdf() {
        var f1 =  $('#f1').val();
        var s = $('.whatever').val();
        window.open(
        "data_barang/export_pdf?s="+s+"&f1="+f1,
            '_blank' // <- This is what makes it open in a new window.
        );
    }
</script>
@endsection
