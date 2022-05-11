@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm ưu đãi
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
                                <form role="form" action="{{URL::to('/save-uudai')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách sạn</label>
                                    <input type="text" name="uudai_name" class="form-control" id="exampleInputEmail1" placeholder="Tên khách sạn">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh </label>
                                    <input type="file" name="uudai_image" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội dung ưu đãi</label>
                                    <input type="text" name="uudai_connten" class="form-control" id="exampleInputEmail1" placeholder="ƯU ĐÃI">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Địa điểm ưu đãi</label>
                                    <select name="brand_id" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_desc}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả địa chỉ</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="uudai_desc" id="ckeditor1" placeholder="Mô tả địa chỉ"></textarea>
                                </div>
                                 
                               
                                <button type="submit" name="add_uudai" class="btn btn-info">Thêm ưu đãi</button>
                                </form>
                            </div>

                        </div>
@endsection