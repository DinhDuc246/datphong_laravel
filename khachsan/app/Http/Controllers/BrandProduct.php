<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use pp\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandProduct extends Controller
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

     public function add_brand_product(){
       $this->AuthLogin();
        return view('admin.add_brand_product');

    }
   public function all_brand_product(){
    $this->AuthLogin();
    $all_brand_product = DB::table('tbl_brand')->paginate(5);
    $message_category_product = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product); 
    return view('admin_layout')->with('admin.all_brand_product', $message_category_product);

    }
     public function save_brand_product(Request $request){
        $this->AuthLogin();
        $data= array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;
        
     DB::table('tbl_brand')->insert($data);
     Session::put('message','Thêm danh mục sản phẩm thành công');
     return Redirect::to('add-brand-product');

    }
   
    public function edit_brand_product($brand_product_id){
        $this->AuthLogin();
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
    $message_brand_product = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product); 
        return view('admin_layout')->with('admin.edit_brand_product', $message_brand_product);

    }
    public function updete_brand_product(Request $request,$brand_product_id){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Cập nhật thành công');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Xóa  thành công');
        return Redirect::to('all-brand-product');
    }
    public function update_brand_product(Request $request,$brand_product_id){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request->brand_name;       
        $data['brand_desc'] = $request->brand_desc;
        $data['brand_status'] = $request->brand_status;
        
        $get_image = $request->file('brand_name');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['brand_name'] = $new_image;
            DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
            Session::put('message','Cập nhật khách sạn thành công');
            return Redirect::to('all-brand-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhật khách sạn thành công');
        return Redirect::to('all-product');
    

    }

}
