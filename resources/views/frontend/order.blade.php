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
@endsection

