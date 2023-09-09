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
                                <tr class="product-row" id={{$product->id}}>
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
                                                <input type="number" id="quantity-input-{{$product->id}}" class="quantity-input{{$product->id}}" value="1" min="1" data-price="{{$product->price}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">
                                        $<span class="product-total-price{{$product->id}}" id="total{{$product->id}}">{{$product->price}}</span>
                                    </td>
                                    <td class="cart__close">
                                        <button onclick="hideProduct({{$product->id}})" class="delete-product{{$product->id}}" data-product-id="{{$product->id}}">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </td>
                                </tr>
                                <script >

                                    $(document).ready(function () {
                                        $('.quantity-input{{$product->id}}').on('change', function () {
                                            var quantity = $(this).val();
                                            var price = $(this).data('price');
                                            var totalPrice = quantity * price;
                                            $('.product-total-price{{$product->id}}').text(totalPrice.toFixed(2));
                                            var totalCartPrice=0;
                                            // حساب الإجمالي لجميع المنتجات
                                            @foreach($products as $product)
                                            var productPrice{{$product->id}} = parseFloat($('.product-total-price{{$product->id}}').text());
                                            totalCartPrice += isNaN(productPrice{{$product->id}}) ? 0 : productPrice{{$product->id}};
                                            @endforeach
                                            $('.total-cart-price').text(totalCartPrice.toFixed(2));
                                        });
                                    });
                                    function  hideProduct(id){
                                        let idProduct=document.getElementById(id);
                                        idProduct.style.display='none';
                                        chengeTotal("total"+id);
                                    }
                                    function chengeTotal(content) {
                                        let idTotalitem = document.getElementById(content);
                                        let total = parseFloat($('.total-cart-price').text());
                                        total -= isNaN(total) ? 0 :parseFloat(idTotalitem.innerHTML);
                                        $('.total-cart-price').text(total.toFixed(2));
                                    }

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
                            <li>
                                <div>
                                    السعر الإجمالي للسلة: <span class="total-cart-price" id="totalproduct">0.00</span>
                                </div>
                            </li>
                        </ul>
{{--                        <a class="primary-btn">--}}
                            <button onclick="sendDate();">
                                Proceed to checkout
                            </button>
{{--                        </a>--}}
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>
                            function sendDate(){
                                var cartData = {}; // المصفوفة التي ستحتوي على البيانات

                                $('.product-row').each(function() {
                                    var productId = $(this).attr('id');
                                    var quantityInput = $('#quantity-input-' + productId); // استخدم الـ id هنا
                                    if (productId && quantityInput.length > 0) {
                                        var productCount = parseInt(quantityInput.val());
                                        if (!isNaN(productCount)) {
                                            cartData[productId] = productCount;
                                        }
                                    }
                                });
                                console.log(cartData);
                                // استخدم AJAX لإرسال البيانات إلى الخادم
                                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                                $.ajax({
                                    type: 'POST',
                                    url: '/invoice/creat', // تحديد المسار الصحيح
                                    data: {
                                        _token: csrfToken, // استخدام متغير _token لتمرير الCSRF token
                                        cartData: cartData
                                    },
                                    success: function(response) {
                                        // تعامل مع الاستجابة من الخادم هنا
                                        console.log('ok')
                                    },
                                    error: function(error) {
                                        console.error('Error updating cart:', error);
                                    }
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

</x-app-layout>
