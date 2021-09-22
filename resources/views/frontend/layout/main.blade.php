<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/frontend/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome/css/font-awesome.min.css" />

    <!-- Custom styles for this template -->
    <link href="/frontend/css/album.css" rel="stylesheet">
</head>

<body>

<header>
    <!-- TOP Header -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <ul class="nav">
                        <li class="nav-item align-middle">
                            <a class="nav-link d-flex align-items-center pl-0"  href="/frontend/#" >
                                <img src="/frontend/img/icon/config.png" class="mr-2" >
                                <span class="align-middle" >Chính sách bảo hành</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="/frontend/#">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="/frontend/#">
                                <img src="/frontend/img/icon/truck.png" class="mr-2"> Vận chuyển
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-sm-12 col-md-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex align-items-center " href="/frontend/#">
                                <img src="/frontend/img/icon/inbox.png" class="mr-2"> donghohaiphong@gmail.com
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark d-flex align-items-center justify-content-end" href="/frontend/#">
                                <img class="mr-2" src="/frontend/img/icon/phone.png">
                                Hotline tư vấn : <span class="text-danger font-weight-bold"> 0123456789</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo  -->
    <section class="logo">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-sm-12 col-md-3 d-block h-100 d-flex align-items-center">
                    <img id="logo" class="card-img" src="/frontend/img/logo/lg2.jpg" style="width: inherit">
                </div>
                <div class="col-12 col-sm-12 col-md-5 h-100 w-100 search">
                    <div class="form-group mb-0 w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class="input-group w-100">
                            <input class="form-control rounded-0" type="text" placeholder="Tìm kiếm sản phẩm" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text border-danger rounded-0 bg-danger text-white " id="basic-addon2"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <small class="suggest position-absolute" style="top: 100px"><span class="font-weight-bold">Từ khóa phổ biến : </span> ĐỒNG HỒ nam, ĐỒNG HỒ nữ,..</small>
                </div>
                <div class="col-12 col-sm-12 col-md-4 d-block cart d-flex align-items-center justify-content-end">
                    <ul class="nav d-flex align-items-center">
                        <li class="guide-cart nav-item">
                            <a class="nav-link  text-dark d-flex align-items-center" href="/frontend/#">
                                <span>Hướng dẫn mua hàng</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="delimited-cart nav-link text-dark" href="/frontend/#">|</a>
                        </li>
                        <li class="nav-item d-flex justify-content-center" style="position: relative">
                            <span style="position: absolute;top: -8px; color: white;background-color: red;width: 20px;height:20px;border-radius: 50%" class="text-center">0</span>
                            <a class="nav-link text-dark text-right d-flex align-items-center" href="/frontend/#">
                                <div style="position: relative">
                                    <img src="/frontend/img/icon/cart.png" class="text-center">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN MENU -->
    <section class="main-menu">
        <nav class="navbar navbar-expand-lg">
            <div class="container h-100">
                <a id="main-menu" class="navbar-brand text-white" href="/frontend/#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars text-light"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav w-100 d-flex justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/frontend/#">
                                TRANG CHỦ
                            </a>
                        </li>
                        <span class="dot-menu text-white position-absolute">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
            </span>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/frontend/#">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="/frontend/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                DANH MỤC SẢN PHẨM
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="/frontend/#">Action</a>
                                <a class="dropdown-item" href="/frontend/#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/frontend/#">Something else here</a>
                            </div>
                        </li>
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle text-white" href="/frontend/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                ĐỒNG HỒ NAM--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item " href="/frontend/#">Action</a>--}}
{{--                                <a class="dropdown-item" href="/frontend/#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="/frontend/#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle text-white" href="/frontend/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                ĐỒNG HỒ NỮ--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item " href="/frontend/#">Action</a>--}}
{{--                                <a class="dropdown-item" href="/frontend/#">Another action</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="/frontend/#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/frontend/#">CHÍNH SÁCH</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/frontend/#">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/frontend/#">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- END MAIN MENU-->
</header>
@yield('main-content')

<footer  style="background-image: url('frontend/img/bg/bg1.jpg')">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-12 col-md-3">
                <h5 class="font-weight-bold">ĐỒNG HỒ THÁI BÌNH</h5>
                <span class="dot-footer text-white mb-3">
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                </span>
                <ul class="list-unstyled text-small mt-2">
                    <li class="mb-2"><a class="text-white" href="/frontend/#">
                            <i class="fa fa-map-marker mr-2 "></i> Trần Hưng Đạo, TP Thái Bình
                        </a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#"><i class="fa fa-phone mr-2"></i> Tel : 01234.567.890</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#"><i class="fa fa-envelope-o mr-2"></i> donghohthaibinh@gmail.com</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#"><i class="fa fa-bank mr-2"></i> www.donghothaibinh.com</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <h5 class="font-weight-bold">SẢN PHẨM</h5>
                <span class="dot-footer text-white mb-3">
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                </span>
                <ul class="list-unstyled text-small mt-2">
                    <li class="mb-2"><a class="text-white" href="/frontend/#">.:: Đồng hồ nam</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#">.:: Đồng hồ nữ</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#">.:: Thương hiệu</a></li>

                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <h5 class="font-weight-bold">CHÍNH SÁCH</h5>
                <span class="dot-footer text-white mb-3">
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                </span>

                <ul class="list-unstyled text-small mt-2">
                    <li class="mb-2"><a class="text-white" href="/frontend/#">.:: Vận chuyển</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#">.:: Bảo hành</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#">.:: Khuyến mại</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#">.:: Đổi trả</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <h5 class="font-weight-bold">BẢN ĐỒ</h5>
                <span class="dot-footer text-white mb-3">
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                </span>
                <ul class="list-unstyled text-small">
                    <li><a class="text-white" href="/frontend/#">Team</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid d-flex align-items-center copyright">
    <div class="container">
        <p class="col-12 mb-0 text-white py-2 font-weight-bold">BẢN QUYỀN THUỘC VỀ CÔNG TY ĐỒNG HỒ THÁI BÌNH</p>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/frontend/js/jquery.slim.min.js" ></script>
<script>window.jQuery || document.write('<script src="/frontend/js/jquery.slim.min.js"><\/script>')</script>
<script src="/frontend/js/popper.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/holder.min.js"></script>
<script src="/frontend/js/jquery.smoothwheel.js"></script>
</body>
</html>
