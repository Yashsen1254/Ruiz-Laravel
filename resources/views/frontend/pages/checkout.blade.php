@extends('frontend.layout.main');

@section('content')
<body>

    <div class="main-wrapper">
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb checkout-page">
            <div class="container">
                <!-- checkout-details-wrapper start -->
                <div class="checkout-details-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <!-- billing-details-wrap start -->
                            <div class="billing-details-wrap">
                                <form action="{{ url('/checkout/store') }}" method="POST">
                                    @csrf
                                    @foreach($carts->where('Clientid', session('Clientid')) as $cart)
											<input type="hidden" name="Cartid" value="{{ $cart->Id }}">
										@endforeach
										<input type="hidden" name="Totalquantity" value="{{ $cart->Quantity }}">
                                        <input type="hidden" name="Totalamount" value="{{ $products->sum('Price') * $carts->sum('Quantity') }}">
                                        <input type="hidden" name="Status" id="Status" value="PENDING">
                                    <h3 class="shoping-checkboxt-title">Billing Details</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Name<span class="required">*</span></label>
                                                <input type="text" name="Name" id="Name">
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Mobile <span class="required">*</span></label>
                                                <input type="number" name="Mobile" id="Mobile">
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="Email" id="Email">
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="single-form-row">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" name="Address" id="Address">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="order-button-payment">
                                            <input type="submit" value="Place order" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- billing-details-wrap end -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- your-order-wrapper start -->
                            <div class="your-order-wrapper">
                                <h3 class="shoping-checkboxt-title">Your Order</h3>
                                <!-- your-order-wrap start-->
                                <div class="your-order-wrap">
                                    <!-- your-order-table start -->
                                    <div class="your-order-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $product)
											<tr class="shop-checkout_products_item">
												<td>
													<a class="shop-checkout_products_item_name" href="shop-single-1.html">{{ $product->Name }}</a>
												</td>
												<td class="text-right">{{ $product->Price }}</td>
											</tr>
										@endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total">
                                                    <th>Order Total</th>
                                                    <td><strong><span class="amount">{{ $products->sum('Price') * $carts->sum('Quantity') }}</span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- your-order-table end -->

                                    <!-- your-order-wrap end -->
                                    
                                    <!-- your-order-wrapper start -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- checkout-details-wrapper end -->
            </div>
        </div>
    </div>
</body>
</html>
@endsection