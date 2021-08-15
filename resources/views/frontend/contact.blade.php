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
        <section class="news mb-4 mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="title-related">Liên Hệ</h5>
                        <hr>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-12 col-sm-8 col-md-6">
                        <form class="contact" style="border: 1px solid rgba(0, 0, 0, 0.1); padding: 40px">

                            <div class="form-group">
                                <input type="email" id="email" class="form-control rounded-0" placeholder="Tên">
                            </div>

                            <div class="form-group">
                                <input type="text" id="name" class="form-control rounded-0" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="text" id="website" class="form-control rounded-0" placeholder="Điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="text" id="address" class="form-control rounded-0" placeholder="Địa chỉ">
                            </div>
                            <div class="textarea-message form-group">
                            <textarea id="message" class="form-control rounded-0"
                                      placeholder="Nhập tin nhắn của bạn ..." rows="5"></textarea>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="button button-style button-style-dark button-style-color-2">
                                    Gửi
                                </button>
                            </div>

                        </form>

                        <p class="my-3">Bạn có thể gửi email tới : donghohaiphong@gmail.com</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- END -->

    </main>
@endsection

