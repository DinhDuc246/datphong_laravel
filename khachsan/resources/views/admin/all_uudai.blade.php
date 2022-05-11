	@extends('admin_layout')
@section('admin_content')
  	<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê ưu đãi
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
            <th>Tên khách sạn</th>
            <th width="200px;"> Ảnh địa điểm phổ biến </th>
            <th>Địa điểm</th>
             <th>Mô tả</th>
            <th>Ưu Đãi</th>
          
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
             $i=0;
           ?>
          @foreach($all_uudai as $key =>$brand_pro)
          <?php $i++ ?>
          <tr>
            <td></td>
            <td>{{$i}}</td>
            <td>{{ $brand_pro->uudai_name }}</td>
            <td>{{ $brand_pro->brand_desc }}</td>
            <td><img src="public/uploads/product/{{ $brand_pro->uudai_image }}" height="100" width="150">  </td>
            <td>{!! $brand_pro->uudai_desc !!}</td>
            <td>{{ $brand_pro->uudai_connten }} %</td>
            <td>
              <a href="" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('bạn có muốn xóa ưu đãi này không?')" href="{{URL::to('/delete-uudai/'.$brand_pro->uudai_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>    
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
      {{ $all_uudai->links() }}
    </div>
    
  </div>
</div>
@endsection