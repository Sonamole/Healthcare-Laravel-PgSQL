<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('admin.layouts.styles')

</head>
<body>
    @include('admin.layouts.sidebar')


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('admin.layouts.topbar')
<!-- Breadcrumbs -->
        {{-- @include('admin.layouts.breadcrumbs') --}}

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

<!-- Page content -->
                    @yield('content')

            </div>
        </div>
    </div>

    <div class="clearfix"></div>
<!-- Footer -->
    {{-- @include('admin.layouts.footer') --}}

</div>

<!-- Scripts -->
@include('admin.layouts.script')
</body>
</html>
