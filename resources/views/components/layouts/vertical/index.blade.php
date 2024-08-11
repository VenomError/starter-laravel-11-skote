<div id="layout-wrapper">

    <header id="page-topbar">
        <x-partials.topnav />
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <x-partials.sidebar />
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <x-partials.breadcrumb />
                    </div>
                </div>
                <!-- end page title -->

                {{ $slot }}
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- Modal -->
        @stack('modals')
        <!-- end modal -->

        <x-partials.footer />
    </div>
    <!-- end main content-->
</div>

<x-partials.right-side-bar />