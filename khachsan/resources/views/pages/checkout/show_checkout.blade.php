
@extends('layout')
@section('content')

<form action="{{URL::to('/save-checkout')}}" method="POST">
	{{csrf_field()}}
<div class="col-lg-6 mb-4" style="padding-top: 0px; padding-left: 500px;	 " >
        <div class="container mt-2" style=" width:410px;">
          <?php 
  $massage = Session::get('massage');
  if($massage){
    echo $massage;
    Session::put('massage',null);
  } 
   ?>

        	<p><h2 align="center" style="padding-top: 100px;">Điền Đầy Đủ Thông Tin Đặt Phòng</h2></p>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="nav1" data-toggle="tab" href="#hottel" style="width:100px; text-align: center;">HOTTEL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#car" style="width:120px; text-align: center;">Thông Tin</a>
            </li>

        </ul>

        <div class="tab-content" style="border:1px solid #F2E6E6; ">
            <div id="hottel" class="container tab-pane active">

                <br><br>
     <input type="text" class="form-control" id="inputEmail4" name="datphong_sn" placeholder="Số Người">
                
                <br>

      <input type="text" class="form-control" id="inputEmail4" name="datphong_tks" placeholder="Tên khách sạn">
                <br>
                <input st id="datepicker" name="datphong_cid" placeholder="Check-In Date" />
                <script>
                    $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4'
                    });
                </script>
                <br>

      


                <input st id="datepicker1" name="datphong_cod" placeholder="Check-Out Date" />
                <script>
                    $('#datepicker1').datepicker({
                        uiLibrary: 'bootstrap4'
                    });
                </script>
                <br>
                <label for="inputEmail4"> Thời gian đến nhận phòng </label>
                <select class="form-control" name="datphong_tg">
                   <option>Thời gian</option>
                       <option>7:00 AM</option>
                       <option>8:00 AM</option>
                       <option>9:00 AM</option>
                       <option>10:00 AM</option>
                       <option>11:00 AM</option>
                       <option>12:00 PM</option>
                       <option>13:00 PM</option>
                       <option>14:00 PM</option>
                       <option>15:00 PM</option>
                       <option>16:00 PM</option>
                       <option>17:00 PM</option>
                       <option>18:00 PM</option>
                       <option>19:00 PM</option>
                       <option>20:00 PM</option>
                       <option>21:00 PM</option>
                       <option>22:00 PM</option>
                       <option>23:00 PM</option>


                 </select>
                <br>
                
            </div>


            <div id="car" class="container tab-pane fade"><br>
                <form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Họ và Tên </label>
      <input type="text" class="form-control" id="inputEmail4" name="datphong_ht" placeholder="Họ và Tên">
    </div>
    
  </div>
  <div class="form-group">
  	<label for="inputPassword4">Số Điện Thoại</label>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button type="button" class="btn btn-outline-secondary"><img src="{{('public/fontend/jmg/vn.png')}}" width="30px;"></button>
    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
      <span class="sr-only"></span>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#"></a>
      <a class="dropdown-item" href="#"></a>
      <a class="dropdown-item" href="#"></a>
      <div role="separator" class="dropdown-divider"></div>
      <a class="dropdown-item" href="#"></a>
    </div>
  </div>
  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" name="datphong_sdt" placeholder="Số Điện Thoại">
</div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email</label>
    <input type="text" class="form-control" id="inputAddress2" name="datphong_e" placeholder="Email">
  </div>


 
  
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

  <p align="center">
  <button type="submit" class="btn btn-primary btn-sm">Đặt Phòng</button>

</p>
</form>
            </div>

</div>


        </div>
    </div>
    </form>
@endsection