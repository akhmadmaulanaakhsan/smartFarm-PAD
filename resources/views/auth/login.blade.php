@extends('layouts.loginlayout')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="boxicons/css/boxicons.css">

    <title>Ludiflex | Login</title>
</head>
<body>
    <section class="login" id="login">
        <div class="fixed-image">
            <img src="{{ asset('img/maskgroup.svg') }}" alt="Background Image" class="fixed-image" />
        </div>
        <div class="box">
            <div class="container">
                <div class="row justify-content-left">
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            <h3 class="mx-auto">Login</h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-box mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="iconemail">
                                    <img src="{{ asset('img/email.svg') }}" alt="Email Icon" class="email-icon email-email">
                                </span>  
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-box mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password" autofocus>
                                <span class="toggle-password" onclick="togglePasswordVisibility()">
                                    <img src="{{ asset('img/open_eye.svg') }}" alt="Open Eye" class="eye-icon open-eye">
                                    <img src="{{ asset('img/close_eye.svg') }}" alt="Closed Eye" class="eye-icon closed-eye">
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                            </div>

                            <script>
                                function togglePasswordVisibility() {
                                    var passwordField = document.getElementById('password');
                                    var openEyeIcon = document.querySelector('.open-eye');
                                    var closedEyeIcon = document.querySelector('.closed-eye');

                                    if (passwordField.type === "password") {
                                        passwordField.type = "text";
                                        openEyeIcon.style.display = "inline";
                                        closedEyeIcon.style.display = "none";

                                    } else {
                                        passwordField.type = "password";
                                        openEyeIcon.style.display = "none";
                                        closedEyeIcon.style.display = "inline";
                                    }
                                }
                            </script>


                            <div class="text-center">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div>
    </section>
</body>
@endsection
