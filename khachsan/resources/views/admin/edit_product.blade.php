@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật  phòng
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                @foreach($edit_product as $key =>$pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách sạn</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng phòng còn lại</label>
                                    <input type="text" name="product_quantity" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_quantity }}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh Khách sạn</label>
                                    <input type="file" name="product_image" class="form-control" value="{{$pro->product_image}}" id="exampleInputEmail1">
                                   <td><img src="{{URL::to('public/uploads/product/' .$pro->product_image )}}" height="100" width="150">  </td>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá khách sạn</label>
                                    <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->product_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Địa chỉ</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1" >{{ $pro->product_desc }}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_content" id="ckeditor4" >{{ $pro->product_content }}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Loại phòng</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)

                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Thành phố</label>
                                      <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_desc}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiển thị</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_product" class="btn btn-info">Cập nhật</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection