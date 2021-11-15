<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@500;700;800&display=swap');

        body {
            font-family: 'Noto Sans Lao', sans-serif;
        }

    </style>

</head>

<body>

        <div id="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-brown">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <h4>ໜ້າຫລັກ</h4>
                        </a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('staff') }}">
                                    <h4>ຂໍ້ມູນພະນັກງານ</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('computer') }}">
                                    <h4>ຂໍ້ມູນຄອມພິວເຕີ້</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <h4>ຂໍ້ມູນບັນທຶກເບີກຄອມ</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <h4>ຂໍ້ມູນບັນທຶກສົ່ງຄືນ</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <h4>ຂໍ້ມູນຜູ້ໃຊ້</h4>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <main class="py-1">
                @yield('content')
            </main>
        </div>


</body>

</html>
