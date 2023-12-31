<x-app-layout>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
{{--                @if(isset($offer))--}}
{{--                    <form method="POST" action="{{route('customer.store',$offer)}}">--}}
{{--                @endif--}}
                <form method="POST" action="{{route('customer.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            @if(session('message'))
                                <h6 class="coupon__code"><span class="icon_tag_alt"></span> {{ session('message') }}</h6>
                            @endif
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="checkout__input">
                                <p>Full Name<span>*</span></p>
                                <input type="text" name="name">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="address">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="phone_number">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Password<span>*</span></p>
                                        <input type="password" name="password">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="password" name="account_password">
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text" name="note" placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>$750.99</span></li>
                                    <li>Total <span>$750.99</span></li>
                                </ul>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

</x-app-layout>
