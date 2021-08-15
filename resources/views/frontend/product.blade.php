@extends('frontend.layout.main')

@section('main-content')
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
                                <a class="nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">CHI TIẾT SẢN PHẨM</a>
                                <a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">CHÍNH SÁCH BẢO HÀNG</a>
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

                                <p style="text-align:center"><iframe frameborder="0" height="360" src="https://www.youtube.com/embed/P9fQLnLwfS8" width="640"></iframe></p>

                                <p style="text-align:justify">&nbsp;</p>

                                <p style="text-align:justify"><br>
                                    &nbsp;</p>
                                <p></p>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <p><span style="font-size: small;">Trong thời gian sử dụng nếu gặp bất kỳ trục trặc nào Khách hàng có thể liên hệ trực tiếp với Trung tâm bảo hành của Hãng hoặc phòng CSKH của Công ty Cổ phần Trực tuyến Đăng Quang để được trợ giúp theo số điện thoại: 04.3622.8508 – 0986.68.1189<br></span></p>
                                <p><span style="font-size: small;"><span style="font-family: Arial;"><span style="font-family: Arial;">Chúng tôi cam kết bảo hành một cách trung thực nhất đảm bảo quyền lợi cho Quý khách, xin Quý khách vui lòng đọc kỹ các quy định bảo hành ghi ở mặt sau phiếu trước khi thực hiện bảo hành sản phẩm.</span></span></span><span style="font-family: Arial;"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></span>
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
                                <p class="MsoNormal"><span style="font-size: small;"><span style="font-family: Arial;"><b>Trường hợp không được bảo hành:</b></span></span><b><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:AR-SA"><o:p></o:p></span></b></p>
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
@endsection

