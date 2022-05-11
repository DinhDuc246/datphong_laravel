	@extends('admin_layout')
@section('admin_content')
  	<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thêm Địa điểm phổ biến
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
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>STT</th>
            <th width="200px;"> Ảnh địa điểm phổ biến </th>
            <th>Địa điểm</th>
            <th>Chi tiết</th>
          
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php 
             $i=0;
           ?>
          @foreach($all_brand_product as $key =>$brand_pro)
          <?php $i++ ?>
          <tr>
            <td>{{$i}}</td>
            
            <td><img src="public/uploads/product/{{ $brand_pro->brand_name }}" height="100" width="150">  </td>
            <td>{{ $brand_pro->brand_desc }}</td>
            <td>{{ $brand_pro->brand_status }}</td>
            <td>
              <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('bạn có muốn xóa địa điểm phổ biến này không?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>    
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
      {{ $all_brand_product->links() }}
    </div>
    
  </div>
</div>
@endsection