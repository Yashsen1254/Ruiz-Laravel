@extends('frontend.layout.main');

@section('content');
<body>

    <div class="main-wrapper">
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item active">Cart Page</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        
        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#" class="cart-table">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="plantmore-product-thumbnail">Images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="plantmore-product-price">Unit Price</th>
                                            <th class="plantmore-product-quantity">Quantity</th>
                                            <th class="plantmore-product-subtotal">Total</th>
                                            <th class="plantmore-product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($carts as $cart)
								            @if($cart->Clientid == session('Clientid') && $cart->isdeleted != 1)								
								            <tr>
								            	<td class="is-photo">
								            		<a href="/singleproduct/{{$cart->Productid}}">
								            			<span class="aspect-ratio is-1x1"><img class="aspect-ratio_object lazyload" src="{{asset('uploads/products/'.$cart->Image)}}" alt="{{$cart->Name}}"></span>
								            		</a>
								            	</td>
								            	<td class="is-name">
								            		<a href="/singleproduct/{{$cart->Productid}}">{{$cart->Name}}</a>
								            	</td>
								            	<td class="is-price">${{$cart->Price}}</td>
								            	<td class="is-qty">
								            		<input type="text" name="quantity" value="{{$cart->Quantity}}" data-ntr-ui-spinner='{"min":1, "max":50}'>
								            	</td>
								            	<td class="is-total">${{$cart->Price * $cart->Quantity}}</td>
								            	<td class="is-remove">
								            		<a class="button is-small is-grey" href="/cart/delete/{{$cart->Id}}"><i class="fa fa-times"></i>
								            		</a>
								            	</td>
								            </tr>
								            @endif
							            @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                </div>
                                <div class="col-md-4 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Total <span><td class="text-primary">${{ $carts->reject(function($cart) { return $cart->isdeleted == 1; })->sum(function($cart) { return $cart->Price * $cart->Quantity; }) }}</td></span></li>
                                        </ul>
                                        <a href="/checkout" class="proceed-checkout-btn">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection