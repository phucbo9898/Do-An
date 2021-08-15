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
                                <li class="breadcrumb-item"><a class="text-dark" href="frontend//">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="frontend/#">Đồng hồ nam</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb-->

        <!-- Main Content-->
        <section class="news mb-4 mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="title-related">TIN TỨC</h5>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n1.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n2.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n3.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n4.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n2.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n3.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n4.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="card mb-4">
                            <img class="card-img-top" src="frontend/img/news/n1.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="delimited position-absolute w-100 h-50 border-right mt-5"></div>
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
                        <a class="page-link" href="frontend/#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="frontend/#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="frontend/#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="frontend/#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="frontend/#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>


    </main>
@endsection
