@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục
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
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{( csrf_field() )}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none;" rows="5" type="password" name="category_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                                </div>
                               <label for="exampleInputPassword1">Hiển thị</label>

                                <select name="category_product_status" class="form-control input-sm m-bot15"  >
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                                
                            </select>
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection