@extends('layout')
@section('content')
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
  
 <style type="text/css">
     .box_style_2{
    box-shadow: 0 0 7px 0.8px rgb(0 0 0 / 10%);
    border-radius: 5px;
     }
     .hr-style{
        width: 50%;border: 2px solid wheat;background: wheat;
     }
 </style>      
  <div class="container margin_60">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                @foreach($book as $key => $pro)
                <div class="row">
                
                    <div class="room_desc clearfix" >
                    <div class="col-md-7">
                         <ul id="lightSlider">
                        <li data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img src="../public/uploads/product/{{ $pro->product_image }}" /> </li>
                        <li data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img src="https://i.imgur.com/KZpuufK.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/KZpuufK.jpg"> <img src="https://i.imgur.com/KZpuufK.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/GwiUmQA.jpg"> <img src="https://i.imgur.com/GwiUmQA.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/DhKkTrG.jpg"> <img src="https://i.imgur.com/DhKkTrG.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/kYWqL7k.jpg"> <img src="https://i.imgur.com/kYWqL7k.jpg" /> </li>
                        <li data-thumb="https://i.imgur.com/c9uUysL.jpg"> <img src="https://i.imgur.com/c9uUysL.jpg" /> </li>
                    </ul>
                        
                    </div>
                    <div class="col-md-5 room_list_desc">
                        <h3>{{ $pro->product_name }}</h3>
                        <p><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>{{ $pro->product_desc }}</p>
                        <ul>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4 " >
                                <span class="tooltip-item"><i class="icon_set_2_icon-104" ></i></span>
                                    <div class="tooltip-content">Giường cỡ Lớn</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                    <div class="tooltip-content">Vòi sen</div>
                              </div>
                              </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                    <div class="tooltip-content">TV</div>
                              </div>
                              </li>
                        </ul>
                        <div class="price">from <strong>${{ $pro->product_price }}</strong> /Ngày<small>Bao gồm cả buổi ăn sáng</small></div>
                        <p>{{ $pro->product_content }}</p>
                        <a href="{{URL::to('/book-room/'.$pro->product_id)}}">

                       <button class="btn btn-primary" type="btn">      
                       Book now !             
                       </button>
                     </a>
                    </div>
                    </div>
                </div><!-- End row room -->  
  @endforeach
                <hr>
            </div>
            <div class="col-lg-3 col-md-4 sidebar">
            
            <div style="padding: 10px 0px;" class="theiaStickySidebar">
            <div  id="general_facilities">
                <P></P>

                <center><h3 style="font-size: 25px;">Cơ sở vật chất chung</h3></center>
                <hr class="hr-style">
                <ul>
                    <li><i class="icon_set_1_icon-86"></i>Wifi miễn phí</li>
                    <li><i class="icon_set_2_icon-103"></i>Dịch vụ giặt ủi</li>
                    <li><i class="icon_set_2_icon-110"></i>Hồ bơi</li>
                    <li><i class="icon_set_1_icon-58"></i>Nhà hàng</li>
                    <li><i class="icon_set_1_icon-27"></i>Nhà xe</li>
                </ul>
            </div>
            <div class="box_style_2">
                <i class="icon_set_1_icon-90"></i>
                <h4>Cần giúp đỡ? Gọi cho chúng tôi</h4>
                <a href="tel://0386546342" class="phone">+84 985 495 516</a>
                <small>Thứ Hai đến Thứ Sáu, 09:00 sáng - 19:30 tối</small>
            </div>

            </div>
            </div>
            </div>
        </div>
<!---book-->
<link rel='stylesheet' href='https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css'>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });
</script>



@endsection
