
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
        <!-- Image Column -->
         
        <div class="col1">
            <img src="{{ asset('Media/images/Logo-removebg-preview.png') }}" alt="Logo">
        </div>

        <!-- Form Column -->
        <div class="col2">
            <!-- Header -->
            <div class="header">
                <p>Don't have an account? 
                    <a href="{{ route('register') }}" class="btn btn-link">Register</a>
                </p>
            </div>

            <!-- Form Section -->
            <div class="form-section">
                <h1>Welcome to BlogakTube!</h1><br>
                <p>Login to Blogak</p><br><br><br>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <label id="login-email-label" for="email">Email:</label><br>
                    <input id="login-email-input" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your Email"><br><br><br><br>
                   

                    <!-- Password -->
                    <label id="login-pass-label" for="password">Password:</label><br>
                    <input id="login-password-input" type="password" name="password" required placeholder="Enter your Password"><br><br>
                    @error('email') <!-- Laravel will return the error as 'email' for invalid credentials -->
                         <div style="color: red;">{{ $message }}</div>
                    @enderror

                    <!-- Optional: To have more custom control -->
                    @if(session('error'))
                        <div style="color: red;">{{ session('error') }}</div>
                    @endif

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <!-- Display Error Below Password Field -->


                    <!-- Submit Button -->
                    <input type="submit" value="Login" id="submitlogin">

                    <!-- Forgot Password -->
                    @if (Route::has('password.request'))
                        <div class="mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>

