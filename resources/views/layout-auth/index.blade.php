<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

        @include('Template.head')

	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
        <div id="global-loader">
            <img src="{{ asset('assets/img/loaders/loader-4.svg') }}" class="loader-img" alt="Loader">
        </div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">

            <!-- row -->
            <div class="row">
                @yield('login')
            </div>
            <!-- row closed -->

       </div>
		<!-- page closed -->

		@include('Template.script')

	</body>
</html>
=======
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
		@yield('login')
	</div>
		<!-- page closed -->
		<!-- /main-signin-wrapper -->

		<!--- JQuery min js --->
        @include('Template.script')

	</body>
</html>
>>>>>>> 05ca72caf3eacdaf840128d3f0631d4c89d0b21f
