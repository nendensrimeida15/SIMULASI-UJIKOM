<!DOCTYPE html>
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
