<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Bubu's Fittings</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <h2>Login</h2>

                    <!-- Email Input Field -->
                    <div class="inputbox">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Password Input Field -->
                    <div class="inputbox">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="forget">
                        <label for="remember">
                            <input type="checkbox" name="remember" id="remember"> Remember Me
                        </label>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" id="loginButton">Log in</button>

                    <!-- Register Redirect -->
                    <div class="register">
                        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
