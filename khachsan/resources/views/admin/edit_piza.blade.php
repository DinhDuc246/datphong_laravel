@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Cập nhật piza
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
                                @foreach($edit_piza as $key =>$pro)
                                <form role="form" action="{{URL::to('/update-piza/'.$pro->piza_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên piza</label>
                                    <input type="text" name="piza_name" class="form-control" id="exampleInputEmail1" value="{{ $pro->piza_name }}">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh piza</label>
                                    <input type="file" name="piza_image" class="form-control" value="{{$pro->piza_image}}" id="exampleInputEmail1">
                                   <td><img src="{{URL::to('public/uploads/product/' .$pro->piza_image )}}" height="100" width="150">  </td>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá </label>
                                    <input type="text" name="piza_price" class="form-control" id="exampleInputEmail1" value="{{ $pro->piza_price }} ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả </label>
                                    <textarea id="ckeditor" name="piza_desc" >{{ $pro->piza_desc }}</textarea>
                                </div>
                                
                               
                                <button type="submit" name="add_piza" class="btn btn-info">Cập nhật</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection