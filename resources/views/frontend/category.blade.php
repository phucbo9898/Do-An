@extends('frontend.layout.main')

@section('main-content')
    <main role="main">

        <!-- Breadcrumb-->
        <section class="breadcrumb h-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb my-0 py-0">
                                <li class="breadcrumb-item"><a class="text-dark" href="/frontend//">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="/frontend/#">Đồng hồ nam</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb-->

        <!-- Main Content-->
        <section class="list-product mb-4 mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="title-related">DANH SÁCH SẢN PHẨM</h5>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="card mb-4 full-product border-right position-relative text-center">
                            <img class="card-img-top" src="/frontend/img/watch/w1.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <p class="mb-1">ĐỒNG HỒ Longines</p>
                                <p class="card-text mb-0">Leather open cart</p>
                                <div class="price position-absolute ">
                                    <a href="/frontend/#" class="card-link old-price">8.680.000đ</a>
                                    <a href="/frontend/#" class="card-link product-price text-center align-self-end">6.900.000đ</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-6 col-md-3 ">
                        <div class="card mb-4 text-center full-product  border-right">
                            <img class="card-img-top text-center img-fluid" src="/frontend/img/watch/w2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="mb-1">ĐỒNG HỒ BREITING</p>
                                <p class="card-text">Leather open cart</p>
                                <div class="price position-absolute">
                                    <a href="/frontend/#" class="card-link old-price">9.780.000đ</a>
                                    <a href="/frontend/#" class="card-link product-price">6.900.000đ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4 text-center full-product ">
                            <img class="card-img-top text-center img-fluid" src="/frontend/img/watch/w3.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <p class="mb-1">ĐỒNG HỒ MONBLANC</p>
                                <p class="card-text">Automatic cell</p>

                                <div class="price position-absolute">
                                    <a href="/frontend/#" class="card-link old-price">3.880.000đ</a>
                                    <a href="/frontend/#" class="card-link product-price">2.900.000đ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4 text-center full-product">
                            <img class="card-img-top" src="/frontend/img/watch/w4.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <p class="mb-1">ĐỒNG HỒ OMEGA</p>
                                <p class="card-text">Class Automatic</p>
                                <div class="price position-absolute">
                                    <a href="/frontend/#" class="card-link old-price">11.880.000dd</a>
                                    <a href="/frontend/#" class="card-link product-price">9.900.000đ</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 my-2"></div>

                    <div class="col-6 col-md-3">
                        <div class="card mb-4 text-center full-product ">
                            <img class="card-img-top img-fluid" src="/frontend/img/watch/w5.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <p class="mb-1">ĐỒNG HỒ TAG HUE</p>
                                <p class="card-text">Class Automatic cell</p>

                                <div class="price position-absolute">
                                    <a href="/frontend/#" class="card-link old-price">22.880.000đ</a>
                                    <a href="/frontend/#" class="card-link product-price">20.990.000đ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4 text-center full-product ">
                            <img class="card-img-top img-fluid" src="/frontend/img/watch/w6.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <p class="mb-1">ĐỒNG HỒ LONGILTECT</p>
                                <p class="card-text">Ball Automatic cell</p>

                                <div class="price position-absolute">
                                    <a href="/frontend/#" class="card-link old-price">8.080.000đ</a>
                                    <a href="/frontend/#" class="card-link product-price">7.990.000đ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4  text-center full-product ">
                            <img class="card-img-top img-fluid" src="/frontend/img/watch/w7.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="mb-1">ĐỒNG HỒ PIAGET</p>
                                <p class="card-text">Luxy Automatic cell</p>
                                <div class="price position-absolute">
                                    <a href="/frontend/#" class="card-link old-price">18.080.000đ</a>
                                    <a href="/frontend/#" class="card-link product-price">17.990.000đ</a>
                                </div>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>

                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4  text-center full-product ">
                            <img class="card-img-top img-fluid" src="/frontend/img/watch/w8.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="mb-1">ĐỒNG HỒ PIAGET</p>
                                <p class="card-text">Luxy Automatic cell</p>

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
        <!-- END -->

        <div class="container mb-5">
            <!-- Pagination -->
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="/frontend/#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="/frontend/#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="/frontend/#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="/frontend/#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="/frontend/#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>


    </main>
@endsection
