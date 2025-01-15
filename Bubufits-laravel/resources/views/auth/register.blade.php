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
                <form action="{{ route('register') }}" method="post">
                    @csrf 
                    <h2>Sign up</h2>

                    <div class="inputbox">
                        <!-- <label for="name">Firstname</label> -->
                        <input type="text" name="name" id="name" placeholder="Firstname">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputbox">
                        <input type="text" name="lname" id="lname" placeholder="Lastname">
                        @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputbox">
                        <input type="email" name="email" id="email" placeholder="Bubu@example.com">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputbox">
                        <input type="password" name="password" id="password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="inputbox">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" id="signupButton">Sign up</button>
                </form>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>
</html>
