<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/signuplogin.css')}}">
    <script src="{{asset('./js/script.js')}}"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="col1">
            <img src="{{ asset('./Media/images/Logo-removebg-preview.png') }}" alt="">
        </div>
        <div class="col2">
            <div class="header">
                <p>Remembered your password? <a href="{{ route('login') }}">Log in</a></p>
            </div>
            <div class="form-section">
                <h1>Reset Your Password</h1><br>
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required placeholder="Enter your Email"><br><br>
                    
                    <input type="submit" value="Email Password Reset Link" id="submitreset">
                </form>
            </div>
        </div>
    </div>

</body>
