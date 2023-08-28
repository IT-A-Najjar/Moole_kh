<x-app-layout>
       <!-- Breadcrumb Section Begin -->
       <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="images/{{$product->image}}" alt="" style="width: 120px">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{$product->name}}</h6>
                                            <h5>${{$product->price}}</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="number" class="quantity-input{{$product->id}}" value="1" min="1" data-price="{{$product->price}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">$<span class="product-total-price{{$product->id}}">{{$product->price}}</span></td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const quantityInput = document.querySelector('.quantity-input{{$product->id}}');
                                        const productTotalPrice = document.querySelector('.product-total-price{{$product->id}}');

                                        quantityInput.addEventListener('input', function() {
                                            const quantity = parseInt(this.value);
                                            const pricePerItem = parseFloat(this.getAttribute('data-price'));
                                            const totalPrice = quantity * pricePerItem;

                                            productTotalPrice.textContent = totalPrice.toFixed(2);
                                        });
                                    });
                                </script>
                            @endforeach
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ 169.50</span></li>
                            <li>Total <span>$ 169.50</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

</x-app-layout>
