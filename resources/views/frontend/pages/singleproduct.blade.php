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
                            <li class="breadcrumb-item active">Product Details</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row product-details-inner">
                    <div class="col-lg-5 col-md-6">
                        <!-- Product Details Left -->
                        <div class="product-large-slider">
                            <div class="pro-large-img img-zoom">
                                <img src="{{url('uploads/products/'.$products->Image)}}" alt="product-details" />
                                <a href="assets/images/product/product-01.png" data-fancybox="images"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="product-details-view-content">
                            <div class="product-info">
                                <h3>{{$products->Name}}</h3>
                                <div class="price-box">
                                    <span class="new-price">{{$products->Price}}</span>
                                </div>
                                <p>{{$products->Description}}</p>
                                <div class="single-add-to-cart">
                                    <form action="{{url('/cart/store')}}" class="cart-quantity d-flex" method="POST">
                                        @csrf
							            <input type="hidden" name="Productid" id="Productid" value="{{ $products->Id }}">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input type="number" class="input-text" name="Quantity" value="1">
                                            </div>
                                        </div>
                                        @if (Session::has('Clientid'))
                                            <button class="add-to-cart" type="submit">Add To Cart</button>
                                        @else
                                            <a href="{{ route('front.register') }}" class="add-to-cart">Add To Cart</a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection