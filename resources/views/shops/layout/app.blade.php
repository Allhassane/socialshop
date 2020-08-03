<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Gerer ma boutique - Social Shop')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="/shops/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/shops/assets/css/style.css">
    <link rel="stylesheet" href="/shops/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/shops/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='/shops/assets/img/favicon.ico' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        @include('shops.partials.topbar')

        @include('shops.partials.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">

                @include('shops.partials.breadcrumb')

                <div id="app" class="section-body">

                    @yield('content')

                </div>
            </section>

            @include('shops.partials.rightside')

        </div>

        @include('shops.partials.footer')
    </div>
</div>
<script src="/js/app.js"></script>
<!-- General JS Scripts -->
<script src="/shops/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="/shops/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="/shops/assets/js/custom.js"></script>
</body>

</html>
