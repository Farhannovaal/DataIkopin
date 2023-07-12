<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ikopin University</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/bahanikopin/image2.png') }}">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/CSS/editcss.css') }}" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                    <a class="nav-link {{ (request()->segment('1') == 'pmb') ? 'active' : '' }}" href="{{ url('pmb') }}">PMB Mahasiswa Baru </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment('1') == 'mahasiswa') ? 'active' : '' }}" href="{{ url('mahasiswa') }}">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment('1') == 'dosen') ? 'active' : '' }}" href="{{ url('dosen') }}">Dosen</a>
                </li>
                @if (auth()->check() && in_array(auth()->user()->level, ['operator', 'admin']))
                <li class="nav-item">
                    <a  class="nav-link {{ (request()->segment('1') == 'logout') ? 'active' : '' }}"  href="{{ route('logout') }}"> Logout</a>
                </li>
                @endif
            </ul>

            <div class="cover-text">
                <div class="span-cover"><span> Selamat Datang Mahasiswa Baru Di Ikopin University ||  Pendaftaran Mahasiswa Baru 2023 - 2024 Disini <a href="#"> Daftar </a></span></div>
                {{-- <div><span> </span></div> --}}
        </div>
            <button class="btn btn-outline-success ms-auto" onclick=" window.location='{{ url('login') }}'" title="login admin/operator">Login</button>
        </div>
    </div>
</nav>
{{-- END --}}

{{-- CONTENT --}}
<div class="mt-2">
  
    <div class="container">
        @yield('content')
    </div>
        @yield('content2')
</div>
{{-- END CONTENT --}}


<script>
    const slider = document.querySelector('.cover-text');
    const spans = slider.getElementsByTagName('span');

    // Menghitung total lebar slider
    let totalWidth = 0;
    for (let i = 0; i < spans.length; i++) {
      totalWidth += spans[i].offsetWidth;
    }

    // Menyesuaikan lebar slider dengan total lebar kata-kata
    slider.style.width = totalWidth + 'px';

    // Memulai animasi slide
    for (let i = 0; i < spans.length; i++) {
      spans[i].style.animationDuration = (totalWidth / 50) + 's';
    }
</script>
</body>
</html>
