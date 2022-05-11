@extends('layout')
@section('content')

       
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
                                     <div class="col-md-12"> <span>Thanks For submitting your details with BBBootstrap.com. we will send you a confirmation email. We will review your details and revert back.</span> </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
           
       @endsection