<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <x-partials.topnav />
    </header>


    <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <x-partials.topbar />
                </div>
            </nav>
        </div>
    </div>

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

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Modal -->
        @stack('modals')
        <!-- end modal -->

        <x-partials.footer />
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<x-partials.right-side-bar />