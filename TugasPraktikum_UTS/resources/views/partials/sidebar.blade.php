<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm-dark.png" alt="logo-sm-dark" height="24">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-dark.png" alt="logo-dark" height="22">
            </span>
        </a>

        <a href="/index" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/images/logo-sm-light.png" alt="logo-sm-light" height="24">
            </span>
            <span class="logo-lg">
                <img src="/assets/images/logo-light.png" alt="logo-light" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn"
        id="vertical-menu-btn">
        <i class="ri-menu-2-line align-middle"></i>
    </button>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
                {{-- sidebar data paket --}}
            <div class="dropdown mx-3 sidebar-user user-dropdown select-dropdown">
                <button type="button" class="btn btn-success w-100 waves-effect waves-light border-0"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('dataPaket')}}">
                    <span class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-2 text-center">      
                            <a href="{{route('dataPaket')}}" class="menu-link waves-effect"> Data Paket</a>
                        </div>
                </button>
            </div>

</div>
</div>          
</div>