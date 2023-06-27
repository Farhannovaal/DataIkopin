<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ikopin University</title>
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/CSS/editcss.css') }}" rel="stylesheet">
</head>
<body>

{{-- NAVBAR --}} 
<nav class="navbar navbar-expand-lg bg-warning navbar-dark">
    <div class="container">
        <a class="navbar-brand text-dark" href="#">
            <img src="{{ asset('assets/bahanikopin/image2.png') }}" alt="Logo" width="60px" height="60px">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment('1') == '' || request()->segment('1') == 'home') ? 'active' : '' }}" aria-current="page" href="{{ url('home') }}">
                        <i class="fas fa-gauge-simple"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment('1') == 'mahasiswa') ? 'active' : '' }}" href="{{ url('mahasiswa') }}">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment('1') == 'dosen') ? 'active' : '' }}" href="{{ url('dosen') }}">Dosen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- END --}}

{{-- CONTENT --}}
<div class="mt-2">
  
    <div class="container">
        @yield('content')
    </div>
</div>
{{-- END CONTENT --}}

</body>
</html>
