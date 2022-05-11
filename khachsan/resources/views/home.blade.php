@extends('layout')
@section('content')

<hr>
<!-- SubHeader =============================================== -->
    <section class="parallax-window" id="home" data-parallax="scroll" data-image-src="{{ asset('public/frontend/img/nen1.jpg')}}" data-natural-width="1400" data-natural-height="550">
    <div id="subheader_home">
        <div id="sub_content">
            <h3 class="caption_header">Khách sạn <strong id="js-rotating">Tốt,Rẻ,Đẹp</strong> </h3>
              
             </div><!-- End sub_content -->
    </div><!-- End subheader -->
    </section><!-- End section -->
    <!-- End SubHeader ============================================ -->
    
    <div class="container margin_60_35">
        <h2 class="main_title"><em></em>Chào mừng bạn đã đến với FAbet Hotel
            <hr style=" width: 15%;border: 1.5px solid wheat;background: wheat;">
            <span>Khách sạn, Giường Ngủ & Bữa ăn sáng</span></h2>
        <p class="lead styled">
            
        </p>
        <div class="row">
            <div class="col-sm-6">
                <div class="mosaic_container">
                    <img src="{{ asset('public/frontend/img/view.jpg')}}" alt="" class="img-responsive add_bottom_30"><span class="caption_2">View Đẹp</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12">
                    <div class="mosaic_container">
                        <img src="{{ asset('public/frontend/img/mosaic_2.jpg')}}" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Phòng ngủ lớn</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="{{ asset('public/frontend/img/mosaic_3.jpg')}}" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Phòng tắm hiện đại</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="{{ asset('public/frontend/img/mosaic_4.jpg')}}" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Sức khỏe</span>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

<hr>
    
    <div class="container-fluid margin_10 galley-qui">
    <section class="grid">
            <div class="text-center">
                <h2>Địa điểm phổ biến</h2>
                <p>Những nơi du khách thường đặt chân đến</p>
                </div>
                <div class="row">
                    <ul class="magnific-gallery">
                        @foreach($all_brand as $key => $brand)
                        <li>
                            <figure>
                                <img style="width: 100%; height: 223px; " src="public/uploads/product/{{ $brand->brand_name }}" alt="">
                                <figcaption>
                                <div class="caption-content">
                                    <a href="{{URL::to('/get-phong/'.$brand->brand_id)}}">
                                        <i class="icon_set_1_icon-32"></i>
                                        <p>{{ $brand->brand_desc }}</p>
                                </a>
                                </div>
                                </figcaption>
                            </figure>
                        </li>
                         @endforeach

                    </ul>
                </div>
              
        </section>
        
       
      </div><!-- End container -->
<hr>
<div class="text-center">
    <h2>Các loại phòng của khách sạn </h2>
    <p> Đẹp, đầy đủ, tiện nghi  </p>

</div>
<div class="container_styled_1">
                 @foreach($all_product as $key => $product)
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="#"><img src="public/uploads/product/{{ $product->product_image }}" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>$</sup>{{ $product->product_price }}<small>Trong 1 ngày</small></span></figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3>{{ $product->product_name }} </h3>
                        <p>
                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>{{ $product->product_desc }}
                        </p>
                        <ul>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                <div class="tooltip-content">
                                    Giường cỡ lớn
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                <div class="tooltip-content">
                                    Vòi sen
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                <div class="tooltip-content">
                                     TV
                                </div>
                            </div>
                            </li>
                        </ul>
                        <a href="{{URL::to('/room-list/'.$product->product_id)}}" class="btn_1_outline">Chi tiết phòng</a>
                    </div><!-- End room_desc_home -->
                </div>         
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
 @endforeach
@endsection
