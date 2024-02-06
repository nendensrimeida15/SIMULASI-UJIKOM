@extends('Layouts.index')
@section('title', 'Form Input Peminjaman')
@section('peminjaman')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">FORM INPUT PEMINJAMAN</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('data-buku')}}">Data Buku</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Form Input Peminjaman</li>
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->

@endsection
