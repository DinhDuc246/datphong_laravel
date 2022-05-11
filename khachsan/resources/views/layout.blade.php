<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, bed and breakfast, accommodations, travel, motel">
    <meta name="description" content="FC Recom - Hotel and Bed&amp;Breakfast">
    <meta name="author" content="Ansonika">
    <title>FAbet Hotel</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('public/frontend/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/frontend/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('public/frontend/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('public/frontend/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('public/frontend/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- BASE CSS -->
    <link href="{{ asset('public/frontend/css/base.css')}}" rel="stylesheet">
     <link href="{{ asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/home.css')}}">
     <style type="text/css">
         @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,500&display=swap');

         .main-menu > ul > li > a {color: #333; padding: 15px 10px px  10px; font-size:17px; margin:0; font-weight:500;}
         .form-control{color:#333;height:38px;border-radius:2px;line-height:1.5!important}
         .btn{
            padding: 6px 12px;
         }
         *{
            font-family:  'Lora', serif !important;
         }
         .blur{
            background: rgba(50, 50, 50, 0.2); 
            backdrop-filter: blur(1px)
         }
         header{
            box-shadow: 0 0 7px 5px rgb(0 0 0 / 20%);

         }
         .main-menu {
            padding: 5px 0px;
         }
     </style>
</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->
    
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
  
     <!-- Header ================================================== -->
    <header style="background-color: ">
    <div class="container">
        <div class="row">
            <div class="col--md-3 col-sm-3 col-xs-3">
                <a href="{{URL::to('/')}}" >
                <img src="{{ asset('public/fontend/jmg/logo3.png')}}" style="width: 140px; height: 50px;" alt="" data-retina="true" class="logo_normal">
                
                </a>
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
            
           
            <div class="main-menu">
                <div id="header_menu">
                     <img src="{{ asset('public/frontend/img/logo.png')}}" width="141" height="40" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                 <ul>
                    <li class="submenu">
                    <a href="{{URL::to('/')}}" class="show-submenu">Trang chủ</a>
                    </li>
                                        <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Phòng</a>
                    <ul>
                        <li><a href="{{URL::to('/phongdon')}}">Phòng đơn</a></li>
                        <li><a href="{{URL::to('/phongdoi')}}">Phòng đôi</a></li>
                    </ul>
                    </li>
                    
                    
                   
                     
                    
                    <li><a href="{{URL::to('/contacts')}}">Liên hệ</a></li>
                    <li style="padding-left: 20px;"><form class="form-inline my-2 my-lg-0" action="{{URL::to('/tim-kiem')}}" method="post">
      {{csrf_field()}}
      <input class="form-control mr-sm-2 " style="border-radius: 5px" type="search" name="keyworks_submit" placeholder="Tìm kiếm" aria-label="Search">
      <input type="submit" class="btn btn-danger" value="Tìm kiếm" name="search_items">
    </form></li>
 
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
  
			    <div class="input-group-overlay d-none d-lg-flex mx-4" style="margin-top: 10px ">
			     <input class="form-control appended-form-control" name="keyworks_submit"  type="text" placeholder="Search hotel">
			        <div class="input-group-append-overlay"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
			    </div>
			
        </div>
      </div>
    </div>
  </div>
    </header>
    <!-- End Header =============================================== -->
    
 @yield('content')

    <section class="promo_full">
    <div class="promo_full_wp">
        <div class="blur">
            <h3>CẢM ƠN QUÝ KHÁCH ĐÃ ĐẾN FAbet<span></span></h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel_testimonials">
                        
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="{{ asset('public/fontend/jmg/avt1.jpg')}}" alt="" class="img-circle"></figure>
                                        <h4>FAbet<small>24/06/2001</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Chúng tôi luôn coi khách hàng là khách mời tham dự một bữa tiệc mà chúng tôi là chủ nhà. Mỗi ngày chúng tôi làm việc để mọi khía cạnh quan trọng của trải nghiệm khách hàng tốt hơn một chút "
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                  
                            
                        </div><!-- End carousel_testimonials -->
                    </div><!-- End col-md-8 -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End promo_full_wp -->
    </div><!-- End promo_full -->
    </section><!-- End section -->
    
     <footer >
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <img src="{{ asset('public/fontend/jmg/logo3.png')}}" style="width: 160px; height: 80px;" alt="" id="logo_footer" data-retina="true">
					<ul id="contact_details_footer">
          				<li>Phone</li>
                        <li><a href="tel://004542344599">+84 835070557</a> <a href="#0"><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
                    </ul>  
                </div>
                <div class="col-md-2 col-sm-4">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Activities</a></li>
                        <li><a href="#">Contact us</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>                
                <div class="col-md-3 col-sm-4">
                    <h3>Change language</h3>
                   <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4"  id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
					<div id="message-newsletter_2"></div>
						<form method="post" action="assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                          </div>
                            <input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
                    	</form>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                          <p>Copyright © 2022 <a target="_blank" title="Free CSS Themes" href="http://freecssthemes.com/">FAbet</a>  |  All Right Reserved</p>

                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->
        
<!-- COMMON SCRIPTS -->
<script src="{{ asset('public/frontend/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/common_scripts_min.js')}}"></script>
<script src="{{ asset('public/frontend/assets/validate.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('public/frontend/js/morphext.min.js')}}"></script>
<!-- CHi tiết khách sạn -->
<script src="{{ asset('public/frontend/jquery/2.2.4/jquery.min.js')}}"></script>

<script>
$("#js-rotating").Morphext({
    animation: "fadeIn", // Overrides default "bounceIn"
    separator: ",", // Overrides default ","
    speed: 2500, // Overrides default 2000
    complete: function () {
        // Overrides default empty function
    }
});
</script>
</body>
</html>
