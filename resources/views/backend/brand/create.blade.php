@extends('backend.layout.main')

@section('main-content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Thêm Thương Hiệu
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên thương hiệu">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Logo</label>
                            <input type="file" id="exampleInputFile">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Website công ty</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên website">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Vị trí</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" min="1" value="1">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="is_active"> Hiển thị
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tạo</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection