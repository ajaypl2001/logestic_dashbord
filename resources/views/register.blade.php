<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Opulence Digitech</title>
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

        .register-card {
            border-radius: 12px;
            padding: 2rem;
            background: #ffffff;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 480px;
        }

        .register-logo {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .register-logo img {
            display: block;
            margin: 0 auto;
            transition: all 0.3s ease-in-out;
        }

        .register-logo .logo-sm {
            height: 60px;
            margin-bottom: 8px;
        }

        .register-logo .logo-lg {
            height: 35px;
        }

        .register-logo img:hover {
            transform: scale(1.05);
        }

        @media (max-width: 576px) {
            .register-logo .logo-sm {
                display: none;
            }

            .register-logo .logo-lg {
                height: 40px;
            }
        }

        .register-card h4 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        .form-label {
            font-weight: 500;
            color: #555;
        }

        .btn-primary {
            background-color: #4e73df;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #375ac2;
        }

        .register-footer {
            margin-top: 1rem;
            font-size: 0.9rem;
            text-align: center;
        }

        .register-footer a {
            text-decoration: none;
            color: #4e73df;
            font-weight: 500;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        .alert ul {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<div class="register-card">
    <div class="register-logo">
        <img src="{{ asset('images/logo-sm.png')}}" class="logo-sm" alt="Small Logo">
        <img src="{{ asset('images/logo-light.png')}}" class="logo-lg" alt="Main Logo">
    </div>

    <h4>Create Your Account</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.post') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name') }}" 
                required
                autofocus
            >
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email') }}" 
                required
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                class="form-control @error('password') is-invalid @enderror" 
                required
            >
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input 
                type="password" 
                name="password_confirmation" 
                id="password_confirmation" 
                class="form-control" 
                required
            >
        </div>

        <div class="mb-4">
            <label for="image" class="form-label">Profile Image</label>
            <input 
                type="file" 
                name="file" 
                id="image" 
                class="form-control @error('image') is-invalid @enderror" 
                accept="image/*"
                required
            >
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2">Register</button>
    </form>

    <div class="register-footer">
        <p class="mt-3 mb-0">
            Already have an account? <a href="{{ route('login') }}">Login here</a>.
        </p>
    </div>
</div>

<!-- Vendor JS -->
<script src="{{ asset('js/vendor.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>

</body>
</html>
