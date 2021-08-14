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
    <link rel="stylesheet" type="text/css" href="/frontend/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="/frontend/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css" />


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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="/frontend/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ĐỒNG HỒ NAM
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="/frontend/#">Action</a>
                                <a class="dropdown-item" href="/frontend/#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/frontend/#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="/frontend/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ĐỒNG HỒ NỮ
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="/frontend/#">Action</a>
                                <a class="dropdown-item" href="/frontend/#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/frontend/#">Something else here</a>
                            </div>
                        </li>
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

<main role="main">

    <!-- Breadcrumb-->
    <section class="breadcrumb h-100 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb my-0 py-0">
                            <li class="breadcrumb-item"><a class="text-dark" href="/frontend//">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a class="text-dark" href="/frontend/#">Đồng hồ nam</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Casio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb-->

    <!-- ORDER Product-->
    <section class="order-product mb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <h3 class="text-center mb-5">THÔNG TIN ĐƠN HÀNG</h3>

                    <h5>1. Danh sách sản phẩm</h5>
                    <div style="width: 100%;overflow-y: hidden;">
                        <table class="table table-bordered" style="overflow-x: scroll; max-width: inherit !important;">
                            <thead class="bg-light">
                            <tr>
                                <th class="text-center" scope="col">TT</th>
                                <th class="text-center" scope="col">Ảnh</th>
                                <th scope="col">Tên SP</th>
                                <th scope="col">Đơn giá</th>
                                <th class="text-center" scope="col">Số lượng</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center" >1</td>
                                <td class="text-center"><img src="/frontend/img/watch/w1.jpg" alt=""></td>
                                <td>Đồng hồ Casio</td>
                                <td>12.000.000đ</td>
                                <td class="text-center"><input class="text-number"  type="number" value="1" width="20" min="1"></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger rounded-0">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" scope="row">2</td>
                                <td class="text-center"><img src="/frontend/img/watch/w2.jpg" alt=""></td>
                                <td>Đồng hồ Casio</td>
                                <td>4.990.000đ</td>
                                <td class="text-center"><input class="text-number" type="number" value="1" size="5" min="1"></td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger rounded-0">Xóa</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <button type="button" class="btn btn-dark rounded-0"> << Tiếp tục mua hàng</button>
                    <button type="button" class="btn btn-danger rounded-0 float-right"> <i class="fa fa-trash"></i> Hủy đơn hàng</button>

                    <h5 class="mt-5 mb-4">2. Thông tin giao hàng</h5>
                    <div class="col-12 col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Khách Hàng</label>
                                <input type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Điện Thoại</label>
                                <input type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa Chỉ</label>
                                <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ghi chú thêm *</label>
                                <textarea class="form-control rounded-0" placeholder="Ví dụ : thời gian giao hàng, địa điểm, đường đi,.."></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary rounded-0">Gửi đặt hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

</main>

<footer class="mt-5"  style="background-image: url('frontend/img/bg/bg1.jpg')">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-12 col-md-3">
                <h5 class="font-weight-bold">ĐỒNG HỒ HẢI PHÒNG</h5>
                <span class="dot-footer text-white mb-3">
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                 <i class="fa fa-circle"></i>
                </span>
                <ul class="list-unstyled text-small mt-2">
                    <li class="mb-2"><a class="text-white" href="/frontend/#">
                            <i class="fa fa-map-marker mr-2 "></i> Số 123 lê lợi ngô quyên hải phòng
                        </a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#"><i class="fa fa-phone mr-2"></i> Tel : 02253.123.456</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#"><i class="fa fa-envelope-o mr-2"></i> donghohaiphong@gmail.com</a></li>
                    <li class="mb-2"><a class="text-white" href="/frontend/#"><i class="fa fa-bank mr-2"></i> www.donghohaiphong.com</a></li>
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
        <p class="col-12 mb-0 text-white py-2 font-weight-bold">BẢN QUYỀN THUỘC VỀ CÔNG TY ĐỒNG HỒ HẢI PHÒNG</p>
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
<script src="/frontend/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/frontend/js/myscript.js"></script>
</body>
</html>
