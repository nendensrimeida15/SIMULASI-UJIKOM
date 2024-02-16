<!DOCTYPE html>
<html lang="en">
	<head>
		@include('templat.head')
	</head>
	<body class="main-body bg-light login-img">

	<!-- Loader -->
	<div id="global-loader">
		<img src=".../asset/img/loaders/loader-4.svg" class="loader-img" alt="loader">
	</div>
	<!-- /loader -->

	<!-- page -->
	<div class="page">

	<!--main-signin-wrapper -->
	@yield('login')
	</div>
	<!--page closed-->
	<!--/main-signin-wrapper --> 

	<!--JQuery min js --> 
	@include('Template.script')
	</body>
</html>