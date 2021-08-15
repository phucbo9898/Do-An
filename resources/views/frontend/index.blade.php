@extends('frontend.layout.main')

@section('main-content')
    <main role="main">

    <!-- SLIDER-->
    <section class="slider mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="mw-100 d-block img-fluid" src="/frontend/img/slider/slider.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="mw-100 d-block img-fluid" src="/frontend/img/slider/slider2.png" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="/frontend/#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="/frontend/#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- End SLIDER-->

    <!-- BRAND-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-2">
                    <div class="card border-0">
                        <img class="card-img" src="/frontend/img/thuong-hieu/th1.jpg" alt="Card image">
                    </div>
                </div>

                <div class="col-4 col-sm-4 col-md-2">
                    <div class="card border-0">
                        <img class="card-img" src="/frontend/img/thuong-hieu/th2.jpg" alt="Card image">
                    </div>
                </div>

                <div class="col-4 col-xs-4 col-sm-4 col-md-2">
                    <div class="card border-0">
                        <img class="card-img" src="/frontend/img/thuong-hieu/th3.jpg" alt="Card image">
                    </div>
                </div>

                <div class="col-4 col-xs-4 col-sm-4 col-md-2">
                    <div class="card border-0">
                        <img class="card-img" src="/frontend/img/thuong-hieu/th4.jpg" alt="Card image">
                    </div>
                </div>

                <div class="col-4 col-xs-4 col-sm-4 col-md-2">
                    <div class="card border-0">
                        <img class="card-img" src="/frontend/img/thuong-hieu/th5.jpg" alt="Card image">
                    </div>
                </div>

                <div class="col-4 col-sm-4 col-md-2">
                    <div class="card border-0">
                        <img class="card-img" src="/frontend/img/thuong-hieu/th6.jpg" alt="Card image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BRAND-->

    <!-- TOP 3 SAN PHAM-->
    <section class="special-product mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-2">
                    <div class="card bg-dark text-white bg-dark border-0">
                        <img class="card-img rounded-0 " src="/frontend/img/product/p1.png" alt="Card image" style="height: inherit">
                        <div class="card-img-overlay">
                            <h3 class="card-title text-right font-weight-bold">LUXURY</h3>
                            <a href="/frontend/#" class="btn btn-primary float-right border-light  bg-transparent border-radius-24">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 pr-1">
                    <div class="card bg-dark text-white bg-dark border-0">
                        <img class="card-img rounded-0 " src="/frontend/img/product/p2.png" alt="Card image" style="height: inherit">
                        <div class="card-img-overlay">
                            <h5 class="card-title font-weight-bold">MEN'S WATCH</h5>
                            <a href="/frontend/#" class="btn btn-primary border-light  bg-transparent border-radius-24">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 pl-1">
                    <div class="card bg-dark text-white bg-dark border-0">
                        <img class="card-img rounded-0 " src="/frontend/img/product/p3.png" alt="Card image" style="height: inherit">
                        <div class="card-img-overlay">
                            <h5 class="card-title font-weight-bold">WOOMEN'S WATCH</h5>
                            <a href="/frontend/#" class="btn btn-primary border-light  bg-transparent border-radius-24">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TOP PRODUCT SPECIAL -->

    <!-- SAN PHAM NOI BAT-->
    <section class="list-product mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <ul class="nav mb-4">
                        <li class="nav-item nav-item-1 h-100 d-flex align-items-center">
                            <a class="nav-link text-white px-4 nav-menu-1 title-list-product" href="/frontend/#">SẢN PHẨM NỔI BẬT</a>
                        </li>
                        <li class="nav-item nav-item-2 d-flex align-items-center">
                            <a class="nav-link text-white nav-menu-2 text-center" href="/frontend/#">"lorem ipsum is simply dummy text of the printing and typesetting industry"</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card mb-4 full-product border-0 border-right position-relative text-center">
                        <img class="card-img-top" src="/frontend/img/watch/w1.jpg" alt="Card image cap">
                        <div class="card-body ">
                            <p class="mb-1">ĐỒNG HỒ Longines</p>
                            <p class="card-text mb-0">Leather open cart</p>
                            <p class="dot-product mb-0">.....</p>

                            <div class="price position-absolute ">
                                <a href="/frontend/#" class="card-link old-price">8.680.000đ</a>
                                <a href="/frontend/#" class="card-link product-price text-center align-self-end">6.900.000đ</a>
                            </div>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3 ">
                    <div class="card mb-4 text-center full-product border-0 border-right">
                        <img class="card-img-top text-center img-fluid" src="/frontend/img/watch/w2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="mb-1">ĐỒNG HỒ BREITING</p>
                            <p class="card-text mb-1">Leather open cart</p>
                            <p class="dot-product mb-0">.....</p>

                            <div class="price position-absolute">
                                <a href="/frontend/#" class="card-link old-price">9.780.000đ</a>
                                <a href="/frontend/#" class="card-link product-price">6.900.000đ</a>
                            </div>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4 text-center full-product border-0">
                        <img class="card-img-top text-center img-fluid" src="/frontend/img/watch/w3.jpg" alt="Card image cap">
                        <div class="card-body ">
                            <p class="mb-1">ĐỒNG HỒ MONBLANC</p>
                            <p class="card-text mb-1">Automatic cell</p>
                            <p class="dot-product mb-0">.....</p>

                            <div class="price position-absolute">
                                <a href="/frontend/#" class="card-link old-price">3.880.000đ</a>
                                <a href="/frontend/#" class="card-link product-price">2.900.000đ</a>
                            </div>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4 text-center full-product border-0">
                        <img class="card-img-top" src="/frontend/img/watch/w4.jpg" alt="Card image cap">
                        <div class="card-body ">
                            <p class="mb-1">ĐỒNG HỒ OMEGA</p>
                            <p class="card-text mb-1">Class Automatic</p>
                            <p class="dot-product mb-0">.....</p>

                            <div class="price position-absolute">
                                <a href="/frontend/#" class="card-link old-price">11.880.000dd</a>
                                <a href="/frontend/#" class="card-link product-price">9.900.000đ</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 my-2"></div>

                <div class="col-6 col-md-3">
                    <div class="card mb-4 text-center full-product border-0">
                        <img class="card-img-top img-fluid" src="/frontend/img/watch/w5.jpg" alt="Card image cap">
                        <div class="card-body ">
                            <p class="mb-1">ĐỒNG HỒ TAG HUE</p>
                            <p class="card-text mb-1">Class Automatic cell</p>
                            <p class="dot-product mb-0">.....</p>

                            <div class="price position-absolute">
                                <a href="/frontend/#" class="card-link old-price">22.880.000đ</a>
                                <a href="/frontend/#" class="card-link product-price">20.990.000đ</a>
                            </div>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4 text-center full-product border-0">
                        <img class="card-img-top img-fluid" src="/frontend/img/watch/w6.jpg" alt="Card image cap">
                        <div class="card-body ">
                            <p class="mb-1">ĐỒNG HỒ LONGILTECT</p>
                            <p class="card-text mb-1">Ball Automatic cell</p>
                            <p class="dot-product mb-0">.....</p>
                            <div class="price position-absolute">
                                <a href="/frontend/#" class="card-link old-price">8.080.000đ</a>
                                <a href="/frontend/#" class="card-link product-price">7.990.000đ</a>
                            </div>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4  text-center full-product border-0">
                        <img class="card-img-top img-fluid" src="/frontend/img/watch/w7.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="mb-1">ĐỒNG HỒ PIAGET</p>
                            <p class="card-text mb-1">Luxy Automatic cell</p>
                            <p class="dot-product mb-0">.....</p>
                            <div class="price position-absolute">
                                <a href="/frontend/#" class="card-link old-price">18.080.000đ</a>
                                <a href="/frontend/#" class="card-link product-price">17.990.000đ</a>
                            </div>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>

                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4  text-center full-product border-0">
                        <img class="card-img-top img-fluid" src="/frontend/img/watch/w8.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="mb-1">ĐỒNG HỒ PIAGET</p>
                            <p class="card-text mb-1">Luxy Automatic cell</p>
                            <p class="dot-product mb-0">.....</p>
                            <div class="price position-absolute">
                                <a href="/frontend/#" class="card-link old-price">18.080.000đ</a>
                                <a href="/frontend/#" class="card-link product-price">17.990.000đ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END LIST PRODUCT-->

    <!-- NEW PRODUCT-->
    <section class="list-product mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav mb-4">
                        <li class="nav-item nav-item-1 h-100 d-flex align-items-center">
                            <a class="nav-link text-white px-4 nav-menu-1 title-list-product" href="/frontend/#">SẢN PHẨM MỚI</a>
                        </li>
                        <li class="nav-item nav-item-2 d-flex align-items-center">
                            <a class="nav-link text-white nav-menu-2 text-center" href="/frontend/#">"lorem ipsum is simply dummy text of the printing and typesetting industry"</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card mb-4 border-0 text-center full-product">
                        <img class="card-img-top" src="/frontend/img/watch/w1.jpg" alt="Card image cap">
                        <div class="card-body ">
                            <p class="mb-1">ĐỒNG HỒ Longines</p>
                            <p class="card-text mb-0">Christian automatic stell</p>
                            <p class="dot-product mb-0">.....</p>
                            <a href="/frontend/#" class="card-link price position-absolute product-price">6.900.000</a>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4 border-0 full-product">
                        <img class="card-img-top" src="/frontend/img/watch/w2.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="mb-1">ĐỒNG HỒ BREITING</p>
                            <p class="card-text mb-0">Leather open cart</p>
                            <p class="dot-product mb-0">.....</p>
                            <a href="/frontend/#" class="card-link price position-absolute product-price">6.900.000</a>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4 border-0 full-product">
                        <img class="card-img-top" src="/frontend/img/watch/w3.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="mb-1">ĐỒNG HỒ MONBLANC</p>
                            <p class="card-text mb-0">Automatic cell</p>
                            <p class="dot-product mb-0">.....</p>
                            <a href="/frontend/#" class="card-link price position-absolute  product-price">2.900.000</a>
                        </div>
                        <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-4 border-0 full-product">
                        <img class="card-img-top" src="/frontend/img/watch/w4.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="mb-1">ĐỒNG HỒ OMEGA</p>
                            <p class="card-text mb-0">Class Automatic cell</p>
                            <p class="dot-product mb-0">.....</p>
                            <a href="/frontend/#" class="card-link price position-absolute  product-price">9.900.000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END-->

    <!-- LIST PRODUCT OGIVAL-->
    <section class="list-product mb-4">
        <div class="container">
            <!-- Header-->
            <div class="row">
                <div class="col-12 col-md-12">
                    <ul class="nav mb-4">
                        <li class="nav-item nav-item-1 h-100 d-flex align-items-center">
                            <a class="nav-link text-white px-5 nav-menu-1 title-list-product" href="/frontend/#">OGIVAL</a>
                        </li>
                        <li class="nav-item nav-item-2">
                            <a class="nav-link text-white nav-menu-2 text-center d-flex align-items-center" href="/frontend/#">"lorem ipsum is simply dummy text of the printing and typesetting industry"</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End header-->

            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="card mb-4 adv-lg">
                        <img class="card-img" src="/frontend/img/adv/adv1.jpg" alt="Card image" style="height: inherit">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w9.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text mb-1">ĐỒNG HỒ PIAGET</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">6.900.000đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w10.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text mb-1">ĐỒNG HỒ PIAGET</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">6.900.000đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w11.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text mb-1">ĐỒNG HỒ PIAGET</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">7.900.000đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w11.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text mb-1">ĐỒNG HỒ PIAGET</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">7.700.000đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w9.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text mb-1">ĐỒNG HỒ PIAGET</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">7.700.000đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w10.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text mb-1">ĐỒNG HỒ PIAGET</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">8.600.000đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END LIST PRODUCT-->

    <!-- LIST PRODUCT olympia -->
    <section class="list-product mb-4">
        <div class="container">
            <!-- Header-->
            <div class="row">
                <div class="col-12 col-md-12">
                    <ul class="nav mb-4">
                        <li class="nav-item nav-item-1 h-100 d-flex align-items-center">
                            <a class="nav-link text-white px-5 nav-menu-1 title-list-product" href="/frontend/#">OLYMPIA</a>
                        </li>
                        <li class="nav-item nav-item-2 d-flex align-items-center">
                            <a class="nav-link text-white nav-menu-2 text-center" href="/frontend/#">"lorem ipsum is simply dummy text of the printing and typesetting industry"</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End header-->

            <div class="row">
                <div class="col-12 col-sm-12 col-md-7">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w9.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">4.990.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w10.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">6.800.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w11.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">3.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w11.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">6.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w9.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">6.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w10.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">2.590.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <div class="card adv-lg">
                        <img class="card-img" src="/frontend/img/adv/adv2.jpg" alt="Card image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END LIST PRODUCT OGIVAL-->

    <!-- OGIVAL -->
    <section class="list-product mb-4">
        <div class="container">
            <!-- Header-->
            <div class="row">
                <div class="col-12 col-md-12">
                    <ul class="nav mb-4">
                        <li class="nav-item nav-item-1 h-100 d-flex align-items-center">
                            <a class="nav-link text-white px-5 nav-menu-1 title-list-product" href="/frontend/#">OGIVAL</a>
                        </li>
                        <li class="nav-item nav-item-2 d-flex align-items-center">
                            <a class="nav-link text-white nav-menu-2 text-center " href="/frontend/#">"lorem ipsum is simply dummy text of the printing and typesetting industry"</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End header-->

            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="card mb-4 adv-lg">
                        <img class="card-img" src="/frontend/img/adv/adv3.jpg" alt="Card image">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w12.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">6.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w13.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">16.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 ">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w11.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">26.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w11.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">6.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w9.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">5.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="card mb-4 border-0 small-product">
                                <img class="card-img-top" src="/frontend/img/watch/w10.jpg" alt="Card image cap">
                                <div class="card-body px-0 text-center ">
                                    <p class="card-text font-weight-bold mb-0">Christian automatic stell</p>
                                    <div class="price position-absolute ">
                                        <a href="/frontend/#" class="card-link product-price">8.900.000 đ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OGIVAL -->


    <!-- Advertisement -->
    <section class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card ">
                        <img class="card-img" src="/frontend/img/adv/adv4.jpg" alt="Card image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Advertisement -->

    <!-- NEWS-->
    <section class="news mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top" src="/frontend/img/news/n1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title ">ĐỒNG HỒ DOXA D139</h5>
                            <p class="card-text">Kể từ đó, dòng ĐỒNG HỒ này không ngừng được biết đến trong giới sưu tập bởi ..</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top" src="/frontend/img/news/n2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title ">ĐỒNG HỒ Longines</h5>
                            <p class="card-text">Kể từ đó, dòng ĐỒNG HỒ này không ngừng được biết đến trong giới sưu tập bởi ..</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top" src="/frontend/img/news/n3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title ">ĐỒNG HỒ Longines</h5>
                            <p class="card-text">Kể từ đó, dòng ĐỒNG HỒ này không ngừng được biết đến trong giới sưu tập bởi ..</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card mb-4">
                        <img class="card-img-top" src="/frontend/img/news/n4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title ">ĐỒNG HỒ Longines</h5>
                            <p class="card-text">Kể từ đó, dòng ĐỒNG HỒ này không ngừng được biết đến trong giới sưu tập bởi ..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END NEWS-->

</main>
@endsection
