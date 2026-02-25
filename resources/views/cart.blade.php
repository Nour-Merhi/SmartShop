@extends('layouts.app')

@section('title', 'Cart')

@section('content')
            <section id="cart" class="section-p1">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Remove</td>
                            <td>Image</td>
                            <td>Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Subtotal</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                            <td><img src="img/vigtableCutter.png" alt="vigtableCutter"></td>
                            <td>Cartoon Astronut T-Shirt</td>
                            <td>$20</td>
                            <td><input type="number" value="1" min="1" max="100"></td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                            <td><img src="img/vigtableCutter.png" alt="vigtableCutter"></td>
                            <td>Cartoon Astronut T-Shirt</td>
                            <td>$20</td>
                            <td><input type="number" value="1" min="1" max="100"></td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                            <td><img src="img/vigtableCutter.png" alt="vigtableCutter"></td>
                            <td>Cartoon Astronut T-Shirt</td>
                            <td>$20</td>
                            <td><input type="number" value="1" min="1" max="100"></td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                            <td><img src="img/vigtableCutter.png" alt="vigtableCutter"></td>
                            <td>Cartoon Astronut T-Shirt</td>
                            <td>$20</td>
                            <td><input type="number" value="1" min="1" max="100"></td>
                            <td>$20</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <section id="cart-add" class="section-p1">
                <div id="coupon">
                    <h3>Apply Coupon</h3>
                    <div>
                        <input type="text" placeholder="Enter your coupon">
                        <button type="submit">Apply</button>
                    </div>
                </div>
                <div id="subtotal">
                    <h3>Cart Totals</h3>
                    <table>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td>$345</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>$345</strong></td>
                        </tr>
                    </table>
                    <button type="button" onclick="href='checkout.html';">Proceed to Checkout</button>
                </div>
            </section>
@endsection