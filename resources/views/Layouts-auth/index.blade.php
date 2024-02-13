<!DOCTYPE html>
<html lang="en">
	<head>
        @include('Template.head')
	</head>
	<body class="main-body bg-light  login-img">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	<div class="page">

		<!-- main-signin-wrapper -->
		@yield('auth')
	</div>
		<!-- page closed -->
		<!-- /main-signin-wrapper -->

		<!--- JQuery min js --->
        @include('Template.script')

	</body>
</html>
