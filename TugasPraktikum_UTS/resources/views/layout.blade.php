@include('partials.head')

<body data-sidebar="colored" >

    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{$title}}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div id="layout-wrapper">

{{-- topbar --}}
@include('partials.topbar')



<!-- ========== Left Sidebar Start ========== -->
@include('partials.sidebar')
<!-- Left Sidebar End -->

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

@yield('content')    

            {{-- footer --}}
            @include('partials.footer')
            {{-- end footer --}}
</div>

            <script src="/assets/js/app.js"></script>
    </body>

                <!-- apexcharts -->
                <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

                <!-- Vector map-->
                <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
                <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>

                <script src="/assets/js/pages/dashboard.init.js"></script>
</html>