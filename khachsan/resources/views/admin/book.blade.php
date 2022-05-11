
      
    @extends('admin_layout')
@section('admin_content')
      
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý đơn đặt phòng
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

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>STT</th>
            <th>Khách sạn</th>
            <th>Ngày đi</th>
            <th>ngày về</th>
            <th>Tên khách hàng</th>
            <th>Email khách hàng</th>
            <th style="width: 130px;">Tình trạng đơn đặt</th>

           
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
           $i=0;
            ?>
         @foreach($all_book as $key =>$pro)
            <?php 
             $i++;
             ?>
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$i}}</td>
            
            <td>{{ $pro->product_name }}</td>
            <td>{{ $pro->book_nd }}</td>
            <td>{{ $pro->book_nv }}</td>
            <td>{{ $pro->book_ht }}</td>
            <td>{{ $pro->book_em }}</td>
            <td  >
              <?php
              if($pro->book_tinhtrang==0) {
                 ?>
               <p class="btn-primary text-center">Đơn đặt mới</p> 
              <?php 
               }else if($pro->book_tinhtrang==1){
                ?>
                <p class="btn-warning text-center">Chưa xử lý</p>
                 <?php 
               }else if($pro->book_tinhtrang==2){
                ?>
                <p class="btn-success text-center">Đã xử lý 
                 <a onclick="return confirm('Bạn có muốn gửi email cho đơn đặt này không không?')" href="{{URL::to('/email/'.$pro->book_id)}}" name="email" class="btn btn-default">Gửi Gmail</a>
                </p>
                 <?php 
               }else if($pro->book_tinhtrang==3){
                ?>
                <p class="btn-info text-center">Hủy đơn đặt</p>
                    <?php 
               }else if($pro->book_tinhtrang==4){
                ?>
                <p class="btn-info text-center">Đã nhận phòng</p>
                <?php 
               }else if($pro->book_tinhtrang==5){
                ?>
                <p class="btn-info text-center">Đã trả phòng</p>

              <?php 
              }
              ?>
            </td>

            
            
            
              
            <td>
              
            <a href="{{URL::to('/book_list/'.$pro->book_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa đơn đặt phòng này không?')" href="{{URL::to('/book-delete/'.$pro->book_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
      {{ $all_book->links() }}
    </div>
    
  </div>
</div>



@endsection