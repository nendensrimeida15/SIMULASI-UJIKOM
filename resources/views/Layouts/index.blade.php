{{-- //////////////////////////////////////////////////////////// --}}
{{-- ///////////////// CREATED BY SANDY RIFALDI ///////////////// --}}
{{-- //////////////////////////////////////////////////////////// --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

        @include('Template.head')

	</head>

	<body class="main-body app sidebar-mini ltr">

        <!-- Switcher -->
        @include('Template.switcher')
	    <!-- End Switcher -->

		<!-- Loader -->
        <div id="global-loader">
            <img src="{{ asset('assets/img/loaders/loader-4.svg') }}" class="loader-img" alt="Loader">
        </div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">

			<!-- main-header -->
			@include('Template.topbar')
			<!-- /main-header -->

			<!-- main-sidebar -->
			@include('Template.sidebar')
			<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->

				<!-- /breadcrumb -->

				<!-- row -->
				<div class="row">
                    @include('Komponen.pesan')
                    @yield('content')
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!--Sidebar-right-->
		@include('Template.rightbar')
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		<div class="main-footer ht-45">
            <div class="container-fluid pd-t-0-f ht-100p">
                <span> Copyright © 2022 <a   href="javascript:void(0);" class="text-primary">Azira</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a   href="javascript:void(0);"> Nenden </a> All rights reserved.</span>
            </div>
        </div>
		<!-- Footer closed -->
	    </div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		@include('Template.script')

	</body>
</html>
