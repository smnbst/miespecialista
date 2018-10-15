@extends('templates.default') 
@section('content') 
@include('partials.color-switcher')

<div class="container-fluid">
    <div class="row">

        <!-- Main Sidebar -->
        @include('partials.vertical_menu')
        <!-- End Main Sidebar -->

        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

            <!-- Main Navbar -->
            @include('partials.horizontal_menu')
            <!-- / .main-navbar -->

            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                        <span class="text-uppercase page-subtitle">Dashboard</span>
                        <h3 class="page-title">Blog Overview</h3>
                    </div>
                </div>
                <!-- End Page Header -->
                <!-- Small Stats Blocks -->
                <div class="row">
                    @include('partials.block1')
                </div>

                <!-- End Small Stats Blocks -->
                <div class="row">

                    <!-- Users Stats -->
                    @include('partials.block2')
                    <!-- End Users Stats -->

                    <!-- Users By Device Stats -->
                    @include('partials.block3')
                    <!-- End Users By Device Stats -->

                    <!-- New Draft Component -->
                    @include('partials.block4')
                    <!-- End New Draft Component -->

                    <!-- Discussions Component -->
                    @include('partials.block5')
                    <!-- End Discussions Component -->

                    <!-- Top Referrals Component -->
                    @include('partials.block6')
                    <!-- End Top Referrals Component -->

                </div>
            </div>

            <!--Footer-->
            @include('partials.footer')
            <!--End Footer-->
        </main>
    </div>
</div>

@include('partials.help')

@endsection