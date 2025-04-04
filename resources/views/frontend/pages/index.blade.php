@extends('frontend.layout.main');

@section('content');
<body>

    <div class="main-wrapper">

        
        
        <!-- Hero Section Start -->
        <div class="hero-slider hero-slider-one">

            <!-- Single Slide Start -->
            <div class="single-slide" style="background-image: url({{url('frontend/assets/images/slider/slide-bg-3.png')}})">
                <!-- Hero Content One Start -->
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content-text text-left">
                                <h5>Exclusive Offer -20% Off This Week</h5>
                                <h1>H-Vault Classico</h1>
                                <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                                <p>Starting At <strong>$1.499.00</strong></p>
                                <div class="slide-btn-group">
                                    <a href="/shop" class="btn btn-bordered btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
            <!-- Single Slide End -->
            <!-- Single Slide Start -->
            <div class="single-slide" style="background-image: url({{url('frontend/assets/images/slider/slide-bg-4.png')}})">
                <!-- Hero Content One Start -->
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content-text text-left">
                                <h5>Exclusive Offer -20% Off This Week</h5>
                                <h1>H-Vault Classico</h1>
                                <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                                <p>Starting At <strong>$1.499.00</strong></p>
                                <div class="slide-btn-group">
                                    <a href="/shop" class="btn btn-bordered btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
            <!-- Single Slide End -->

        </div>
        <!-- Hero Section End -->
        
        
        <!-- Banner Area Start -->
        <div class="banner-area section-pt section-pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30">
                            <a href="/shop"><img src="{{url('frontend/assets/images/banner/banner-03.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-6">
                        <div class="single-banner mb-30">
                            <a href="/shop"><img src="{{url('frontend/assets/images/banner/banner-05.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area section-pt section-pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30">
                            <a href="/shop"><img src="{{url('frontend/assets/images/banner/banner-01.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-6">
                        <div class="single-banner mb-30">
                            <a href="/shop"><img src="{{url('frontend/assets/images/banner/banner-02.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <div class="letast-blog-area section-pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 30 Oct 2019
                                </div>
                                <h4><a href="blog-details.html" class="articles-name">Ruiz Watch is one of the web's most visited watch sites and the world's</a></h4>
                            </div>
                            <div class="articles-image">
                                <a href="blog-details.html">
                                    <img src="{{url('frontend/assets/images/blog/blog-01.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 20 Oct 2019
                                </div>
                                <h4><a href="blog-details.html" class="articles-name">Ruiz Watch reviews and most popular watch & timepiece blog for serious </a></h4>
                            </div>
                            <div class="articles-image">
                                <a href="blog-details.html">
                                    <img src="{{url('frontend/assets/images/blog/blog-02.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#"> Author Name</a> - 13 Oct 2019
                                </div>
                                <a href="blog-details.html" class="articles-name">Connected to the World: Introducing the G-Shock MTG-B1000-1A</a>
                            </div>
                            <div class="articles-image">
                                <a href="blog-details.html">
                                    <img src="{{url('frontend/assets/images/blog/blog-03.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- letast blog area End -->
        
        <!-- our-brand-area start -->
        <div class="our-brand-area section-pb">
            <div class="container">
                <div class="row our-brand-active">
                    <div class="brand-single-item">
                        <a href="#"><img src="{{url('frontend/assets/images/brand/brand-01.png')}}" alt=""></a>
                    </div>
                    <div class="brand-single-item">
                        <a href="#"><img src="{{url('frontend/assets/images/brand/brand-01.png')}}" alt=""></a>
                    </div>
                    <div class="brand-single-item">
                        <a href="#"><img src="{{url('frontend/assets/images/brand/brand-01.png')}}" alt=""></a>
                    </div>
                    <div class="brand-single-item">
                        <a href="#"><img src="{{url('frontend/assets/images/brand/brand-01.png')}}" alt=""></a>
                    </div>
                    <div class="brand-single-item">
                        <a href="#"><img src="{{url('frontend/assets/images/brand/brand-01.png')}}" alt=""></a>
                    </div>
                    <div class="brand-single-item">
                        <a href="#"><img src="{{url('frontend/assets/images/brand/brand-01.png')}}" alt=""></a>
                    </div>
                    <div class="brand-single-item">
                        <a href="#"><img src="{{url('frontend/assets/images/brand/brand-01.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-brand-area end -->
    </div>
</body>
@endsection
</html>