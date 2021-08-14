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

    <!-- Detail Product-->
    <section class="detail-product mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-related">CHI TIẾT SẢN PHẨM</h5>
                    <hr>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-5">
                    <div class="w-100 h-auto text-center" style="border: 1px solid #eee">
                        <img class="" src="/frontend/img/watch/w2.jpg" alt="Card image">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h4>Mercedes GLS 350 d</h4>
                    <p>Giá bán : <span class="text-danger">3.400.000 đ</span></p>
                    <p>Bảo hành : 12 tháng</p>
                    <p>Tình trạng : Còn hàng</p>

                    <hr>
                    <div class="order-cart">
                        <form class="form-inline" action="/site/AddCart?product_cart=140" method="GET">
                            <input type="hidden" value="140" name="product_cart">
                            <div class="form-group mr-sm-3 mb-2">
                                <label for="inputPassword2" class="mr-2">Số lượng</label>
                                <input type="number" class="form-control" name="quantity_cart" value="1" size="20">
                            </div>
                            <button type="submit" class="btn btn-secondary mb-2 btn-order">Đặt mua</button>
                        </form>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        Gọi đặt mua : 1900.8090
                    </small>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="/frontend/#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">CHI TIẾT SẢN PHẨM</a>
                            <a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="/frontend/#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">CHÍNH SÁCH BẢO HÀNG</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <br>
                            <p>Khác với người Pháp bị ám ảnh bởi đồng hồ siêu mỏng, người Thụy Sĩ chuyên làm đồng hồ đẹp như trang sức, từ lâu, một chiếc đồng hồ Đức cứng cáp và thực dụng luôn được xem là biểu tượng của đàn ông đích thực. </p>
                            <p></p><p style="text-align:justify">Một trong những chuyện thành công nhất mọi thời đại là khi người nói nhắc đến "đồng hồ" - người nghe nghĩ ngay đến "Thụy Sĩ". Song, chuyện không phải lúc nào cũng như vậy. Đây là lý do tại sao lần tới mua đồng hồ, bạn nên cân nhắc chọn một chiếc đồng hồ Đức, thay vì mua <a href="/frontend/http://dangquangwatch.vn/"><strong>đồng hồ Thụy Sĩ</strong></a>.</p>

                            <p style="text-align:center"><img alt="đồng hồ bruno BS-17-13043-221" src="/frontend/img/watch/w1.jpg" ></p>

                            <p style="text-align:justify"><br>
                                <br>
                                50 năm trước, nghề làm đồng hồ phổ biến khắp châu Âu. Chẳng ai lấy làm lạ khi người Đức, vốn nổi tiếng với sự chính xác, đúng giờ và chủ nghĩa hoàn hảo, cũng tham gia vào ngành công nghiệp đồng hồ. Người Đức bắt đầu làm đồng hồ từ thế kỷ 15</p>

                            Ít nhất, chất tiện dụng và cứng cáp là đặc điểm mà mọi người dùng có thể cảm nhận được khi sử dụng đồng hồ Đức. Chất Đức cũng thể hiện ở thiết kế tinh giản, dễ nhìn - mà người ta có thể tìm thấy ở đồng hồ Đức thuộc nhiều phân khúc giá khác nhau.</p>

                            <p style="text-align:justify">Một trong số đó là<strong> <a href="/frontend/http://dangquangwatch.vn/sp/Bruno-Sohnle-Glashutte/560-0-0-0-0-0-0.html">đồng hồ Bruno Sohnle Glashutte</a></strong> đạt tiêu chuẩn cao nhất với <a href="/frontend/http://dangquangwatch.vn/article/234/Dang-Quang-Watch---dia-chi-tin-cay-mua-dong-ho-chinh-hang.html">chứng nhận Glashutte/SA</a> là chứng nhận cao nhất cho ngành đồng hồ trên thế giới.</p>

                            <p style="text-align:justify">Hệ thống <strong>đồng hồ chính hãng</strong> <strong>Đăng Quang Watch</strong> nhận thấy đẳng cấp của thương hiệu Bruno Sohnle Glashutte rất phù hợp với tầng lớp doanh nhân, chính khách thành đạt ở Việt Nam. Cho nên, Đăng Quang Watch đã thương thuyết thành công để làm nhà phân phối độc quyền cho Bruno Sohnle Glashutte tại Việt Nam.</p>

                            <p style="text-align:justify">Khách hàng hoàn toàn có thể mua hàng tại hệ thống phân phối đồng hồ Đăng Quang trên toàn quốc với mức giá rẻ hơn giá bán lẻ tại Châu Âu nên quý khách hoàn toàn yên tâm về giá và chất lượng sản phẩm tại Việt Nam.</p>

                            <p style="text-align:justify">Thị trấn Glashutte nơi Bruno Sohnle đặt làm trụ sở sản xuất ra những chiếc đồng hồ tuyệt vời</p>

                            <p style="text-align:center"><iframe frameborder="0" height="360" src="/frontend/https://www.youtube.com/embed/P9fQLnLwfS8" width="640"></iframe></p>

                            <p style="text-align:justify">&nbsp;</p>

                            <p style="text-align:justify"><br>
                                &nbsp;</p>
                            <p></p>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p><span style="font-size: small;">Trong thời gian sử dụng nếu gặp bất kỳ trục trặc nào Khách hàng có thể liên hệ trực tiếp với Trung tâm bảo hành của Hãng hoặc phòng CSKH của Công ty Cổ phần Trực tuyến Đăng Quang để được trợ giúp theo số điện thoại: 04.3622.8508 – 0986.68.1189<br>
</span></p>
                            <p><span style="font-size: small;"><span style="font-family: Arial;"><span style="font-family: Arial;">Chúng tôi cam kết bảo hành một cách trung thực nhất đảm bảo quyền lợi cho Quý khách, xin Quý khách vui lòng đọc kỹ các quy định bảo hành ghi ở mặt sau phiếu trước khi thực hiện bảo hành sản phẩm.</span></span></span><span style="font-family: Arial;"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></span>
                            </p><p class="MsoNormal"><span style="font-size: small;"><span style="font-family: Arial;"><b>Thời gian nhận và trả bảo hành:</b></span></span><b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></b></p>
                            <p class="MsoNormal"><span style="font-size: small;"><span style="font-family: Arial;">Từ 8h30 đến 21h30 các ngày trong tuần.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal"><span style="font-size: small;"><span style="font-family: Arial;"><b>Trường hợp được bảo hành:</b></span></span><b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></b></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Sản phẩm trong thời hạn còn bảo hành;</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Lỗi về máy, pin và độ chịu nước;</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Sản phẩm được bảo hành theo quy định của nhà cung cấp;</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Quý khách xuất trình phiếu bảo hành khi đi bảo hành.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal"><span style="font-size: small;"><span style="font-family: Arial;"><b>Trường hợp không được bảo hành:</b></span></span><b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></b></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Những sản phẩm không thể xác định được nguồn gốc mua tại Công ty Cổ phần Trực tuyến Đăng Quang, thì Công ty Cổ phần Trực tuyến Đăng Quang có quyền từ chối bảo hành.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Sản phẩm đã quá thời hạn ghi trên Phiếu bảo hành hoặc mất Phiếu bảo hành.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Phiếu bảo hành, Tem Đăng Quang bị rách, không còn Tem Đăng Quang hoặc dán đè hoặc bị sửa đổi.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Phiếu bảo hành không ghi rõ Mã số đồng hồ và ngày mua hàng.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Mã số đồng hồ và Phiếu bảo hành không trùng khớp nhau hoặc không xác định được vì bất kỳ lý do nào.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Sản phẩm bị hư hỏng do tác động cơ học làm rơi, vỡ, va đập, trầy xước, móp méo, ẩm ướt, hoen rỉ, chảy nước hoặc do hỏa hoạn, thiên tai gây nên.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp; </span>Sản phẩm bị hư hỏng do sử dụng không đúng sách hướng dẫn.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp; </span>Sản phẩm để trong môi trường ẩm ướt, nhiệt độ cao, ngoài nắng, gần lửa, các nguồn nhiệt vượt quá nhiệt độ cho phép.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Sản phẩm bị ướt mưa, rơi vào nước, rơi xuống đất hoặc va chạm vào những vật cứng.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Khách hàng tự ý can thiệp vào máy của sản phẩm hoặc đem đến một nơi nào khác sửa chữa.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal"><span style="font-size: small;"><span style="font-family: Arial;">Lưu ý:</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Khách hàng chịu trách nhiệm cho chi phí vận chuyển đến Trung tâm bảo hành.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p class="MsoNormal" style="margin-left: 0.25in; text-indent: -0.25in;"><span style="font-size: small;"><span style="font-family: Arial;"><!--[if !supportLists]-->-<span style="font-stretch: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><!--[endif]-->Hết thời hạn bảo hành, chi phí sửa chữa sẽ được trung tâm bảo hành hỗ trợ với giá ưu đãi nhất.</span></span><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></p>
                            <p></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section class="related-product mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="title-related">SẢN PHẨM CÙNG LOẠI</h5>
                    <hr>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="card mb-4  text-center">
                    <img class="card-img-top" src="/frontend/img/watch/w1.jpg" alt="Card image cap">
                    <div class="card-body ">
                        <p class="mb-1">ĐỒNG HỒ Longines</p>
                        <a href="/frontend/#" class="card-link price  product-price">6.900.000</a>
                    </div>
                </div>

                <div class="card mb-4 related-product">
                    <img class="card-img-top" src="/frontend/img/watch/w2.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="mb-1">ĐỒNG HỒ BREITING</p>
                        <a href="/frontend/#" class="card-link price product-price">6.900.000</a>
                    </div>
                </div>

                <div class="card mb-4 related-product">
                    <img class="card-img-top" src="/frontend/img/watch/w3.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="mb-1">ĐỒNG HỒ MONBLANC</p>
                        <a href="/frontend/#" class="card-link price  product-price">2.900.000</a>
                    </div>
                </div>

                <div class="card mb-4 related-product">
                    <img class="card-img-top" src="/frontend/img/watch/w4.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <p class="mb-1">ĐỒNG HỒ OMEGA</p>
                        <a href="/frontend/#" class="card-link price  product-price">9.900.000</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<footer  style="background-image: url('frontend/img/bg/bg1.jpg')">
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
