<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/signuplogin.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Registration</title>
</head>
<body>
    <!-- The Biggest div  -->
    <div class="container">
        <!-- the image column -->
        <div class="col1">
            <img src="{{ asset('Media/images/Logo-removebg-preview.png') }}" alt="">
        </div>
        <!-- the form column -->
        <div class="col2">
            <!-- column2 header -->
            <div class="header">
                <p>Already have an account ? <a href="{{ route('login') }}">Sign in</a></p>
            </div>
            <!-- column inputs -->
            <div class="form-section">
                <h1>Welcome to BlogakTube!</h1><br>
                <p>Register your account</p><br>
                <!-- Update form action to point to the default Laravel registration route -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf <!-- This adds the CSRF token for security -->
                    <!-- Name -->
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your username"><br><br>
                    <!-- Email -->
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your Email"><br><br>
                    <!-- Password -->
                    <label for="password">New Password:</label><br>
                    <input type="password" id="password" name="password" required placeholder="Enter new Password"><br><br>
                        @error('password')
                            <div class="error" style="color: red;">{{ $message }}</div>
                        @enderror
                    <!-- Confirmed Password -->
                    <label for="password_confirmation">Re-Enter password:</label><br>
                    <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Re-enter Password"><br><br>
                        @error('password_confirmation')
                            <div class="error" style="color: red;">{{ $message }}</div>
                        @enderror
                    <!-- Gender -->
                    <label for="male" class="labelgender">Male</label>
                    <input type="radio" name="gender" id="male" value="male" required>
                    <label for="female" class="labelgender">Female</label>
                    <input type="radio" name="gender" id="female" value="female" required><br><br>
                    <!-- Button -->
                    <input type="submit" value="Register" id="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

  
