<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use pp\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class Udcontroller extends Controller
{
    public function add_uudai(){
     $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
    	return view('admin.add_uudai')->with('brand_product',$brand_product);
    }
    public function save_uudai(Request $request){
        
    	$data= array();
    	$data['uudai_name'] = $request->uudai_name;
    	$data['uudai_connten'] = $request->uudai_connten;
            $data['brand_id'] = $request->brand_id;
    	$data['uudai_desc'] = $request->uudai_desc;
    	$data['uudai_image'] = $request->uudai_image;
    	$get_image = $request->file('uudai_image');    
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['uudai_image'] = $new_image;
            DB::table('tbl_uudai')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-uudai');
        }
        $data['uudai_image'] = '';
     DB::table('tbl_uudai')->insert($data);
     Session::put('message','Thêm danh mục sản phẩm thành công');
     return Redirect::to('add-uudai');

    }
    public function all_uudai(){
    
   	$all_uudai = DB::table('tbl_uudai')->join('tbl_brand','tbl_brand.brand_id','=','tbl_uudai.brand_id')->paginate(5);
   	$message_category_product = view('admin.all_uudai')->with('all_uudai',$all_uudai); 
    	return view('admin_layout')->with('admin.all_uudai', $message_category_product);

    }
     public function delete_uudai($uudai_id){
        DB::table('tbl_uudai')->where('uudai_id',$uudai_id)->delete();
        Session::put('message','Xoá thành công');
        return Redirect::to('all-uudai');
        }
}
