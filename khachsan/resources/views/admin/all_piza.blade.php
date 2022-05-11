	@extends('admin_layout')
@section('admin_content')
  	<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      liệt kê Piza
    </div>
   
    <div class="table-responsive">
       
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>STT</th>
            <th>Tên piza</th>
            <th width="200px;"> Ảnh piza </th>
            <th>Chi tiết</th>
            <th>Giá</th>
          
            
          </tr>
        </thead>
        <tbody>
          <?php 
             $i=0;
           ?>
          @foreach($all_piza as $key =>$piza)
          <?php $i++ ?>
          <tr>
            <td>{{$i}}</td>
            <td>{{ $piza->piza_name }}</td>
            <td><img src="public/uploads/product/{{ $piza->piza_image }}" height="100" width="150">  </td>
            <td>{{ $piza->piza_desc }}</td>
            <td>{{ $piza->piza_price }}</td>
            <td>
              <a href="{{URL::to('/edit-piza/'.$piza->piza_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('bạn có muốn xóa danh mục sản phẩm này không')" href="{{URL::to('/delete-piza/'.$piza->piza_id)}}" class="active" ui-toggle-class="">
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
        
      </div>
    </footer>
  </div>
</div>
@endsection