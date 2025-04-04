@extends('frontend.layout.main');

@section('content');
<body>

    <div class="main-wrapper">
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
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
                <div class="row">
                    <div class="col-lg-12">

                        <!-- shop-product-wrapper start -->
                        <div class="shop-product-wrapper">

                            <!-- shop-products-wrap start -->
                            <div class="shop-products-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="shop-product-wrap">
                                            <div class="row">
                                                @foreach($products as $product)
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="{{url('uploads/products/'.$product->Image)}}" alt="">
                                                            </a>
                                                            <div class="action-links">
                                                                <a href="{{url('/singleproduct/'.$product->Id)}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">{{$product->Name}}</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">{{$product->Price}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrap end -->
                        </div>
                        <!-- shop-product-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->
    </div>
</body>
</html>
@endsection