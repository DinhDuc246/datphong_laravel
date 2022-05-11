<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use app\Http\Requests;
use app\Product;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    
  public function index(){
  $all_brand = DB::table('tbl_brand')->orderby('brand_id','desc')->limit(10)->get();

  $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(10)->get();

  $all_uudai = DB::table('tbl_uudai')->orderby('uudai_id','desc')->limit(4)->get();


      return view('home')->with('all_product',$all_product)->with('all_brand',$all_brand)->with('all_uudai',$all_uudai);
  // echo json_encode($all_product);
}
  public function get_id($brand_id){
  $getid = DB::table('tbl_product')->where('brand_id',$brand_id)->get();
  return view('pages.Room')->with('getid',$getid);
}

  public function quickview($product_id){
  $order_pro = DB::table('tbl_product')->where('product_id',$product_id)->get();
  return view('pages.Book')->with('book',$order_pro);
}
//
 public function search(Request $request){
  $keyworks = $request->keyworks_submit;
  $all_brand = DB::table('tbl_brand')->orderby('brand_id','desc')->limit(10)->get();

  $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(10)->get();

  $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keyworks.'%')->get();

      return view('pages.sanpham.search')->with('all_product',$all_product)->with('all_brand',$all_brand)->with('search_product',$search_product);
}

public function room_list(){
  return view('pages.sanpham.room_list');

}
public function contacts(){
  return view('pages.sanpham.contacts');

}

 public function gioi_thieu(){
  return view('pages.gioithieu');
}

 public function book_room($product_id){

$order_pro = DB::table('tbl_product')->where('product_id',$product_id)
 ->get();
     foreach ($order_pro as $key => $value) {
       $idbrand = $value->brand_id;
     }
       $uud = DB::table('tbl_uudai')
    ->where('brand_id',$idbrand)
    ->get();

       
  return view('pages.book_room')->with('book',$order_pro)->with('uud',$uud);
}

public function piza(){
  return view('pages.sanpham.piza');
}

public function save_book(Request $request){
      $data = array();
        $data['book_nd'] = $request->book_nd;       
        $data['book_nv'] = $request->book_nv;
        $data['book_sn'] = $request->book_sn;
        $data['book_gnp'] = $request->book_gnp;
        $data['book_ht'] = $request->book_ht;
        $data['book_em'] = $request->book_em;
        $data['book_sdt'] = $request->book_sdt;
        $data['product_id'] = $request->book;
        // $data['book_uudai'] = $request->uud;
        $data['book_tinhtrang'] = $request->book_tinhtrang;
        
        DB::table('tbl_book')->insertGetId($data);
            Session::put('message','Đặt phòng thành công');
     return Redirect::to('/payment');
    }
    public function payment (){
        return view('pages.book_room');

    }
  public function all_book (){
   
        
        $all_book = DB::table('tbl_book')
        ->join('tbl_product','tbl_product.product_id','=','tbl_book.product_id')
        ->orderby('tbl_book.book_id','desc')->paginate(4);


        $manager_product  = view('admin.book')->with('all_book',$all_book);
        return view('admin_layout')->with('admin.book', $manager_product);

    }
    public function book_list($book_id){
        
        // $book_list = DB::table('tbl_book')->where('book_id',$book_id)->get();
         $book_list = DB::table('tbl_book')->where('tbl_book.book_id',$book_id)
          ->join('tbl_product','tbl_product.product_id','=','tbl_book.product_id')->get();

        return view('admin.book_list')->with('book', $book_list);
    }
    public function unactive_book( $book_id ){
        
        DB::table('tbl_book')->where('book_id',$book_id)->update(['book_tinhtrang'=>0]);
        Session::put('message','không kích hoặc danh mục  thành công');
        return Redirect::to('book_list');

    }
    public function active_book($book_id ){ 
  
        DB::table('tbl_book')->where('book_id',$book_id)->update(['book_tinhtrang'=>1]);
        Session::put('message',' kích hoặc danh mục sản phẩm thành công');
        return Redirect::to('book_list');
    }

    public function phong_don(){
      $all_don = DB::table('tbl_product')->where('category_id','7')->get();
     return view('pages.sanpham.phongdon')->with('don',$all_don);
    } 
    public function phong_doi(){
      $all_doi = DB::table('tbl_product')->where('category_id','6')->get();
     return view('pages.sanpham.phongdoi')->with('doi',$all_doi);
    } 
     public function book_delete($book_id){
        DB::table('tbl_book')->where('book_id',$book_id)->delete();
        Session::put('message','Xoá thành công');
        return Redirect::to('dbook');
        }
        
}

