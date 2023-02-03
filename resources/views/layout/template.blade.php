<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layout.head')

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('layout.sidebar')

            <!-- top navigation -->
            @include('layout.navbar')
            <!-- /top navigation -->

            <!-- page content -->
            @yield("content")
            <!-- /page content -->
        </div>

        <!-- footer content -->
        @include('layout.footer')
        <!-- /footer content -->
    </div>
    </div>


    @include('layout.scripts')
</body>

</html>
