<!--footer-->
<div class="footer_bottom section">
    <div class="agileits-w3layouts-footer">
        <div class="container">
            <div class="col-md-4 w3-agile-grid">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum urna non nisi ornare, condimentum iaculis ipsum blandit. Duis auctor vulputate metus nec luctus.</p>
                <div class="w3_agileits_social_media team_agile_w3l team footer">
                    <ul class="social-icons3">

                        <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="image-agileits">
                    <img src="images/f1.jpg" alt="" class="img-r">
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 w3-agile-grid mid-w3-add">
                <h5>Address</h5>
                <div class="w3-address">
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Phone Number</h6>
                            <p>+1 234 567 8901</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Email Address</h6>
                            <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Location</h6>
                            <p>Broome St, NY 10002, Canada.
                                <span>Telephone : +00 111 222 3333</span>
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-right w3-agile-grid">
                <div class="agile_footer_grid">
                    <h5>Latest News</h5>
                    <ul class="agileits_w3layouts_footer_grid_list">
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque vulputate </a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal1">Dolor amet sed quam vitae</a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque, vulputate </a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal1">Dolor amet sed quam vitae</a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="#" data-toggle="modal" data-target="#myModal1">Lorem ipsum neque, vulputate </a>
                        </li>
                    </ul>
                </div>
                <h5>Stay in Touch</h5>
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Email Id" required="">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="copyright">
        <p>© 2017 Prezzie. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Prezzie</h4>
                <img src="images/f2.jpg" alt=" " class="img-responsive">
                <h5>Integer lorem ipsum dolor sit amet </h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->

<!--//footer-->

<!-- js -->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager:true,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- for-Clients -->
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<!-- requried-jsfiles-for owl -->
<script>
    $(document).ready(function() {
        $("#owl-demo2").owlCarousel({
            items : 1,
            lazyLoad : false,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->
<!-- //for-Clients -->
<!-- cart-js -->
<script src="{{ asset('js/minicart.min.js') }}"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>
<!-- //cart-js -->
<!-- video-bg -->
<script src="{{ asset('js/jquery.vide.min.js') }}"></script>
<!-- //video-bg -->
<!-- Nice scroll -->
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- //Nice scroll -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
</body>
</html>