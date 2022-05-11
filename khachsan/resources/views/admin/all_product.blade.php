	@extends('admin_layout')
@section('admin_content')
  	<div class="row">
     <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê Khách sạn
    </div>
    <div class="row w3-res-tb">
      
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
       
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
           
            <th>STT</th>
            <th>Tên Khách sạn</th>
            <th>Số lượng phòng còn</th>
            <th>Hình ảnh khách sạn</th>
            <th>Giá khách sạn</th>
            <th>Loại phòng</th> 
            <th>Thành phố</th>
            <!-- <th>Hiển thị</th> -->
            
          
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $i=0;
           ?>
          @foreach($all_prod as $key =>$pro)
          <?php 
            $i++;
           ?>
          <tr>
            <td>{{$i}}</td>
               <td>{{ $pro->product_name }}</td>
               <td>{{ $pro->product_quantity }} Phòng </td>
            <td><img src="./public/uploads/product/{{ $pro->product_image }}" height="100" width="150">  </td>
            <td>{{ $pro->product_price }}</td>
            <td>{{ $pro->category_name }}</td>
            <td>{{ $pro->brand_desc }}</td>
            <td><span class="text-ellipsis">
              <!-- <?php
              if($pro->product_status==0) {
                 ?>
                <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
              <?php 
               }else{
                ?>
                <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
              <?php 
              }
              ?>
            </span></td> -->
            
            <td>
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có muốn xóa khách sạn này không?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>    
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
       {{ $all_prod->links() }}
    </div>
    
  </div>
</div> 
    </div>
@endsection