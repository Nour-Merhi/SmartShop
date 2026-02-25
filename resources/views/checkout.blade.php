 @extends('layouts.app')

@section('title', 'Checkout')

@section('content')
 <section id="checkout-main">
        <div id="checkout" class="container">
            <form action="checkout.php" method="POST">
                @csrf
                
                <input id="first-name" name="first-name" type="text" placeholder="First Name" required>
                <input id="Last-name" name="last-name" type="text" placeholder="Last Name" required>
                <input id="phone" name="phone" type="tel" placeholder="Phone Number" required>
                <input id="email" name="email" type="email" placeholder="Email (optional)" >
                <input id="ship-address" name="ship-address" type="address" placeholder="Ship Address" reuquired>
                <input id="ship-city" name="ship-city" type="text" placeholder="Ship City" required>
                <input id="state" name="state" type="text" placeholder="State" required>
                <button type="submit">Checkout</button>
            </form>
        </div>
</section>
@endsection