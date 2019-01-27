<div class="header-outs" id="home">
    <div class="header-bar">
        <div class="info-top-grid">
            <div class="info-contact-agile">
                <ul>
                    <li>
                        <span class="fa fa-phone-volume"></span>
                        <p>+(000)123 4565 32</p>
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        <p><a href="mailto:info@example.com">info@example1.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="hedder-up row">
                <div class="col-lg-3 col-md-3 logo-head">
                    <h1><a class="navbar-brand" href="{{ url('/') }}">Coupons Stock</a></h1>
                </div>
                <div class="col-lg-5 col-md-6 search-right">
                    <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 text-right">
                    <div class="cart-icons">
                        <ul class="navbar-collapse">
                            @if (Route::has('login'))
                                @if (Auth::check())
                                    <li class="">
                                        <a href="{{ url('/home') }}">Home</a>
                                    </li>
                                @else
                                    <li class="">
                                        <a href="{{ url('/login') }}">Login</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ url('/register') }}">Register</a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('toy-template.navbar')
    </div>
    <!-- Slideshow 4 -->
    <div class="slider text-center">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="slider-img one-img">
                        <div class="container">
                            <div class="slider-info ">
                                <h5>Pick The Best Toy For <br>Your Kid</h5>
                                <div class="bottom-info">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                                </div>
                                <div class="outs_more-buttn">
                                    <a href="about.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img two-img">
                        <div class="container">
                            <div class="slider-info ">
                                <h5>Sort Toys And Teddy bears<br>For Kids</h5>
                                <div class="bottom-info">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                                </div>
                                <div class="outs_more-buttn">
                                    <a href="about.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img three-img">
                        <div class="container">
                            <div class="slider-info">
                                <h5>Best Toys And Dolls<br> For Kids</h5>
                                <div class="bottom-info">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                                </div>
                                <div class="outs_more-buttn">
                                    <a href="about.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- This is here just to demonstrate the callbacks -->
        <!-- <ul class="events">
           <li>Example 4 callback events</li>
           </ul>-->
        <div class="clearfix"></div>
     </div>
</div>


