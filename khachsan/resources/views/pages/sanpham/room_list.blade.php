
@extends('layout')
@section('content')

 <div class="modal-content" style="margin-top: 100px">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Book room hotel</h5>
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
                                @foreach($book as $key => $pro)
                                 <div class="row">
                                        <div class="card blog-horizontal">
                                        <div class="card-body">
                                            <div class="card-img-actions mr-sm-3 mb-3"> 
                                                  <img src="../public/uploads/product/{{ $pro->product_image }}" hi class="img-fluid card-img" alt="">

                                            </div>
                                            <div class="mb-3">
                                                <h5 class="d-flex font-weight-semibold flex-nowrap my-1"> <a href="#" class="text-default mr-2" data-abc="true"><span id="product_QView_name">{{ $pro->product_name }}</span></a> <span id="product_QView_price" class="text-danger-400 ml-auto"></span> </h5>
                                                <ul class="list-inline list-inline-dotted text-muted mb-0">
                                                    <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">{{ $pro->product_content }}</a></li>
                                     
                                                </ul>
                                            </div>
                                            <p>{{ $pro->product_desc }}</p> <a href="#" data-abc="true">{{ $pro->product_price }}</a>
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

                                 @endforeach
                             </div>
                             <div id="step-2">
                 <div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Điền Thông tin khách hàng</h1>
                    </div>
                    <form>
                        <div class="form-group"> <input class="form-control" type="text" placeholder="Name"> <span class="form-label">Name</span> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="date" required> <span class="form-label">Check In</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="date" required> <span class="form-label">Check out</span> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>no of rooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Rooms</span> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>no of adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Adults</span> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> <select class="form-control" required>
                                        <option value="" selected hidden>no of children</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select> <span class="select-arrow"></span> <span class="form-label">Children</span> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="email" placeholder="Enter your Email"> <span class="form-label">Email</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="tel" placeholder="Enter you Phone"> <span class="form-label">Phone</span> </div>
                            </div>
                        </div>
                        <div class="form-btn"> <button class="submit-btn">Book Now</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                             </div>
                             <div id="step-3" class="">
                              <div class="row justify-content-center">
        <div class=" col-lg-6 col-md-8">
            <div class="card p-3">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="heading text-center">BBBootstrap</h2>
                    </div>
                </div>
                <form class="form-card">
                    <div class="row justify-content-center mb-4 radio-group">
                        <div class="col-sm-3 col-5">
                            <div class='radio selected mx-auto' data-value="dk"> <img class="fit-image" src="https://i.imgur.com/5TqiRQV.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="visa"> <img class="fit-image" src="https://i.imgur.com/OdxcctP.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="master"> <img class="fit-image" src="https://i.imgur.com/WIAP9Ku.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="paypal"> <img class="fit-image" src="https://i.imgur.com/cMk1MtK.jpg" width="105px" height="55px"> </div>
                        </div> <br>
                    </div>
                    <div class="row justify-content-center form-group">
                        <div class="col-12 px-auto">
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline1" type="radio" name="customRadioInline1" class="custom-control-input" checked="true"> <label for="customRadioInline1" class="custom-control-label label-radio">Private</label> </div>
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline2" type="radio" name="customRadioInline1" class="custom-control-input"> <label for="customRadioInline2" class="custom-control-label label-radio">Business</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" name="Name" placeholder="John Doe"> <label>Name</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" id="cr_no" name="card-no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"> <label>Card Number</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group"> <input type="text" id="exp" name="expdate" placeholder="MM/YY" minlength="5" maxlength="5"> <label>Expiry Date</label> </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group"> <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12"> <input type="submit" value="Pay 100 EUR" class="btn btn-pay placeicon"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
                             </div>
                             <div id="step-4" class="">
                                 <div class="row">
                                     <div class="col-md-12"> <span>Thanks For submitting your details with BBBootstrap.com. we will send you a confirmation email. We will review your details and revert back.</span> </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
 

 <script type="text/javascript">
     $(document).ready(function(){

//For Card Number formatted input
var cardNum = document.getElementById('cr_no');
cardNum.onkeyup = function (e) {
if (this.value == this.lastValue) return;
var caretPosition = this.selectionStart;
var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
var parts = [];

for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {
    var c = this.value[i];
    if (c < '0' || c> '9') {
        caretPosition--;
        }
        }
        caretPosition += Math.floor(caretPosition / 4);

        this.value = this.lastValue = parts.join('-');
        this.selectionStart = this.selectionEnd = caretPosition;
        }

        //For Date formatted input
        var expDate = document.getElementById('exp');
        expDate.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i +=2) { parts.push(sanitizedValue.substring(i, i + 2)); } for (var i=caretPosition - 1; i>= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c> '9') {
                caretPosition--;
                }
                }
                caretPosition += Math.floor(caretPosition / 2);

                this.value = this.lastValue = parts.join('/');
                this.selectionStart = this.selectionEnd = caretPosition;
                }

                // Radio button
                $('.radio-group .radio').click(function(){
                $(this).parent().parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                });
                })
 </script>


<style type="text/css">

    .container-fluid {
    background-color: #C5CAE9
}

.heading {
    font-size: 40px;
    margin-top: 35px;
    margin-bottom: 30px;
    padding-left: 20px
}

.card {
    border-radius: 10px !important;
    margin-top: 60px;
    margin-bottom: 60px
}

.form-card {
    margin-left: 20px;
    margin-right: 20px
}

.form-card input,
.form-card textarea {
    padding: 10px 15px 5px 15px;
    border: none;
    border: 1px solid lightgrey;
    border-radius: 6px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: arial;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

.form-card input:focus,
.form-card textarea:focus {
    -moz-box-shadow: 0px 0px 0px 1.5px skyblue !important;
    -webkit-box-shadow: 0px 0px 0px 1.5px skyblue !important;
    box-shadow: 0px 0px 0px 1.5px skyblue !important;
    font-weight: bold;
    border: 1px solid #304FFE;
    outline-width: 0
}

.input-group {
    position: relative;
    width: 100%;
    overflow: hidden
}

.input-group input {
    position: relative;
    height: 80px;
    margin-left: 1px;
    margin-right: 1px;
    border-radius: 6px;
    padding-top: 30px;
    padding-left: 25px
}

.input-group label {
    position: absolute;
    height: 24px;
    background: none;
    border-radius: 6px;
    line-height: 48px;
    font-size: 15px;
    color: gray;
    width: 100%;
    font-weight: 100;
    padding-left: 25px
}

input:focus+label {
    color: #304FFE
}

.btn-pay {
    background-color: #304FFE;
    height: 60px;
    color: #ffffff !important;
    font-weight: bold
}

.btn-pay:hover {
    background-color: #3F51B5
}

.fit-image {
    width: 100%;
    object-fit: cover
}

img {
    border-radius: 5px
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    border-radius: 6px;
    box-sizing: border-box;
    border: 2px solid lightgrey;
    cursor: pointer;
    margin: 12px 25px 12px 0px
}

.radio:hover {
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2)
}

.radio.selected {
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 155, 0.4);
    border: 2px solid blue
}

.label-radio {
    font-weight: bold;
    color: #000000
}
</style>


@endsection
