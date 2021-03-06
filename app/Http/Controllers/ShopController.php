<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Contact;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Lấy dữ liệu - Banner
        $banners = Banner::where('is_active', 1)->orderBy('id', 'desc')
                                                ->orderBy('position', 'asc')
                                                ->take(4)->get();

        return view('frontend.index', [
            'banners' => $banners
        ]);
    }

    //Danh mục sản phẩm
    public function category()
    {
        return view('frontend.category');
    }

    //Chi tiết sản phẩm
    public function product()
    {
        return view('frontend.product');
    }

    //Liên hệ
    public function contact()
    {
        return view('frontend.contact');
    }

    //Trang đặt hàng
    public function order()
    {
        return view('frontend.order');
    }

    //Trang tin tức
    public function article()
    {
        return view('frontend.article');
    }

    public function  postContact(Request $request)
    {
        // validate dữ liệu từ form
        $request->validate([
           'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'content' => 'required'
        ], [
            'name.required' => ' Bạn chưa nhập họ tên',
            'name.max' => 'Nhập họ tên tối đa 255 ký tự',
            'email.email' => 'Nhập đúng định dạng email',
            'email.required' => ' Bạn chưa nhập email ',
            'phone.required' => ' Bạn chưa nhập SĐT',
            'content.required' => ' Bạn chưa nhập nội dung'
        ]);

        // Lưu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // Chuyển về trang chủ
        return redirect('/');
    }

    //Trang chi tiết tin tức
    public function detailArticle()
    {
        return view('frontend.detailArticle');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
