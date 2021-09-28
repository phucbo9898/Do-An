@extends('frontend.layout.main')

@section('main-content')
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="index.html">HOMe</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>Your shopping cart</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPPING-CART SUMMARY START -->
                    <h2 class="page-title">Shopping-cart summary <span class="shop-pro-item">Your shopping cart contains: 2 products</span></h2>
                    <!-- SHOPPING-CART SUMMARY END -->
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPING-CART-MENU START -->
                    <div class="shoping-cart-menu">
                        <ul class="step">
                            <li class="step-current first">
                                <span>01. Summary</span>
                            </li>
                            <li class="step-todo second">
                                <span>02. Sign in</span>
                            </li>
                            <li class="step-todo third">
                                <span>03. Address</span>
                            </li>
                            <li class="step-todo four">
                                <span>04. Shipping</span>
                            </li>
                            <li class="step-todo last" id="step_end">
                                <span>05. Payment</span>
                            </li>
                        </ul>
                    </div>
                    <!-- SHOPING-CART-MENU END -->
                    <!-- CART TABLE_BLOCK START -->
                    <div class="table-responsive">
                        <!-- TABLE START -->
                        <table class="table table-bordered" id="cart-summary">
                            <!-- TABLE HEADER START -->
                            <thead>
                            <tr>
                                <th class="cart-product">Product</th>
                                <th class="cart-description">Description</th>
                                <th class="cart-avail text-center">Availability</th>
                                <th class="cart-unit text-right">Unit price</th>
                                <th class="cart_quantity text-center">Qty</th>
                                <th class="cart-delete">&nbsp;</th>
                                <th class="cart-total text-right">Total</th>
                            </tr>
                            </thead>
                            <!-- TABLE HEADER END -->
                            <!-- TABLE BODY START -->
                            <tbody>
                            <!-- SINGLE CART_ITEM START -->
                            <tr>
                                <td class="cart-product">
                                    <a href="#"><img alt="Blouse" src="img/product/cart-image1.jpg"></a>
                                </td>
                                <td class="cart-description">
                                    <p class="product-name"><a href="#">Faded Short Sleeves T-shirt</a></p>
                                    <small>SKU : demo_1</small>
                                    <small><a href="#">Size : S, Color : Orange</a></small>
                                </td>
                                <td class="cart-avail"><span class="label label-success">In stock</span></td>
                                <td class="cart-unit">
                                    <ul class="price text-right">
                                        <li class="price">$16.51</li>
                                    </ul>
                                </td>
                                <td class="cart_quantity text-center">
                                    <div class="cart-plus-minus-button">
                                        <input class="cart-plus-minus" type="text" name="qtybutton" value="0">
                                    </div>
                                </td>
                                <td class="cart-delete text-center">
                                                <span>
                                                    <a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                </span>
                                </td>
                                <td class="cart-total">
                                    <span class="price">$16.51</span>
                                </td>
                            </tr>
                            <!-- SINGLE CART_ITEM END -->
                            <!-- SINGLE CART_ITEM START -->
                            <tr>
                                <td class="cart-product">
                                    <a href="#"><img alt="Blouse" src="img/product/cart-image2.jpg"></a>
                                </td>
                                <td class="cart-description">
                                    <p class="product-name"><a href="#">Blouse</a></p>
                                    <small>SKU : demo_2</small>
                                    <small><a href="#">Size : S, Color : Black</a></small>
                                </td>
                                <td class="cart-avail"><span class="label label-success">In stock</span></td>
                                <td class="cart-unit">
                                    <ul class="price text-right">
                                        <li class="price special-price">$24.00</li>
                                        <li class="price-percent-reduction small">&nbsp;-3%&nbsp;</li>
                                        <li class="old-price">$27.00</li>
                                    </ul>
                                </td>
                                <td class="cart_quantity text-center">
                                    <div class="cart-plus-minus-button">
                                        <input class="cart-plus-minus" type="text" name="qtybutton" value="0">
                                    </div>
                                </td>
                                <td class="cart-delete text-center">
                                    <a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td class="cart-total">
                                    <span class="price">$22.95</span>
                                </td>
                            </tr>
                            <!-- SINGLE CART_ITEM END -->
                            <!-- SINGLE CART_ITEM START -->
                            <tr>
                                <td class="cart-product">
                                    <a href="#"><img alt="Blouse" src="img/product/cart-image3.jpg"></a>
                                </td>
                                <td class="cart-description">
                                    <p class="product-name"><a href="#">Printed Summer Dress</a></p>
                                    <small>SKU : demo_5</small>
                                    <small><a href="#">Size : M, Color : Blue</a></small>
                                </td>
                                <td class="cart-avail"><span class="label label-success">In stock</span></td>
                                <td class="cart-unit">
                                    <ul class="price text-right">
                                        <li class="price special-price">$30.45</li>
                                        <li class="price-percent-reduction small">&nbsp;-7.05%&nbsp;</li>
                                        <li class="old-price">$37.50</li>
                                    </ul>
                                </td>
                                <td class="cart_quantity text-center">
                                    <div class="cart-plus-minus-button">
                                        <input class="cart-plus-minus" type="text" name="qtybutton" value="0">
                                    </div>
                                </td>
                                <td class="cart-delete text-center">
                                    <a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td class="cart-total">
                                    <span class="price">$30.45</span>
                                </td>
                            </tr>
                            <!-- SINGLE CART_ITEM END -->
                            </tbody>
                            <!-- TABLE BODY END -->
                            <!-- TABLE FOOTER START -->
                            <tfoot>
                            <tr class="cart-total-price">
                                <td class="cart_voucher" colspan="3" rowspan="4"></td>
                                <td class="text-right" colspan="3">Total products (tax excl.)</td>
                                <td id="total_product" class="price" colspan="1">$76.46</td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3">Total shipping</td>
                                <td id="total_shipping" class="price" colspan="1">$5.00</td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3">Total vouchers (tax excl.)</td>
                                <td class="price" colspan="1">$0.00</td>
                            </tr>
                            <tr>
                                <td class="total-price-container text-right" colspan="3">
                                    <span>Total</span>
                                </td>
                                <td id="total-price-container" class="price" colspan="1">
                                    <span id="total-price">$76.46</span>
                                </td>
                            </tr>
                            </tfoot>
                            <!-- TABLE FOOTER END -->
                        </table>
                        <!-- TABLE END -->
                    </div>
                    <!-- CART TABLE_BLOCK END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="first_item primari-box mycartaddress-info">
                        <!-- SINGLE ADDRESS START -->
                        <ul class="address">
                            <li>
                                <h3 class="page-subheading box-subheading">
                                    Delivery address (BootExperts Office)
                                </h3>
                            </li>
                            <li><span class="address_name">BootExperts</span></li>
                            <li><span class="address_company">Web development Company</span></li>
                            <li><span class="address_address1">Bonossri</span></li>
                            <li><span class="address_address2">D-Block</span></li>
                            <li><span class="">Rampura</span></li>
                            <li><span class="">Dhaka</span></li>
                            <li><span class="address_phone">+880 1735161598</span></li>
                            <li><span class="address_phone_mobile">+880 1975161598</span></li>
                        </ul>
                        <!-- SINGLE ADDRESS END -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="second_item primari-box mycartaddress-info">
                        <!-- SINGLE ADDRESS START -->
                        <ul class="address">
                            <li>
                                <h3 class="page-subheading box-subheading">
                                    Invoice address (BootExperts Home)
                                </h3>
                            </li>
                            <li><span class="address_name">BootExperts</span></li>
                            <li><span class="address_company">Web development Company</span></li>
                            <li><span class="address_address1">Dhaka</span></li>
                            <li><span class="address_address2">Bonossri</span></li>
                            <li><span class="">Dhaka-1205</span></li>
                            <li><span class="">Rampura</span></li>
                            <li><span class="address_phone">+880 1735161598</span></li>
                            <li><span class="address_phone_mobile">+880 1975161598</span></li>
                        </ul>
                        <!-- SINGLE ADDRESS END -->
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- RETURNE-CONTINUE-SHOP START -->
                    <div class="returne-continue-shop">
                        <a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
                        <a href="checkout-signin.html" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!-- RETURNE-CONTINUE-SHOP END -->
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
    <!-- BRAND-CLIENT-AREA START -->
    <section class="brand-client-area">
        <div class="container">
            <div class="row">
                <!-- BRAND-CLIENT-ROW START -->
                <div class="brand-client-row">
                    <div class="center-title-area">
                        <h2 class="center-title">BRAND & CLIENTS</h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <!-- CLIENT-CAROUSEL START -->
                            <div class="client-carousel">
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/1.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/2.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/4.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/5.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/1.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/2.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/4.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/5.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/1.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/3.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/4.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                                <!-- CLIENT-SINGLE START -->
                                <div class="item">
                                    <div class="single-client">
                                        <a href="#">
                                            <img src="img/brand/5.png" alt="brand-client" />
                                        </a>
                                    </div>
                                </div>
                                <!-- CLIENT-SINGLE END -->
                            </div>
                            <!-- CLIENT-CAROUSEL END -->
                        </div>
                    </div>
                </div>
                <!-- BRAND-CLIENT-ROW END -->
            </div>
        </div>
    </section>
    <!-- BRAND-CLIENT-AREA END -->
    <!-- COMPANY-FACALITY START -->
    <section class="company-facality">
        <div class="container">
            <div class="row">
                <div class="company-facality-row">
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">FREE SHIPPING</h3>
                                <span>on order over $100</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">24/7 SUPPORT</h3>
                                <span>online consultations</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">DAILY UPDATES</h3>
                                <span>Check out store for latest</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                    <!-- SINGLE-FACALITY START -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-facality">
                            <div class="facality-icon">
                                <i class="fa fa-refresh"></i>
                            </div>
                            <div class="facality-text">
                                <h3 class="facality-heading-text">30-DAY RETURNS</h3>
                                <span>moneyback guarantee</span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-FACALITY END -->
                </div>
            </div>
        </div>
    </section>
    <!-- COMPANY-FACALITY END -->
    <!-- FOOTER-TOP-AREA START -->
    <section class="footer-top-area">
        <div class="container">
            <div class="footer-top-container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <!-- FOOTER-TOP-LEFT START -->
                        <div class="footer-top-left">
                            <!-- NEWSLETTER-AREA START -->
                            <div class="newsletter-area">
                                <h2>Newsletter</h2>
                                <p>Subscribe to our mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                                <form action="#">
                                    <div class="form-group newsletter-form-group">
                                        <input type="text" class="form-control newsletter-form" placeholder="Enter your e-mail">
                                        <input type="submit" class="newsletter-btn" name="submit" value="Subscribe" />
                                    </div>
                                </form>
                            </div>
                            <!-- NEWSLETTER-AREA END -->
                            <!-- ABOUT-US-AREA START -->
                            <div class="about-us-area">
                                <h2>About Us</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                            <!-- ABOUT-US-AREA END -->
                            <!-- FLLOW-US-AREA START -->
                            <div class="fllow-us-area">
                                <h2>Follow us</h2>
                                <ul class="flow-us-link">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <!-- FLLOW-US-AREA END -->
                        </div>
                        <!-- FOOTER-TOP-LEFT END -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <!-- FOOTER-TOP-RIGHT-1 START -->
                        <div class="footer-top-right-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm">
                                    <!-- STATICBLOCK START -->
                                    <div class="staticblock">
                                        <h2>static block</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s<br />when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <!-- STATICBLOCK END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <!-- STORE-INFORMATION START -->
                                    <div class="Store-Information">
                                        <h2>Store Information</h2>
                                        <ul>
                                            <li>
                                                <div class="info-lefticon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <div class="info-text">
                                                    <p>My Company, 42 avenue des Champs Elysées 75000 Paris France </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="info-lefticon">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                                <div class="info-text call-lh">
                                                    <p>Call us now : 0123-456-789</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="info-lefticon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                                <div class="info-text">
                                                    <p>Email : <a href="mailto:sales@yourcompany.com"><i class="fa fa-angle-double-right"></i> sales@yourcompany.com</a></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- STORE-INFORMATION END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <!-- GOOGLE-MAP-AREA START -->
                                    <div class="google-map-area">
                                        <div class="google-map">
                                            <div id="googleMap" style="width:100%;height:150px;"></div>
                                        </div>
                                    </div>
                                    <!-- GOOGLE-MAP-AREA END -->
                                </div>
                            </div>
                        </div>
                        <!-- FOOTER-TOP-RIGHT-1 END -->
                        <div class="footer-top-right-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <!-- FOTTER-MENU-WIDGET START -->
                                    <div class="fotter-menu-widget">
                                        <div class="single-f-widget">
                                            <h2>Categories</h2>
                                            <ul>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Women </a></li>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Men</a></li>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>clothing</a></li>
                                                <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>kids</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FOTTER-MENU-WIDGET END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <!-- FOTTER-MENU-WIDGET START -->
                                    <div class="fotter-menu-widget">
                                        <div class="single-f-widget">
                                            <h2>Information</h2>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Specials</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>New products</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Best sellers</a></li>
                                                <li><a href="contact-us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FOTTER-MENU-WIDGET END -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <!-- FOTTER-MENU-WIDGET START -->
                                    <div class="fotter-menu-widget">
                                        <div class="single-f-widget">
                                            <h2>My account</h2>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My orders</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My credit slips</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My addresses</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>My personal info</a></li>
                                                <li><a href="#"><i class="fa fa-angle-double-right"></i>Sign out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FOTTER-MENU-WIDGET END -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <!-- PAYMENT-METHOD START -->
                                    <div class="payment-method">
                                        <img class="img-responsive pull-right" src="img/payment.png" alt="payment-method" />
                                    </div>
                                    <!-- PAYMENT-METHOD END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
