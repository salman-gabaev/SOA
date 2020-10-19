<html>
    <head>
        <title>App Name - @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="container pt-3">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{ route('web.home') }}">Home</a>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.form-one') }}">Form One</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.form-two') }}">Form Two</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data.view') }}">Data</a>
                    </li>
                </ul>
            </nav>

            <div class="container pt-3">
                @yield('content')
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
</html>
