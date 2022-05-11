@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm địa điểm
                        </header>
                        <div class="panel-body">
                            <?php 
    $message = Session::get('message');
    if($message){
        echo $message;
        Session::put('mesage',null);
    }
     ?>
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{( csrf_field() )}}
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh địa điểm phổ biến</label>
                                    <input type="file" name="brand_product_name" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Địa điểm</label>
                                    <textarea style="resize: none;" rows="5" type="password" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div>
                               
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Chi tiết</label>
                                    <textarea style="resize: none;" rows="5" type="password" name="brand_product_status" class="form-control" id="ckeditor2" placeholder="Mô tả danh mục"></textarea>
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm địa điểm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection