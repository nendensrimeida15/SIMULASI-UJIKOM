@extends('Layouts-auth.index')
@section('title', 'Registar')
@section('auth')

<!-- main-signin-wrapper -->
<div class="my-auto page page-h">
	<div class="main-signin-wrapper">
		<div class="main-card-signin d-md-flex">
		<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
			<div class="my-auto authentication-pages">
				<div>
				<img src="{{ asset('images/buku.png') }}" width="100%" class=" m-0 mb-6" alt="logo">
					<h5 class="mb-4">"Hal yang sering membutuhkan lebih banyak keberanian adalah untuk berani melakukan yang benar, daripada takut berbuat salah."</h5>
					<p class="mb-5"></p>
					<!-- <a href="index.html" class="btn btn-success">Learn More</a> -->
					<p class="mb-6">By:Cica Purnamasari</p>
				</div>
			</div>  
		</div>
		<div class="sign-up-body wd-md-50p">
		@include('Komponen.pesan')

			<div class="main-signin-header">
				<h2>Registar From</h2>
				<h4>fill in completely</h4>
				<form action="{{ route('store-registar') }}" method="post">
					@csrf
					<div class="form-group">
						<label>  Username</label> 
						<input name="username" class="form-control" placeholder="Enter your username" type="text" value="{{  Session::get('username') }}">
					</div>
					<div class="form-group">
						<label>Email</label> <input name="email" class="form-control" placeholder="Enter your email" type="email" value="{{  Session::get('email') }}">
					</div>
					<div class="form-group">
						<label>Password</label> <input name="password" class="form-control" placeholder="Enter your password" type="password" value="{{  Session::get('password') }}">
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label> <input name="nama_lengkap" class="form-control" placeholder="Enter your nama lengkap" type="text" value="{{  Session::get('nama_lengkap') }}">
					</div>
					<div class="form-group">
						<label>Alamat</label> <textarea name="alamat" class="form-control" placeholder="Enter your alamat" type="text">{{  Session::get('alamat') }}</textarea value="">
					</div>
					<div class="form-group">
						<label>Namerole</label>
						<select class="form-control select2" name="role">
                            <option value="{{ Session::get('role') }}">{{ Session::get('role') }}</option>
                            <option disabled value>Pilih Role</option>
                            <option value="administrator">administrator</option>
                            <option value="petugas">petugas</option>
                            <option value="peminjam">peminjam</option>
                         </select>
					</div>
					<button type="submit" class="btn btn-primary pd-x-30 mg-e-5 mg-t-5">Save</button>
                    <a href="{{ route('login') }}" class="btn btn-secondary pd-x-30 mg-t-5">Back</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- page closed -->
@endsection