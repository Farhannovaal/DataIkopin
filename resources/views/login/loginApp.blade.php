<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login </title>
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/CSS/editcss.css') }}" rel="stylesheet">
</head>
<body>
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-warning" onclick=" window.location='{{ url('home') }}'">
                    Back to main
                </button>
            </div>
            <div class="card-header">   
                <img src="{{ asset('assets/bahanikopin/image2.png') }}" class="img-card-header" alt="Logo" width="60px" height="60px">
                <h1 class="card-title text-center"> Login </h1>
                <p class="card-title text-center"> Panel Khusus Admin/Operator</p>
            </div>
            <div class="card-boy">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                        
                @endif

                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
             @endif
             @if (session('errorLevel'))
             <div class="alert alert-danger">
                 {{ session('errorLevel') }}
             </div>
          @endif

                <form action="{{ route('loginPost') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label"></label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="email" required       >
                    </div>
        
                    <div class="mb-3">
                        <label for="password" class="form-label"></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required       >
                    </div>
                   

                    <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary"> Login </button>
                            </div>

                            <a href="{{ url('register') }}"> Register Account ?</a>
                    </div>
                </form>
            </div>    
        </div>    
    </div>    
</div>    












</body>
</html>