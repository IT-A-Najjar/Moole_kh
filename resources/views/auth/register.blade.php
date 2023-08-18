<x-app-layout>
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h6 class="checkout__title">Register</h6>
                    <div class="checkout__input">
                        <p>Full Name<span>*</span></p>
                        <input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name">
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout__input">
                                <p>Password<span>*</span></p>
                                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>

                    <div class="checkout__input">
                        <p>Account Password<span>*</span></p>
                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="checkout__input">
                        <p>Order notes<span>*</span></p>
                        <input type="text" placeholder="Notes about your order, e.g. special notes for delivery.">
                    </div>
                    
                    <button type="submit" class="btn btn-outline-success" style="color:forestgreen">Register</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

</x-app-layout>