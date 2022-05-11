<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanhtoanController extends Controller
{
   public function thanh_toan(Request $request){
      $data = array();
        $data['ud'] = $request->thanhtoan_ud;       
        $data['tti'] = $request->thanhtoan_tti;
        $data['ttn'] = $request->thanhtoan_tto;
        
        
            DB::table('tbl_thanhtoan')->insertGetId($data);
           print_r($data);

    } 
}
