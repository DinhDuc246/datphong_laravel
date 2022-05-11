@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide" id="carousel-554496">
                <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#carousel-554496"> </li>
                    <li data-slide-to="1" data-target="#carousel-554496"> </li>
                    <li data-slide-to="2" data-target="#carousel-554496" class="active"> </li>
                </ol>
                <div class="carousel-inner">
                    <a href=""><div class="carousel-item"> <img class="d-block w-100" alt="Carousel Bootstrap First" src="public/fontend/jmg/1.jpg" style="width: 1500px; height: 500px;"  /></a>
                        <div class="carousel-caption">
                            <h4 style="color: #e6e6e6;"> Chào mừng bạn đã đến với khách sạn FAbet hotel </h4>
                            
                        </div>
                    </div>
                    <div class="carousel-item" > <img class="d-block w-100" alt="Carousel Bootstrap Second" src="public/fontend/jmg/2.jpg" style="width: 1500px; height: 500px;" />
                        <div class="carousel-caption">
                            <h4 style="color: #e6e6e6;"> Đên với khách sạn có nhiều ưu đãi </h4>
                            <p>  </p>
                        </div>
                    </div>
                    <div class="carousel-item active"> <img class="d-block w-100" alt="Carousel Bootstrap Third" src="public/fontend/jmg/3.jpg" style="width: 1500px; height: 500px;" />
                        <div class="carousel-caption">
                            <h4 style="color: #e6e6e6;"> Hỗ trợ khách hàng mọi lúc mọi nơi </h4>
                            <p>  </p>
                        </div>
                    </div>
                </div> <a class="carousel-control-prev" href="#carousel-554496" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-554496" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
            </div>
        </div>
    </div>
</div>

<hr>
<p class="text-center ">Các điểm đến phổ biến</p>
<hr>
  <!-- Phong vip-->

  <div class="container d-flex justify-content-center mt-50 mb-50">

    <div class="row">

@foreach($all_brand as $key => $brand)
                        
             <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="public/uploads/product/{{ $brand->brand_name }}" class="card-img img-fluid" width="96" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <p class="text-default mb-2" data-abc="true">{{ $brand->brand_desc }}</p> </h6> <p class="text-muted" data-abc="true">{{ $brand->brand_status }}</p>
                    </div>
                    <h3 class="mb-0 font-weight-semibold"></h3>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <div class="text-muted mb-3"></div> <button type="button" class="btn bg-cart"> Add to cart</button>
                </div>
            </div>
        </div>

 @endforeach
  </div>
</div>
<br>
<br>
<hr>
<div class="text-center font-weight-bold">Các phòng</div>
<hr>
<br>
<br>
<div class="container d-flex justify-content-center mt-50 mb-50">

    <div class="row">
      @foreach($all_product as $key => $product)

        <div class="col-md-3 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="public/uploads/product/{{ $product->product_image }}" class="card-img img-fluid" width="96" height="350" alt=""> </div>

                </div>
                <div class="card-body bg-light">
                     <h6 class="font-weight-semibold mb-2 " > <a href="#" class="text-default mb-2" data-abc="true">{{ $product->product_name }} </a> </h6>
                    <p class="mb-0 font-weight-semibold" style="font-size: 13px;">{{ $product->product_content }}</p>

                    <div class="mb-2 text-center">

                       <p style="color: green;">{{ $product->product_price }}</p>
                    </div>
                    <hr>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                    <hr>
                    
                     <div class="text-muted mb-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>{{ $product->product_desc }}</div> 
                     <a href="{{URL::to('/Book/'.$product->product_id)}}">
                       <button class="btn-info" type="btn">      
                       Book              
                       </button>
                     </a>
             
                </div>
            </div>
        </div>


               @endforeach

  
    </div>
</div>


<script type="text/javascript">
    $('.xemnhanh').click(function(){
      var product_id11 = $(this).data('id_product')
      var _token = $('input[name="_token"]').val();
      $.ajax({
        url:"{{url('/quickview')}}",
        method:"POST",
        dataType:"JSON",
        data:{product_id:product_id, _token:_token},
        succsess:function(data){
          $('#product_QView_name').html(data.product_name);
          $('#product_QView_id').html(data.product_id);
          $('#product_QView_desc').html(data.product_desc);
          $('#product_QView_content').html(data.product_content);
          $('#product_QView_price').html(data.product_price);
          $('#product_QView_image').html(data.product_image);
        }

      });
    });


</script>


       <div class="modal fade" id="xemnhanh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Smart Wizard modal</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                 </div>
                 <div class="modal-body">
                     <div id="smartwizard">
                         <ul>
                             <li><a href="#step-1">Step 1<br /><small>Account Info</small></a></li>
                             <li><a href="#step-2">Step 2<br /><small>Personal Info</small></a></li>
                             <li><a href="#step-3">Step 3<br /><small>Payment Info</small></a></li>
                             <li><a href="#step-4">Step 4<br /><small>Confirm details</small></a></li>
                         </ul>
                         <div class="mt-3">
                             <div id="step-1">
                                 <div class="row">
                                        <div class="card blog-horizontal">
                                        <div class="card-body">

                                            <div class="card-img-actions mr-sm-3 mb-3"> <a href="#course_preview" data-toggle="modal" data-abc="true"> <img src="public/uploads/product/" class="img-fluid card-img" alt=""> </a> </div>
                                            <div class="mb-3">
                                                <h5 class="d-flex font-weight-semibold flex-nowrap my-1"> <a href="#" class="text-default mr-2" data-abc="true"><span id="product_QView_name"></span></a> <span id="product_QView_price" class="text-danger-400 ml-auto"></span> </h5>
                                                <ul class="list-inline list-inline-dotted text-muted mb-0">
                                                    <li class="list-inline-item">By <a href="#" class="text-muted" data-abc="true">Timona Shai</a></li>
                                                    <li class="list-inline-item"> Nov 3rd, 2021</li>
                                                </ul>
                                            </div>
                                            <p><span id="product_QView_desc"></span></p> <a href="#" data-abc="true">[...]</a>
                                        </div>
                                        <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                                            <ul class="list-inline list-inline-dotted mb-0">
                                                <li class="list-inline-item"><i class="fa fa-user mr-1"></i> 272</li>
                                                <li class="list-inline-item"><i class="fa fa-calendar-check-o mr-1"></i> 15 hours</li>
                                                <li class="list-inline-item"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="text-muted ml-1">(12)</span> </li>
                                            </ul>
                                            <div class="mt-2 mt-sm-0"> <a href="#" data-abc="true" class="course-button"><i class="fa fa-check font-size-base mr-1"></i> Take course</a> </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                             <div id="step-2">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Address" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="City" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="State" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Country" required> </div>
                                 </div>
                             </div>
                             <div id="step-3" class="">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Number" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Holder Name" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="CVV" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Mobile Number" required> </div>
                                 </div>
                             </div>
                             <div id="step-4" class="">
                                 <div class="row">
                                     <div class="col-md-12"> <span></span> </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     



@endsection
