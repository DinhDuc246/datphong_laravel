<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="receipt bg-white p-3 rounded"><img src="https://media-cdn.tripadvisor.com/media/photo-m/1280/19/5e/39/28/khach-s-n-elizabeth.jpg" width="120">
                <h4 class="mt-2 mb-3">Đơn đặt phòng của bạn đã được xác nhận!</h4>
                <h2 class="name">Chào bạn,</h2><span class="fs-12 text-black-50">Đơn hàng của bạn đã được xác nhận</span>
                <hr>
                <h3 class="text-center">Thông Tin Khách Hàng</h3>
                <hr>
                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                	
                    <div><span class="d-block fs-12">Họ Và Tên :</span><span class="font-weight-bold">{{$ht}}</span></div>
                    <div><span class="d-block fs-12">Email:</span><span class="font-weight-bold">{{$em}}</span></div>
                    <div><span class="d-block fs-12">Số Điện Thoại :</span><span class="font-weight-bold">{{$sdt}}</span></div>
                    
                </div>
                <hr>
                <h3 class="text-center">Thông Tin Đơn Đặt Phòng</h3>
             <hr>
                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                	
                	<div><span class="d-block fs-12">Mã Đơn Đặt Phòng :</span><span class="font-weight-bold">{{$id}}</span></div>
                    <div><span class="d-block fs-12">Ngày Đi                :</span><span class="font-weight-bold">{{$nd}}</span></div>
                    <div><span class="d-block fs-12">Ngày Về                :</span><span class="font-weight-bold">{{$nv}}</span></div>
                    <div><span class="d-block fs-12">Số Người               :</span><span class="font-weight-bold">{{$sn}}</span></div>
                    <div><span class="d-block fs-12">Tổng Số Phòng Đặt      :</span><span class="font-weight-bold">{{$tspd}}</span></div>
                    <div><span class="d-block fs-12">Phương Thức Thanh toán :</span><span class="font-weight-bold">Sau khi nhân phòng</span></div>
                    
                   
                </div>


                <hr>
                <div class="d-flex justify-content-between align-items-center product-details">
                    <div class="d-flex flex-row product-name-image"><img class="rounded" src="https://www.hoteljob.vn/files/Anh-HTJ-Hong/mau-tam-trang%20tri-giuong-khach-san-dep-nhat-19.jpg" width="80">
                        <div class="d-flex flex-column justify-content-between ml-2">
                            <div><span class="d-block font-weight-bold p-name">Khách san: {{$name}} <br></span><span class="fs-12">Loại phòng : Phòng đơn <br></span><span class="fs-12">Địa chỉ :{{$dc}} <br></span><span class="fs-12">Số Ngày Đặt :{{$datediff1}} <br></span></div><span class="fs-12">Giờ nhận phòng: 9h30 </span>
                        </div>
                    </div>
                    <div class="product-price">
                        <h5>Giá/Ngày :{{$price}}$</h5>
                    </div>
                </div>
               
                <div class="mt-5 amount row">
                    <div class="d-flex justify-content-center col-md-6"></div>
                    <div class="col-md-6">
                        <div class="billing">
                            <div class="d-flex justify-content-between"><span>Giá :</span><span class="font-weight-bold">{{$price}}$</span></div>
                            <div class="d-flex justify-content-between mt-2"><span>Dịch vụ</span><span class="font-weight-bold"></span></div>  
                            <hr>
                           <br> <h4>Tổng Tiền Cần Phải Thanh Toán: {{$ttctt}} $<br></h4>
                        </div>
                    </div>
                </div><span class="d-block">Ngày & Giờ Giao Phòng </span><span class="font-weight-bold text-success">{{$nd}} vào 9h30 <br>
                </span><span class="d-block mt-3 text-black-50 fs-15">Chúng tôi sẽ xác nhận giao phòng khi khách hàng đến nhận phòng!</span>
                <hr>
                <div class="d-flex justify-content-between align-items-center footer">
                    <div class="thanks"><span class="d-block font-weight-bold">Cảm ơn bạn vì đã đặt phòng khách sạn</span><span> FAbet</span></div>
                    <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Cần giúp đỡ hãy liên hệ</span><span> hotline - 0835070557</span></div>
                </div>
            </div>
        </div>
    </div>
                         <h3>ĐÂY LÀ EMAIL TỰ ĐỘNG VUI LÒNG KHÔNG PHẢN HỒI LẠI EMAIL</h3>
</div>
</body>
</html>
<style type="text/css">
	body {
    background-color: #eee
}

.fs-12 {
    font-size: 12px
}

.fs-15 {
    font-size: 15px
}

.name {
    margin-bottom: -2px
}

.product-details {
    margin-top: 13px
}
</style>

<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>

<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>