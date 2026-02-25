<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
        <script src="{{ asset('js/script.js') }}" defer></script>
    </head>
    <body>
            <div class="form-box">
                <form  action="{{ route('login') }}" method="POST">
                    @csrf

                    <h1>Login</h1>
                    <div class="input-box">
                        <input id="email" name="email" type="email" placeholder="Email" required>
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="forgot-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                    <p>or login with socail platforms</p>
                    <div class="socail-icons">
                        <a href="http://www.facebook.com" ><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="http://www.google.com"><i class="fa-brands fa-google"></i></a>
                        <a href="http://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </form>
        
                <p id="account">Don't have an Account? <a href="{{ route('register') }}">Register Here</a></p>
        
            </div>
    </body>
</html>