@extends('layout')
@section('content')

      <h2 style=" color: #99FF99; padding-top: 100px;  " align="center">Kết quả tìm kiếm</h2>
     
      <div class="card-deck" style="color: #000000;">
   @foreach($search_product as $key => $product)
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="#"><img src="public/uploads/product/{{ $product->product_image }}" alt="" class="img-responsive"></a><span class="wow zoomIn" data-wow-delay="0.2s"><sup>$</sup>{{ $product->product_price }}<small>Per night</small></span></figure>
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
                                    King size bed
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                <div class="tooltip-content">
                                    Shower
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                <div class="tooltip-content">
                                    Plasma TV
                                </div>
                            </div>
                            </li>
                        </ul>
                        <a href="{{URL::to('/room-list/'.$product->product_id)}}" class="btn_1_outline">Read more</a>
                    </div><!-- End room_desc_home -->
                </div>         
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
 @endforeach

</div>

@endsection