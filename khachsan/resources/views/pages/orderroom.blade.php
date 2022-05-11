<!DOCTYPE html>
<html>
<head>
  <title>Đặt phòng khách sạn </title>
  <link rel="stylesheet" type="text/css" href="../public/fontend/css/trangchu1.css">
  <style type="text/css">
  
  #swap{
    background: #F0F0F0F0;

  }

</style>
       <link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/bootstrap.min.css')}}">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script>document.getElementsByTagName("html")[0].className += " js";</script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

  <!-- Optional theme -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <meta charset="utf-8">
      <script src="{{asset('public/fontend/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0″> 
  
 <link rel="stylesheet" type="text/css" href="css\phongdondanang.css">
        <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
             
        <link rel="stylesheet" type="text/css" href="js\bootstrap.min.js">
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script>document.getElementsByTagName("html")[0].className += " js";</script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

  <!-- Optional theme -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <meta charset="utf-8"><link rel="stylesheet" type="text/css" href="css\trangchu.css">
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <meta name=”viewport” content=”width=device-width, initial-scale=1.0″> 
  
</head>
<body style="background: #E8E8E8;" >


  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a href="{{URL::to('/trang-chu')}}"><img src="../public/fontend/jmg\logo3.PNG" width="120px;" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#"> Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Giới thiệu </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Liên hệ</a>
      </li>
    </ul>
   <form class="form-inline my-2 my-lg-0" action="{{URL::to('/tim-kiem')}}" method="post">
      {{csrf_field()}}
      <input class="form-control mr-sm-2" type="search" name="keyworks_submit" placeholder="Tìm kiếm" aria-label="Search">
      <input type="submit" class="btn btn-danger" value="tim kiem" name="search_items">
    </form>
  </div>
</nav>
<!--carousel-->

 @yield('content')

<div>
  <div>
    <div>
      <div>
        <div>
<!--footer-->
<footer class="section bg-footer" width="100px;" >
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Về chúng tôi</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="">PointsMAX</a></li>
                            <li><a href="">Tuyển dụng</a></li>
                            <li><a href="">Báo chí</a></li>
                            <li><a href="">Nhật ký mạng</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Điểm du lịch</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="">Thành phố </a></li>
                            <li><a href="">Tỉnh thành</a></li>
                            
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Đối tác của chúng tô</h6>
                        <ul class="list-unstyled footer-link mt-4">
                            <li><a href="">Khách sạn </a></li>
                            <li><a href="">Đối tác liên kết</a></li>
                
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="">
                        <h6 class="footer-heading text-uppercase text-white">Tải ứng dụng</h6>
                        <p class="contact-info mt-4">Ứng dụng iOS</p>
                        <p class="contact-info">Ứng dụng Android</p>
                        <div class="mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true" style="color: #6A5ACD;"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color: #00BFFF;"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google fa-2x" aria-hidden="true" style="color: #FF4500  ;"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-apple fa-2x" aria-hidden="true" style="color:  #800000;"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <p class="footer-alt mb-0 f-14"> 2021 © Email: N&D</p>
        </div>
    </footer>

</div>

<!--subiz-->
<script>!function(s,u,b,i,z){var r,m;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=function(e){return e<=6?5:r(e-1)+r(e-3)},(m=function(e){var t,n,c;5<e||s._subiz_init_2094850928430||(t="https://",t+=0===e?"widget."+i+".xyz":1===e?"storage.googleapis.com":"sbz-"+r(10+e)+".com",t+="/sbz/app.js?accid="+z,n=u.createElement(b),c=u.getElementsByTagName(b)[0],n.async=1,n.src=t,c.parentNode.insertBefore(n,c),setTimeout(m,2e3,e+1))})(0))}(window,document,"script","subiz","acqslaguityzlbhtkzkv");</script>



<!--Kéo lên-->
<script>
  var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

 
</script>

<!--admin-->
 <script>
        var CORRECT_USER = 'admin';
        var CORRECT_PASS = 'admin123';

        var inputUsername = document.getElementById('user');
        var inputpassword = document.getElementById('pass');

        var loginbox = document.getElementById('loginbox');
        if (loginbox.attachEvent) {
            loginbox.attachEvent('submit', onFormSubmit);
        } else {
            loginbox.addEventListener('submit', onFormSubmit);
        }

        function onFormSubmit(e) {
            if (e.preventDefault) e.preventDefault();

            var user = inputUsername.value;
            var pass = inputpassword.value;

            if (user == CORRECT_USER && pass == CORRECT_PASS) {
                window.location = './adminstrap_theme/adminstrap_theme/index.html';

            } else {
                alert('Bạn đã nhập sai tên đăng nhập hoặc mật khẩu, Vui lòng nhập lại.')
            }
            return false;
        }
    </script>



</body>
</html>
