<!DOCTYPE html>
<html lang="en">

<head>
        @include('components.css')

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area">
            <h1 class="ml12">Loading</h1></div>

        <!-- header -->
        @include('components.header')
        <!-- header END -->
    <!-- Content -->
            @yield('content')
    <!-- Content END-->
    <!-- Footer -->
    @include('components.footer')
        <!-- Footer END-->
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    @include('components.scripts')

</body>

</html>