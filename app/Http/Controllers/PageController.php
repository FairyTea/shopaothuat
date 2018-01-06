<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Product::where('new',1)->paginate(8);
        $sale_product = Product::where('promotion_price','<>',0)->paginate(4);
    	return view('page.trangchu', compact('slide','new_product','sale_product'));
    }

	public function getLoaiSp()
    {
    	return view('page.loai_sanpham');
    }
    
    public function getChiTiet()
    {
    	return view('page.chitiet_sanpham');
    }
}
