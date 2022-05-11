<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Statistic;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
session_start();




class Admincontroller extends Controller
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
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');

        }else{
            session::put('message','Mật khâu hoặc tài khoản không đúng. Xin vui lòng nhập lại.');
            return Redirect::to('/admin');
        }


    }
    public function logout(){
        $this->AuthLogin();
        session::put('admin_name',null);
        session::put('admin_id',null);
        return Redirect::to('/admin');
    }




// Thống kê

public function days_order(){

    $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->toDateString();

    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    $get = Statistic::whereBetween('order_date',[$sub30days, $now])->orderBy('order_date','ASC')->get();


    foreach($get as $key => $val){

       $chart_data[] = array(
        'period' => $val->order_date,
        'order' => $val->total_order,
        'sales' => $val->sales,
        'profit' => $val->profit,
        'quantity' => $val->quantity
    );

   }

   echo $data = json_encode($chart_data);
}

public function dashboard_filter(Request $request){

    $data = $request->all();

        // $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
       // $tomorrow = Carbon::now('Asia/Ho_Chi_Minh')->addDay()->format('d-m-Y H:i:s');
       // $lastWeek = Carbon::now('Asia/Ho_Chi_Minh')->subWeek()->format('d-m-Y H:i:s');
       // $sub15days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(15)->format('d-m-Y H:i:s');
       // $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->format('d-m-Y H:i:s');

    $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
    $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
    $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();



    $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
    $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();

    $dauthang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->startOfMonth()->toDateString();
    $cuoithang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->endOfMonth()->toDateString();


    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    if($data['dashboard_value']=='7ngay'){

        $get = Statistic::whereBetween('order_date',[$sub7days,$now])->orderBy('order_date','ASC')->get();

    }elseif($data['dashboard_value']=='thangtruoc'){

        $get = Statistic::whereBetween('order_date',[$dau_thangtruoc,$cuoi_thangtruoc])->orderBy('order_date','ASC')->get();

    }elseif($data['dashboard_value']=='thangnay'){

        $get = Statistic::whereBetween('order_date',[$dauthangnay,$now])->orderBy('order_date','ASC')->get();

    }else{
        $get = Statistic::whereBetween('order_date',[$sub365days,$now])->orderBy('order_date','ASC')->get();
    }


    foreach($get as $key => $val){

        $chart_data[] = array(
            'period' => $val->order_date,
            'order' => $val->total_order,
            'sales' => $val->sales,
            'profit' => $val->profit,
            'quantity' => $val->quantity
        );
    }

    echo $data = json_encode($chart_data);

}


    public function aaa(request $request){
    $data = $request->all();

    $from_date = $data['from_date'];
    $to_date = $data['to_date'];

    $get = Statistic::whereBetween('order_date',[$from_date,$to_date])->orderBy('order_date','ASC')->get();

    foreach($get as $key => $val){
 $chart_data[] = array(
        'period'=>$val->order_date,
        'order'=>$val->total_order,
        'sales'=>$val->sales,
        'profit'=>$val->profit,
        'quantity'=>$val->quantity
       );
       
     }

   
 echo $data = json_encode($chart_data);  

   }
}
