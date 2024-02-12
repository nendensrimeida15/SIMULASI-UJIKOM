@extends('Layouts-auth.index')
@section('title', 'Registar')
@section('login')

<!-- main-signin-wrapper -->
<div class="my-auto page page-h">
	<div class="main-signin-wrapper">
		<div class="main-card-signin d-md-flex">
		<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
			<div class="my-auto authentication-pages">
				<div>
					<img src="../assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
					<h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
					<p class="mb-5">hello</p>
					<!-- <a href="index.html" class="btn btn-success">Learn More</a> -->
					<p class="mb-6">By:Cica</p>
				</div>
			</div>  
		</div>
		<div class="sign-up-body wd-md-50p">
			<div class="main-signin-header">
				<h2>Welcome back!</h2>
				<h4>fill in completely</h4>
				<form action="{{ route('registar') }}" method="post">
					@csrf
					<div class="form-group">
						<label>Username</label> 
						<input name="username" class="form-control" placeholder="Enter your username" type="text" value="{{  Session::get('username') }}">
					</div>
					<div class="form-group">
						<label>Email</label> <input name="email" class="form-control" placeholder="Enter your email" type="text" value="{{  Session::get('email') }}">
					</div>
					<div class="form-group">
						<label>Password</label> <input name="password" class="form-control" placeholder="Enter your password" type="password" value="{{  Session::get('password') }}">
					</div>
					<div class="form-group">
						<label>Nama Lengkap</label> <input name="nama_lengkap" class="form-control" placeholder="Enter your nama lengkap" type="text" value="{{  Session::get('nama_lengkap') }}">
					</div>
					<div class="form-group">
						<label>Alamat</label> <textarea nama="alamat" class="form-control" placeholder="Enter your alamat" type="text"></textarea value="{{  Session::get('alamat') }}">
					</div>
					<div class="form-group">
						<label>Namerole</label>
									<select name="namerole" id="f1"  class="form-control select2" onchange="" value="{{  Session::get('namerole') }}">
									<option value=""></option>
									<option value="administrator">administrator</option>
									<option value="petugas">petugas</option>
									<option value="peminjam">peminjam</option>
								</select>
							</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Create Account</button>
				</form>
			</div>
<!-- page closed -->
@endsection