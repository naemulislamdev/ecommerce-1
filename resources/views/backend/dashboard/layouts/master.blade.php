<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive &amp; Dashboard Template based on Bootstrap">
    <meta name="author" content="Evercom">
    <meta name="keywords" content="Evercom, bootstrap, dashboard template, admin template">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <title>Evercom @yield('title')</title>
    <link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">EverCom</span>
                </a>

               @include('backend.dashboard.layouts.include.sidebar')

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                        <div class="mb-3 text-sm">
                            Are you looking for more components?
                        </div>
                        <a href="#" target="_blank"
                            class="btn btn-outline-primary btn-block">Upgrade</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main">
            @include('backend.dashboard.layouts.include.header')

            <main class="content">
                @yield('content')
            </main>

            @include('backend.dashboard.layouts.include.footer')
        </div>
    </div>

    @include('backend.dashboard.layouts.include.scripts')

</body>

</html>
