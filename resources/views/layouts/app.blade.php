<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SmartShop')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    {{-- Header --}}
    <header>
        <h3 class="logo">SmartShop</h3>
        <nav>
            <ul id="navbar">
                <li><a class="active" href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                <button id="signin-mobile" onclick="window.location.href='{{ route('login') }}'">Sign in</button>
            </ul>
        </nav>
        <div id="mobile">
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
        <div id="signing">
            <a id="favorites" href="{{ route('wishList') }}"><i class="fa-solid fa-heart"></i></a>
            <a id="bag" href="{{ route('cart.add') }}"><i class="fa-solid fa-cart-shopping"></i></a>
            <button id="signin" onclick="window.location.href='{{ route('login') }}'">Sign in</button>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
   <footer id="contact" class="footer section-p1">
            <div class="col">
               <h3>SmartShop</h3>
               <h4>Contact</h4>
               <p><strong>Address:</strong> Harire Airport, Street Airport, Beirut</p>
               <p><strong>Phone:</strong> +96176895421589</p>
               <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
               <div class="follow">
                   <h4>Follow Us</h4>
                   <div class="icon">
                       <i class="fab fa-facebook-f"></i>
                       <i class="fab fa-twitter"></i>
                       <i class="fab fa-instagram"></i>
                       <i class="fab fa-pinterest-p"></i>
                       <i class="fab fa-youtube"></i>
                   </div>
               </div>
           </div>
            <div class="col">
               <h4>About</h4>
               <a href="#">About us</a>
               <a href="#">Delivery Information</a>
               <a href="#">Privacy Policy</a>
               <a href="#">Terms & Conditions</a>
               <a href="#">Contact us</a>
            </div>
            <div class="col">
               <h4>My Account</h4>
               <a href="{{ route('register') }}">Sign In</a>
               <a href="#">View Cart</a>
               <a href="#">My Wishlist</a>
               <a href="#">Track My Orders</a>
               <a href="#">Help</a>
            </div>
            <div class="col install">
               <h4>Install App</h4>
               <p>From App Store or Google Play</p>
               <div class="row">
                   <img src="{{ asset('img/general/appstore.png') }}" alt="appstore" height="70px">
                   <img src="{{ asset('img/general/googleplay2.webp') }}" alt="googlePlay" height="70px">
               </div>
               <p>Secure payments gateways</p>
               <img src="{{ asset('img/general/payments.png') }}" alt="payments" width="200px" height="40px">
           </div>
            <div class="copyright">
               <p>&copy; 2025 SmartShop. All rights are reserved.</p>
           </div>
    </footer>
</body>
</html>

