<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Azira -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!--- Favicon --->
		<link rel="icon" href="../assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="../assets/css/icons.css" rel="stylesheet">

		<!--- Style css --->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/plugins.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>
	<body class="main-body bg-light  login-img">

		<!-- Loader -->
		<div id="global-loader"></div>
		<!-- /Loader -->

		<!-- page -->
	<div class="page">
		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="wd-md-35p login d-none d-md-block page-signin-style p-4 text-white" >
					<div class="my-auto authentication-pages">

					
						<h2 style="text-align:center">Register</h2>					
						<h4>Silahkan Isi Dengan lengkap</h4>
						<form action="/register" method="get"> 
						<div class="form-group">
								<label>Nama</label><input class="form-control" placeholder="Enter your Name" type="text" value="{{Session::get('name')}}">
							</div>  
							<div class="form-group">
								<label>Nama Lengkap</label><input class="form-control" placeholder="Enter your Nama lengkap" type="text" value="{{Session::get('nama lengkap')}}">
							</div>    
							<div class="form-group">
								<label>Alamat</label><input class="form-control" placeholder="Enter your Alamat" type="text" value="{{Session::get('Alamat')}}">
							</div>           
							<div class="form-group">
								<label>Email</label><input class="form-control" placeholder="Enter your email" type="text" value="{{Session::get('email')}}">
							</div>
                      
							<div class="form-group">
								<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" value="">
							</div>
							<div class="form-group">
								<label>Hak Akses</label>
                                         <select name="namerole" id="f1" class="form-control select2" onchange="">
                                           	<option value="">=== semua ===</option>
                                            <option value="administrator" @if(request()->get('f1')==1) selected @endif>administrator</option>
                                            <option value="petugas" @if(request()->get('f1')==2) selected @endif>petugas</option>
											<option value="peminjam" @if(request()->get('f1')==2) selected @endif>peminjam</option>
                                        </select>
									</div>
									<button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5">
                            <i class='fa fa-save'></i> Simpan</button>
							</div>
						</form>
					</div>
		<!-- page closed -->
		<!-- /main-signin-wrapper -->

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="../assets/plugins/ionicons/ionicons.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>