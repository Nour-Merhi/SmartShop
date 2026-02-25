
@extends('layouts.app')

@section('title', 'Home')

@section('content')
            <!-- 
            #9ac1f0 light blue
            #ffb600 orange
            #0049ff blue
            -->
            <section id="trade">
                <div class="trade-content">
                  <div class="text">
                    <h4>Trade-in-Offer</h4>
                    <h2>Super value deals</h2>
                    <h1>On all Products</h1>
                    <p>Save more with coupons & up to 70% off!</p>
                    <button type="button" onclick="window.location.href='{{route('shop')}}'">Shop Now</button>
                  </div>
                  <div class="image">
                    <img src="{{ asset('img/general/man_shopping.png') }}" alt="man_shopping">
                  </div>
                </div>
            </section>
            <section id="feature" class="section-p1">
                <div class="feature-1">
                    <img src="{{ asset('img/general/delivery.png') }}" alt="free-shipping">
                    <h6>Free Shipping</h6>
                </div>
                <div class="feature-1">
                    <img src="{{ asset('img/general/delivery.png') }}" alt="free-shipping">
                    <h6>Online Order</h6>
                </div>
                <div class="feature-1">
                    <img src="{{ asset('img/general/delivery.png') }}" alt="free-shipping">
                    <h6>Save Money</h6>
                </div>
                <div class="feature-1">
                    <img src="{{ asset('img/general/delivery.png') }}" alt="free-shipping">
                    <h6>Fresh Vegtables</h6>
                </div>
            </section>

            <section id="best-seller" class="section-p1">
                <h2>Best Seller</h2>
                <p>Spring Collection for Best Seller</p>
                <div id="container">
                    
                    @foreach($featuredProducts as $product)
                    <div class="seller" >
                        <img class="img" src="{{ asset('img/products/vigtableCutter.png') }}" alt="">
                        <div class="sell-des">
                            <span>Electronic</span>
                            <h5>{{ $product->name }}</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>${{ $product->price }}</h4>
                        </div>
                        <a href="{{ route('cart.add') }}"><i class="fa-solid fa-cart-plus cart"></i></a>
                    </div>
                    @endforeach
                </div> 
            </section>

            <section id="fast-delivery">
                <div id="deal" class="section-p1">
                   <img src="{{ asset('img/general/man3.png') }}" alt="fast-delivery">
                    <div class="delivery-deal">
                        <h4>Fast Delivery</h4>
                        <h1>You Order We Deliver </h1>
                        <p>Order what you want, drink coffee and enjoy your time!</p>
                        <button type="button" onclick="window.location.href='{{ route('shop') }}'">Order Now</button>
                    </div>
                </div>
            </section>
            <section id="best-seller" class="section-p1">
                <h2>New Arrivals</h2>
                <p>Spring Collection of New Arrival</p>
                <div id="container">

                    @foreach ($bestSellers as $product)
                    <div class="seller" >
                        <img class="img" src="{{ asset('img/products/vigtableCutter.png') }}" alt="">
                        <div class="sell-des">
                            <span>Electronic</span>
                            <h5>{{ $product->name }}</h5>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4>${{ $product->price }}</h4>
                        </div>
                        <a href="{{ route('cart.add') }}"><i class="fa-solid fa-cart-plus cart"></i></a>
                    </div>
                    @endforeach
                </div>
            </section>
@endsection
            
        