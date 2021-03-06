<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
     public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboardd');
            # code...
        }else{
           return  Redirect::to('admin')->send();
        }

    }
     public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_prouct')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        $uudai_product = DB::table('tbl_uudai')->orderby('uudai_id','desc')->get();
        
        return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product)->with('uudai_product',$uudai_product);
        
    }




    public function all_product(){
        $this->AuthLogin();
     $all_product = DB::table('tbl_product')
        ->join('tbl_category_prouct','tbl_category_prouct.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->paginate(5);


        $manager_product  = view('admin.all_product')->with('all_prod',$all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);

    }

     public function save_product(Request $request){  
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_quantity'] = $request->product_quantity;       
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_status;
        $get_image = $request->file('product_image');    
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Th??m s???n ph???m th??nh c??ng');
            return Redirect::to('add-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message','Th??m s???n ph???m th??nh c??ng');
        return Redirect::to('all-product');
    }

    public function unactive_product($product_id){
        $this->AuthLogin();

        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','???n danh m???c th????ng hi???u s???n ph???m th??nh c??ng');
        return Redirect::to('all-product');
    }
    public function active_product($product_id){
        $this->AuthLogin();

         DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','???n danh m???c th????ng hi???u s???n ph???m th??nh c??ng');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id){
        $this->AuthLogin();
         $cate_product = DB::table('tbl_category_prouct')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        $edit_product = DB::table('tbl_product')->where ('product_id',$product_id)->get();
        $manager_product = view('admin.edit_product')->with ('edit_product', $edit_product)->with('cate_product',$cate_product)->with('brand_product',$brand_product);
        return view('admin_layout')->with ('admin.edit_product',$manager_product);
    }
    public function updete_product(Request $request,$product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name; 
        $data['product_quantity'] = $request->product_quantity;       
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Session::put('message','C???p nh???t kh??ch s???n th??nh c??ng');
            return Redirect::to('all-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','C???p nh???t kh??ch s???n th??nh c??ng');
        return Redirect::to('all-product');
    

    }
       public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xo?? th??nh c??ng');
        return Redirect::to('all-product');
    }
}
