<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
        <script src="{{ asset('js/script.js') }}" defer></script>
    </head>
    <body>
        <div class="form-box">
            <form id="register-form" action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
                @csrf

                <h1>Registration</h1>
                <div class="input-box">
                    <input id="name" name="name" type="text" placeholder="Username" >
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input id="email" name="email" type="email" placeholder="Email" >
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input id="password" name="password" type="password" placeholder="Password" >
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-box">
                    <input id="confirm-pas" name="confirm-pas" type="password" placeholder="Confirm Password" >
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <button type="submit" class="btn">Submit</button>
                <p>or login using your social platforms</p>
                <div class="socail-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </form>
    
            <p id="account">Already have an Account? <a href="{{ route('login') }}">Login Here</a></p>
        </div>
    </body>
</html>