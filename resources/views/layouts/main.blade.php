<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
<!-- Pre-loader start -->
@include('layouts.preloader')
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <!-- navbar -->
        @include('layouts.navbar')
    
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('layouts.sidebar')
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            @yield('content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Required Jquery -->
    @include('layouts.basicscript')
    @stack('script')

</body>

</html>
