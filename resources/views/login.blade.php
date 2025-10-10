<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Opulence Digitech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- Vendor & App CSS -->
    <link href="{{ asset('css/vendor.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <style>
        body {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-card {
            border-radius: 12px;
            padding: 2rem;
            background: #ffffff;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 450px;
        }

        .login-logo {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .login-logo img {
            display: block;
            margin: 0 auto;
            transition: all 0.3s ease-in-out;
        }

        .login-logo .logo-sm {
            height: 60px;
            margin-bottom: 8px;
        }

        .login-logo .logo-lg {
            height: 35px;
        }

        .login-logo img:hover {
            transform: scale(1.05);
        }

        /* Hide small logo on mobile */
        @media (max-width: 576px) {
            .login-logo .logo-sm {
                display: none;
            }

            .login-logo .logo-lg {
                height: 40px;
            }
        }

        .login-card h4 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        .login-footer {
            margin-top: 1rem;
            font-size: 0.9rem;
            text-align: center;
        }

        .login-footer a {
            text-decoration: none;
            color: #4e73df;
            font-weight: 500;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="login-logo">
        <img src="{{ asset('images/logo-sm.png')}}" class="logo-sm" alt="Small Logo">
        <img src="{{ asset('images/logo-light.png')}}" class="logo-lg" alt="Main Logo">
    </div>

    <h4 class="text-center">Login to Your Account</h4>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger text-start">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login.post') }}" autocomplete="off">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email"
                   value="{{ old('email') }}" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <!-- Register Link -->
    <div class="login-footer mt-3">
        <span>Don't have an account? <a href="{{ route('signup') }}">Register here</a></span>
    </div>
</div>

<!-- Vendor JS -->
<script src="{{ asset('js/vendor.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>

</body>
</html>
