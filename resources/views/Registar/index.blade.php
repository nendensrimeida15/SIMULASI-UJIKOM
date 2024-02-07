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
							<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
							<!-- <a href="index.html" class="btn btn-success">Learn More</a> -->
							<p class="mb-5">By:Cica</p>
						</div>
					</div>
				</div>
				<div class="sign-up-body wd-md-50p">
					<div class="main-signin-header">
						<h2>Welcome back!</h2>
						<h4>fill in completely</h4>
						<form action="/login">
							<div class="form-group">
								<label>Username</label> <input class="form-control" placeholder="Enter your username" type="text">
							</div>
							<div class="form-group">
								<label>Email</label> <input class="form-control" placeholder="Enter your email" type="text">
							</div>
							<div class="form-group">
								<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password">
							</div>
							<div class="form-group">
								<label>Nama Lengkap</label> <input class="form-control" placeholder="Enter your nama lengkap" type="text">
							</div>
							<div class="form-group">
								<label>Alamat</label> <textarea class="form-control" placeholder="Enter your alamat" type="text"></textarea>
							</div>
							<div class="form-group">
								<label>Hak Akses</label>
                                         <select name="namerole" id="f1" class="form-control select2" onchange="">
                                           	<option value="">=== pilih ===</option>
                                            <option value="administrator" @if(request()->get('f1')==1) selected @endif>administrator</option>
                                            <option value="petugas" @if(request()->get('f1')==2) selected @endif>petugas</option>
											<option value="peminjam" @if(request()->get('f1')==2) selected @endif>peminjam</option>
                                        </select>
									</div>
							</div>
							<button class="btn btn-primary btn-block">Create Account</button>
						</form>
					</div>
		<!-- page closed -->
@endsection