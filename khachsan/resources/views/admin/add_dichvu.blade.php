@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm piza
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
                                <form role="form" action="{{URL::to('/save-piza')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Tên pizza</label>
                                    <input type="text" name="piza_name" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="file" name="piza_image" class="form-control" placeholder="Tên dịch vụ" id="exampleInputEmail1">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="piza_desc" id="ckeditor5" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                 
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá</label>
                                    <input type="text" name="piza_price" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
         
                                <button type="submit" name="add-piza" class="btn btn-info">Thêm sản phâm</button>
                                 </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection