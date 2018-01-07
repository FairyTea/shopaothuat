<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;

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

	public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type',$type)->get();
        $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
        $menu_loai = ProductType::all();
        $loai_sp = ProductType::where('id',$type)->first();
    	return view('page.loai_sanpham',compact('sp_theoloai','sp_khac','menu_loai','loai_sp'));
    }
    
    public function getChiTiet(Request $req)
    {
        $sanpham = Product::where('id',$req->id)->first();
    	return view('page.chitiet_sanpham',compact('sanpham'));
    }

    public function getGioiThieu(){

        return view('page.gioi_thieu');
    }

    public function getLienHe(){
        
        return view('page.lien_he');
    }
}
