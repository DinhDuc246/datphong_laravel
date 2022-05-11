<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Mail;
session_start();
use Carbon\Carbon;
class CheckoutController extends Controller

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
    public function checkout(){
        return view('pages.checkout.show_checkout');
    }
    public function save_checkout(Request $request){
        $data = array();
        $data['datphong_sn'] = $request->datphong_sn;       
        $data['datphong_tks'] = $request->datphong_tks;
        $data['datphong_cid'] = $request->datphong_cid;
        $data['datphong_cod'] = $request->datphong_cod;
        $data['datphong_tg'] = $request->datphong_tg;
        $data['datphong_ht'] = $request->datphong_ht;
        $data['datphong_sdt'] = $request->datphong_sdt;
        $data['datphong_e'] = $request->datphong_e;

        $datphong_id = DB::table('tbl_datphong')->insertGetId($data);
            Session::put('datphong_id',$datphong_id);
 
            Session::put('message','Đặt phòng thành công');
     return Redirect::to('/payment');
    }
    public function payment (){
        return view('pages.checkout.thanks_checkout');

    }
   public function manage_order(){
    $this->AuthLogin();
    $order = DB::table('tbl_datphong')->get();
    $message_order = view('admin.manage_order')->with('order',$order); 
        return view('admin_layout')->with('admin.manage_order', $message_order);

    }
    public function delete_order($datphong_id){
        $this->AuthLogin();
        DB::table('tbl_datphong')->where('datphong_id',$datphong_id)->delete();
        Session::put('message','xóa đơn đặt phòng thành công');
        return Redirect::to('manage-order');
    }
       public function update_book(Request $request){
        $this->AuthLogin();
        $data = array();
        $data1 = array();
         $status = $request->status; 
        $bookid = $request->book_id; 
         $salesss = $request->sales; 
        $productid = $request->product_id; 
        $qty_oder = $request->product_sale_quantity; 
    
       if($status==1){
       return redirect::to('dbook');

       }else if($status==2){
          $pro = DB::table('tbl_product')->where('product_id',$productid)->get();
          foreach($pro as $key=>$value){
                   $Qty_p= $value->product_quantity; 
          }
         //  //Email
         

         // Mail::send('email',$data2,function($message){
         //   $message->from('hongocqui19it6@gmail.com','Ngọc Qúy');
         //   $message->to('nguyenkb104@gmail.com','Qúy');
         //   $message->subject('Xác nhận đơn đặt phòng');
           
         // });


         //  //email
         $qty_late =  $Qty_p - $qty_oder;
        $data['product_quantity'] = $qty_late;
         DB::table('tbl_product')->where('product_id',$productid)->update($data);
        $data1 = array();
         $data1['book_tinhtrang'] = $request->status; 
        $data1['book_gnp'] =  $qty_oder; 
         DB::table('tbl_book')->where('book_id',$bookid)->update($data1);
         return redirect::to('dbook');
        }else if($status==3){
        $data1['book_tinhtrang'] = $request->status;
         DB::table('tbl_book')->where('book_id',$bookid)->update($data1);
         return redirect::to('dbook');



        }else if($status==4){
         $data1['book_tinhtrang'] = $request->status;
         DB::table('tbl_book')->where('book_id',$bookid)->update($data1);
         return redirect::to('dbook');
        }else if($status==5){
         $pro = DB::table('tbl_product')->where('product_id',$productid)->get();
          foreach($pro as $key=>$value){
            $Qty_p= $value->product_quantity; 
          }
         $qty_late =  $Qty_p + $qty_oder;
        $data['product_quantity'] = $qty_late;
        DB::table('tbl_product')->where('product_id',$productid)->update($data);
        $data1 = array();
        $data1['book_tinhtrang'] = $request->status; 
        $data1['book_gnp'] =  $qty_oder; 
         DB::table('tbl_book')->where('book_id',$bookid)->update($data1);



         /// tinh lơi nhuan
      $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
          $rs=DB::table('tbl_statistical')->get();
          foreach ($rs as $key => $value) {
             $date = $value->order_date;
              # code...
          }
        
          if($now==$date){  
             $rs1=DB::table('tbl_statistical')->where('order_date',$now)->get();
          foreach ($rs1 as $key => $value) {
              $sales = $value->sales;
               $qty = $value->quantity;
                $order = $value->total_order;
          }
          $saless = $sales + $salesss;
          $profit = ($saless*60)/100;
          $qtyy = $qty + $qty_oder;
          $data= array();
          $data['order_date'] = $now;
          $data['sales'] = $saless;
          $data['profit'] = $profit;
          $data['quantity'] =  $qtyy;
          $data['total_order'] = $order+1;
          DB::table('tbl_statistical')->where('order_date',$now)->update($data);
          }else{  
        
          $profit1 = ($salesss*60)/100;
          $data= array();
          $data['order_date'] = $now;
          $data['sales'] = $salesss;
          $data['profit'] =$profit1;
          $data['quantity'] =  $qty_oder;
          $data['total_order'] = '1';
          DB::table('tbl_statistical')->insert($data);
          } 




         return redirect::to('dbook');


     }
      
         

   }
   public function email($book_id){

     $email1 =  DB::table('tbl_book')->where('tbl_book.book_id',$book_id)
     ->join('tbl_product','tbl_product.product_id','=','tbl_book.product_id')->get();
    $email=Session::get('email');
     foreach($email1 as $key =>$value){
                    $name =$value->product_name;
                    $a =$value->book_ht;
                    $em =$value->book_em;
                    $sdt =$value->book_sdt;
                    
                    $id =$value->book_id;
                    $nd =$value->book_nd;
                    $nv =$value->book_nv;
                    $now = strtotime($nd);
                    $your_date = strtotime($nv);
                    $datediff = $your_date-$now ;
                    $datediff1 =($datediff / (60 * 60 * 24));
                    $sn =$value->book_sn;
                    $tspd =$value->book_gnp;

                    $dc =$value->product_desc;
                    $price =$value->product_price;
                    // $ud =$value->book_uudai;
                    $ttctt =(($price)*$sn)*$tspd ;
                    // $ttctt =(($price-($ud/100))*$sn)*$tspd ;

                    
                    
         }
        
          $email =[
            
             'ht'=>$a,
             'em'=>$em,
             'sdt'=>$sdt,
             'id'=>$id,
             'nd'=>$nd,
             'nv'=>$nv,
             'sn'=>$sn,
             'tspd'=>$tspd,
             'name'=>$name,
             'dc'=>$dc,
             'datediff1'=>$datediff1,
             'price'=>$price,
             
             'ttctt'=>$ttctt,
             
            
       ];
          Session::put('email',$email);
          Session::save();
      
            //Email
         Mail::send('email',$email,function($message ) use($value) {
            $c =$value->book_em;
           $message->from('Lenhung150202@gmail.com','N&D Hotel');
           $message->to($c,'N&D Hotel');
           $message->subject('Xác nhận đơn đặt phòng');
           
         });
          //email
        return redirect::to('dbook');



        
    }
    
}

