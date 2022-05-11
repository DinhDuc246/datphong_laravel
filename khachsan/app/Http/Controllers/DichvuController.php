<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class DichvuController extends Controller
{
	public function add_piza(){
		return view('admin.add_dichvu');
	}
	public function save_piza(Request $request){
      $data= array();
    	$data['piza_name'] = $request->piza_name;
    	$data['piza_desc'] = $request->piza_desc;
    	$data['piza_price'] = $request->piza_price;
    	$get_image = $request->file('piza_image');    
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['piza_image'] = $new_image;
            DB::table('tbl_piza')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-piza');
        }
        $data['piza_image'] = '';
     DB::table('tbl_piza')->insert($data);
     Session::put('message','Thêm danh mục sản phẩm thành công');
     return Redirect::to('add-piza');

    }
    public function all_piza(){
    	$all_piza = DB::table('tbl_piza')->get();
    	return view('admin.all_piza')->with('all_piza',$all_piza);
    }
     public function edit_piza($piza_id){
    	$edit_piza = DB::table('tbl_piza')->where ('piza_id',$piza_id)->get();
        $manager_product = view('admin.edit_piza')->with ('edit_piza', $edit_piza);
        return view('admin_layout')->with ('admin.edit_piza',$manager_product);
    }
    public function update_piza(Request $request,$piza_id){
       
        $data = array();
        $data['piza_name'] = $request->piza_name;       
        $data['piza_price'] = $request->piza_price;
        $data['piza_desc'] = $request->piza_desc;
       
        $get_image = $request->file('piza_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['piza_image'] = $new_image;
            DB::table('tbl_piza')->where('piza_id',$piza_id)->update($data);
            Session::put('message','Cập nhật khách sạn thành công');
            return Redirect::to('all-piza');
        }
        $data['piza_image'] = '';
        DB::table('tbl_piza')->where('piza_id',$piza_id)->update($data);
        Session::put('message','Cập nhật khách sạn thành công');
        return Redirect::to('all-piza');
    

    }
    
     
        public function delete_piza($piza_id){
        DB::table('tbl_piza')->where('piza_id',$piza_id)->delete();
        Session::put('message','Xoá thành công');
        return Redirect::to('all-piza');
        }
}
