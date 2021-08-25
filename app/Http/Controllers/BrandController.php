<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::all();   // Lấy toàn bộ dữ liệu bảng thông qua all, tương tự như câu lệnh select * from brand

        return view('backend.brand.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Lấy toàn bộ tham số gửi từ form
        $params = $request->all();  // $_POST, $_GET

        // INSERT thêm vào CSDL
        $model = new Brand();   // model brand sử dụng cơ chế ORM => tự động mapping với table brands
        $model->name = $params['name'];
        $model->slug = str_slug($params['name']);// khi sử dụng str_slug thì đồng hồ -> dong-ho

        $model->website = $params['website'];
        $model->position = $params['position'];
        $model->is_active = isset($params['is_active']) ? $params['is_active'] : 0;
        $model->save(); // chạy câu lệnh insert trong SQL: INSERT INTO MyGuests (firstname, lastname, email) VALUE('John','Doe','john@example.com')

        // Chuyển hướng đến trang
        return redirect()->route('admin.brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Lấy chi tiết
        $data = Brand::find($id); // SELECT * FROM brands WHERE id  = 5

        return view('backend.brand.edit', ['data' =>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = $request->all();  // $_POST, $_GET
        $model = Brand::find($id);// Lấy toàn bộ tham số gửi từ form

        $model->name = $params['name'];
        $model->slug = str_slug($params['name']);// khi sử dụng str_slug thì đồng hồ -> dong-ho
        $model->website = $params['website'];
        $model->position = $params['position'];
        $model->is_active = isset($params['is_active']) ? $params['is_active'] : 0;
        $model->save(); // chạy câu lệnh insert trong SQL: INSERT INTO MyGuests (firstname, lastname, email) VALUE('John','Doe','john@example.com')
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
