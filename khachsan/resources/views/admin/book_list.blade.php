@extends('admin_layout')
@section('admin_content')
       
     <div class="panel-heading">
      CHI TIẾT ĐƠN ĐẶT
    </div>
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin phòng (Khách sạn)
    </div>
    
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>STT</th>
            <th>Khách sạn</th>
            <th>Số lượng Phòng còn</th>
            <th>Hình ảnh</th>
            <th>Địa chỉ</th>       
            <th>chi tiết phòng</th>
            <th>Giá/Ngày</th>

            
           
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

           @foreach($book as $key => $book)
                                         
          
          <tr>
            <td></td>
            <td>{{ $book->product_name }}</td>
            <td>{{ $book->product_quantity }} Phòng</td>
            <td><img src="../public/uploads/product/{{ $book->product_image }}" width="200px;"></td>
            <td>{{ $book->product_desc }}</td>
            <td style="width: 250px;">{!! $book->product_content !!}</td>
            <td>{{ $book->product_price }}$</td>
        
              
            
          </tr>
          
             @endforeach
        </tbody>
      </table>
    </div>

    
  </div>
</div>

 <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin khách hàng
    </div>
    <form action="{{URL::to('/update-book')}}" method="post">
      {{ csrf_field() }}
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>

            <th>Họ Tên</th>
            <th>Email</th>
            <th>Số người </th>
            <th>Ngày đi</th>
            <th>Ngày về </th>
            <th>Tổng phòng đặt</th>
            <th>Tổng số ngày đặt</th>
            <!-- <td>Ưu Đãi</td> -->
            <th>Tổng tiền</th>

            <th>Thanh toán </th>
           
            
            
          </tr>
        </thead>
        <tbody>
         
          <tr>
             <td>{{ $book->book_ht }}</td>
            <td name="nd">{{ $book->book_em }}</td>
            <td name="nv">{{ $book->book_sn }}</td>
            <td name="nd">{{ $book->book_nd }}</td>
            <td name="nv">{{ $book->book_nv }}</td>
            <td>
             
              <input  value="{{ $book->book_id }}" name="book_id" type="hidden">
              <input  value="{{ $book->product_id }}" name="product_id" type="hidden">
              <input type="number" min="1" value="{{ $book->book_gnp }}" name="product_sale_quantity">
              

              
            </td>
             <td>
              <?php 
            $now = strtotime($book->book_nd);
            $your_date = strtotime($book->book_nv);
            $datediff = $your_date-$now ;

            echo round($datediff / (60 * 60 * 24));
                           ?>
              </td>
               
              
              <td name="tt">
                <?php 
                
                $a=$book->product_price;
                $b=($datediff / (60 * 60 * 24));
                
                $d= $book->book_gnp;
                $sum=$a*$b;
                $tol = ($sum  )*$d;
                echo floor($tol);
                 ?>$

              </td>

              <td name="sktt">Sau khi trả phòng</td>
            
            
            
              
              

          </tr>
          <tr>
            <td><p>Giá :{{$book->product_price}}$ </p>
               
                <p>Tổng Tiền :{{$tol}}$</p>
            </td>
          </tr>
          
          <tr>
            <td colspan="12">
               
               <input type="hidden" min="1" value="{{$tol}}" name="sales">
                <select name="status" class="form-control order_details" style="width: 300px;">
                  <option value="1">Chưa xử lý</option>
                <option value="2">Đã xử lý</option>
                <option value="3">Hủy đơn đặt</option>
                  <option value="4">Đã xác nhận</option>  
                  <option value="5">Đã trả phòng</option>      
              </select>
              <input type="submit" class="btn btn-default " value="cập nhật">

             
            </td>
          </tr>
         
          
         
        </tbody>
      </table>
      <button class="btn btn-success center-block">In Hóa Đơn</button>
    </div>
    
     </form>
         
  </div>
</div>

<!-- <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      THANH TOÁN
    </div>
    
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>STT</th>
            <th>Khách sạn</th>
            <th>ƯU Đãi</th>
            <th>Dịch vụ</th>
            <th>Tổng tiền</th>
            <th>Thanh toán</th>
            
            
           
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

           
                                         
          
          <tr>
            <td>1</td>
            <td>Ngọc quý</td>
            <td>20%</td>
            <td>20$</td>
            <td>200$</td>
            <td>Sau khi trả phòng</td>
            
          
        
              
            <td>
              
            <a href="" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('bạn có muốn xóa danh mục sản phẩm này không')" href="" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          
            
        </tbody>
      </table>
    </div>
  </div>
</div> -->







@endsection