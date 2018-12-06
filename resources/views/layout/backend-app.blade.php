@include('admin.inc.header')
<div id="soft-all-wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        @include('admin.inc.top-navbar')
        <div class="navbar-default sidebar" role="navigation">
            <!-- /.sidebar-collapse -->
            @include('admin.inc.sidebar-menu')
        </div>
    </nav>
    <!-- /.navbar-static-side -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @yield('content-heading')
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @yield('content-body')
    </div>
</div>
@include('admin.inc.footer')
