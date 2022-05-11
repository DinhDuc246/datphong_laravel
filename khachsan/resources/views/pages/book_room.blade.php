
    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
   
@extends('layout')
@section('content')

     <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/DateTimePicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/csscss/owl.theme.default.css')}}">

<div name="product">
    @foreach($book as $key => $pro)

<div class="carousel_in">
      <div><img value="{{ $pro->product_id }}" src="../public/uploads/product/{{ $pro->product_image }}" alt=""><div class="caption"><h3>Phòng Ngủ</h3></div></div>
      <div><img src="../public/frontend/img/1.jpg" alt=""><div class="caption"><h3>Hồ Bơi</h3></div></div>
      <div><img src="../public/frontend/img/5.png" alt=""><div class="caption"><h3>Phòng Tắm</h3></div></div>
      <div><img src="../public/frontend/img/6.jpg" alt=""><div class="caption"><h3>Sống ảo</h3></div></div>
      
    </div>
    
    
    
        <h1 class="main_title_in"    value="{{ $pro->product_id }}" name="ssss">{{ $pro->product_name }} <br>
                             

</h1>

 <h1 class="main_title_in" name="product" value="{{ $pro->product_id }} " style="color: blue;" >
 {{ $pro->product_price }} $/Ngày<br>
 <h6 class="text-center" name="product" value="{{ $pro->product_id }} " >Địa chỉ:{{ $pro->product_desc}}</h6>
    
  @endforeach                
</div>
             

</h1>
    <div class="container add_bottom_60">
        
        <div class="row">
            <div class="col-md-8" id="room_detail_desc">
            <div id="single_room_feat">
                <ul>
                    <li><i class="icon_set_1_icon-7"></i>Wifi</li>
                    <li><i class="icon_set_2_icon-116"></i>TV</li>
                    <li><i class="icon_set_2_icon-104"></i>Giường cở lớn</li>
                    <li><i class="icon_set_2_icon-111"></i>Bồn tắm</li>
                    <li><i class="icon_set_2_icon-106"></i>Phone</li>
                </ul>
            </div>
           
         <div class="row">
                <div class="col-md-3">
                    <h3>Chi tiết </h3>
                </div>
                <div class="col-md-9">
                    <p style="font-size: 18px;">
                        {!! $pro->product_content !!}
                    </p>
                    <h4>Tiện nghi trong phòng</h4>
                   
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                         <ul class="list_ok">
                                <li>Coffee </li>
                                <li>Wifi</li>
                                <li>Điện thoại</li>
                                <li>Laptop</li>
                            </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                         <ul class="list_ok">
                                <li>Gương</li>
                                <li>Khăn tắm/li>
                                <li>Đèn</li>
                                <li>Tủ lạnh</li>
                            </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                         <ul class="list_ok">
                                <li> Lò vi sóng</li>
                                <li>Máy sấy tóc</li>
                                <li>Tv</li>
                                <li>Điều hòa nhiệt độ</li>
                            </ul>
                    </div>
                    </div><!-- End row  -->
                    
                     <!-- start pricing table -->
                        
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

            <hr>
            
             
            <hr>
            <div class="row">
            <div class="col-md-3">
                    <h3>Thông Tin</h3>
                </div>
                <div class="col-md-9">
                <ul id="policies">
                    <li><i class="icon_set_1_icon-83"></i><h5>Ngày nhận và ngày trả phòng</h5>
                    <p>Nhận phòng đúng ngày đúng giờ mà bạn chọn và đã được sắp xếp</p>
                    </li>  
                    <li><i class="icon_set_1_icon-47"></i><h5>Hút thuốc</h5>
                    <p>Khách hàng không được hút thuốc ở sảnh( Cấm hút thuốc )</p>
                    </li>
                    <li><i class="icon_set_1_icon-35"></i><h5>Thanh toán</h5>
                    <p>Khách hàng có thể thanh toán qua nhiều hình thức khác nhau như: qua thẻ hoặc trả tiền mặt sau khi trả phòng </p>
                    </li>
                                       
                    </ul>
                </div>
                </div>
            </div><!-- End col -->
          
              <div class="col-md-4" id="sidebar">
            <div class="theiaStickySidebar">
                <div class="box_style_1">
                    <div id="message-booking"></div>
                    <form role="form" action="{{URL::to('/book-now')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                                <!-- @foreach($uud as $key => $pro)
                                 <input name="uud" type="hidden" value="{{ $pro->uudai_connten }}">   
                                @endforeach -->
                                
                                <input name="book_tinhtrang" type="hidden" value="0">
                                

                    <input name="room_type" id="room_type" type="hidden" value="Double room">   
                        <div class="row">
                            <h3 class="text-center" style="color: red;" >Điền Thông Tin Đặt Phòng  <br> <br>
                                 
                                @foreach($book as $key => $pro)
                                <input type="hidden" value="{{ $pro->product_id }}" placeholder="{{ $pro->product_name }}"  name="book">                    
                                @endforeach
                             
                            </h3>
                            <br>
                            
                           
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Ngày đi</label>
                                    <input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Nhập Ngày đi" id="check_in" name="book_nd">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Ngày về</label>
                                   <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Nhập ngày về" id="check_out" name="book_nv">
                                   <span class="input-icon"><i class="icon-calendar-7"></i></span>
                               </div>
                            </div>
                        </div><!-- End row -->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                <label>Số người</label>
                                   <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="book_sn">
                                        <input type="text" name="book_sn" id="adults" value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="book_sn">
                                    </div>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                <label>Tổng số phòng   </label>
                                    <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="book_gnp">
                                        <input type="text" name="book_gnp" id="children"  value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="book_gnp">
                                    </div>
                               </div>
                            </div>
                        </div><!-- End row -->
                        <div class="row">
                            
                              <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                    <label>Họ Tên</label>
                                        <input type="text" class="form-control" name="book_ht" id="name_booking" placeholder="Điền Họ và Tên">
                                   </div>
                                   </div>
                                   <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                    <label>Email</label>
                                        <input type="text" class="form-control" name="book_em" id="email_booking" placeholder="Nhập Email">
                                   </div>
                                   </div>
                                   <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                        <input type="text" class="form-control" name="book_sdt" id="email_booking" placeholder="Nhập SDT">
                                   </div>
                                   </div> 
                                             
                                   <div class="col-md-12 col-sm-12">
                                   <div class="form-group">
                                   <button onclick="return confirm('bạn có muốn đặt phòng không')"  type="submit" name="book-now" class="btn btn-info center-block" >Đặt ngay</button>
                                   </div>
                                   </div>
                             </div>
                        </form>
                        <hr>
                        <a href="#0" class="btn_outline"> hoặc Liên hệ với chúng tôi</a>
                        <a href="tel://0985495516" id="phone_2"><i class="icon_set_1_icon-91"></i>+84 985 495 516</a>
                     
                </div><!-- End box_style -->
            </div><!-- End theiaStickySidebar -->
            </div><!-- End col -->
            
        </div><!-- End row -->
                
            </div><!-- End container -->
    

    
    <div id="dtBox"></div><!-- End datepicker -->
    
     

<div id="toTop"></div><!-- Back to top button -->

<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myReviewLabel" style="font-weight:500;">Write your review</h4>
            </div>
            <div class="modal-body">
                <div id="message-review">
                </div>
                <form method="post" action="assets/review.php" name="review" id="review">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="room_type_review" id="room_type_review">
                                    <option value="">Select room type</option>
                                    <option value="Single room">Single Room</option>
                                    <option value="Double Room">Double Room</option>
                                    <option value="King double room">King Double Room</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control" name="position_review" id="position_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Comfort</label>
                                <select class="form-control" name="comfort_review" id="comfort_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <select class="form-control" name="price_review" id="price_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Quality</label>
                                <select class="form-control" name="quality_review" id="quality_review">
                                    <option value="">Please review</option>
                                    <option value="Low">Low</option>
                                    <option value="Sufficient">Sufficient</option>
                                    <option value="Good">Good</option>
                                    <option value="Excellent">Excellent</option>
                                    <option value="Superb">Super</option>
                                    <option value="Not rated">I don't know</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="form-group">
                        <textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" id="verify_review" class="form-control" placeholder="Are you human? 3 + 1 =">
                    </div>
                    <input type="submit" value="Submit" class="btn_1" id="submit-review">
                </form>
            </div>
        </div>
    </div>
</div><!-- End Modal Review -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('public/frontend/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/common_scripts_min.js')}}"></script>
<script src="{{ asset('public/frontend/assets/validate.js')}}"></script>
<script src="{{ asset('public/frontend/js/functions.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script>
  $('.carousel_in').owlCarousel({
    center: true,
    items:1,
    loop:true,
     autoplay:true,
     navText: [ '', '' ],
    addClassActive: true,
    margin:5,
    responsive:{
        600:{
            items:1
        },
         1000:{
            items:2,
            nav:true,
        }
    }
});
</script>
<script src="{{ asset('public/frontend/js/theia-sticky-sidebar.js')}}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script type="text/javascript" src="{{ asset('public/frontend/js/DateTimePicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/DateTimePicker.js"></script>
<script type="text/javascript">$("#dtBox").DateTimePicker();</script>



@endsection