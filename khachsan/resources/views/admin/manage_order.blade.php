	@extends('admin_layout')
@section('admin_content')
  	<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê đơn đặt phòng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
       <?php 
    $message = Session::get('message');
    if($message){
        echo $message;
        Session::put('mesage',null);
    }
     ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Số người</th>
            <th>Tên Khách sạn</th>
            <th>Ngày đi</th>
            <th>Ngày về</th>
            <th>Thời gian nhận phòng</th>
            <th>Họ và Tên</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ email</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($order as $key =>$order)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $order->datphong_sn }}</td>
            <td>{{ $order->datphong_tks }}</td>
            <td>{{ $order->datphong_cid }}</td>
            <td>{{ $order->datphong_cod }}</td>
            <td>{{ $order->datphong_tg }}</td>
            <td>{{ $order->datphong_ht }}</td>
            <td>{{ $order->datphong_sdt }}</td>
            <td>{{ $order->datphong_e }}</td>
            
            
              
            <td>
              
              <a onclick="return confirm('Bạn có muốn xóa đơn đặt phòng này không?')" href="{{URL::to('/delete-order/'.$order->datphong_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>  
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection