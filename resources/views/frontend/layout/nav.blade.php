<header class="header">

    <!-- haeader bottom Start -->
    <div class="haeader-bottom-area bg-gren header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-5 col-md-6 ">
                    <div class="logo"><a href="/"><img src="{{url('frontend/assets/images/logo/logo.png')}}" alt=""></a></div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="main-menu-area menu-two_home white_text">
                        <!--  Start Mainmenu Nav-->
                        <nav class="main-navigation text-center">
                            <ul>
                                <li class="active"><a href="/">Home <i class="fa fa-angle-down"></i></a>
                                </li>
                                <li><a href="/shop">Shop <i class="fa fa-angle-down"></i></a>
                                </li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact</a></li>
                                @if(Session::has('Clientid'))
								<li class="has-sub">
									<a href="/logout">Logout</a>
								</li>
							    @endif
							    <li class="has-sub">
							    	<a href="/register">Register</a>
							    </li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-7">
                    <div class="right-blok-box text-white d-flex">
                        <div class="shopping-cart-wrap">
                            <a href="/cart"><i class="icon-basket-loaded"></i></a>
                        </div>

                        <div class="mobile-menu-btn d-block d-lg-none">
                            <div class="off-canvas-btn">
                                <a href="#"><img src="{{url('frontend/assets/images/icon/bg-menu.png')}}" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- haeader bottom End -->
    
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>

            <div class="off-canvas-inner">

                <div class="search-box-offcanvas">
                    <form>
                        <input type="text" placeholder="Search product...">
                        <button class="search-btn"><i class="icon-magnifier"></i></button>
                    </form>
                </div>

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="/">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="/shop">Shop</a>
                            </li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
    
</header>