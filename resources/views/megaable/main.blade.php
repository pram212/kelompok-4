<!DOCTYPE html>
<html lang="en">

@include('megaable.head')

<body>
<!-- Pre-loader start -->
@include('megaable.preloader')
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <!-- navbar -->
        @include('megaable.navbar')
    
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('megaable.sidebar')
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
    @include('megaable.basicscript')

</body>

</html>
