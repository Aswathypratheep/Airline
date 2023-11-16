@extends('layouts.user')
@section('content')
<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto mx-lg-0">
                <h4 class="rt-strong text-uppercase rt-mb-20"> Review your trip </h4>
            </div><!-- /.col-12 -->
            <div class="col-xl-9 mx-auto col-lg-10">
                <div class="alert rt-alrt-1">
                    <div class="media">
                    <ion-icon style="color:black;font-size: 1.9rem; --ionicon-stroke-width: 80px;" name="checkmark-outline"></ion-icon>
                        <div class="media-body">
                            <h6 class="mt-0 rt-semiblod">Nice Job! You picked one of our best value flights.</h6>
                            Book now so you don't miss out on this price!
                        </div>
                    </div>
                </div><!-- /.alert -->
                <div class="section-title-spacer"></div><!-- /.rt-section-title-spacer -->
                <div class="flt-dtls-box rt-mb-30">
                    <div class="upper-top-content d-md-flex flex-md-row justify-content-md-between align-items-center">
                        <div class="left">
                            <span>{{$ticket->from}}</span> <span><img src="/images/lineimage.png" alt="line image" draggable="false"></span> <span>{{$ticket->to}}</span>
                            <p>{{$ticket->date}}| 1 adult</p>
                        </div><!-- /.left -->
                        
                    </div><!-- /.upper-top-content -->
                    <div class="flight-list-box">
                        <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                            <div class="flight-logo">
                                <img src="/storage/{{$ticket->planelogo}}" alt="flt logo" draggable="false">
                            </div><!-- /.flight-logo -->
                            <div class="pricing">
                                <h5>{{$ticket->plane_name}}</h5>
                                <!--<p>TR978 | Airbus A320-212</p>-->
                            </div><!-- /.pricing -->
                            <div class="flight-time d-flex justify-content-between align-items-center">
                                <div class="left">
                                    <span class="d-block">{{$ticket->departure}}</span>
                                    <span class="d-block">{{$ticket->from}}</span>
                                </div><!-- /.left -->
                                <div class="middle">
                                    <img src="/images/line.png" alt="time shape" draggable="false">
                                </div><!-- /.middle -->
                                <div class="right">
                                    <span class="d-block">{{$ticket->arrival}}</span>
                                    <span class="d-block">{{$ticket->to}}</span>
                                </div><!-- /.rght -->
                            </div><!-- /.flight-time -->
                            <div class="flight-detils">
                              <!--  <span class="d-block"><i class="icofont-clock-time"></i> /.time 4h5m</span>-->
                              <!--  <span class="d-block"><a href="#collapseExample" class="flt-d-clic" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExample">Flight details <i class="icofont-simple-down"></i></a></span>-->
                            </div><!-- /.flight-detils -->
                            <div class="trip">
                                <span class="d-blok">&#x20B9;{{$ticket->price}}</span>
                                <!--<span class="d-block">Roundtrip</span> -->
                            </div><!-- /.trip -->
                           <!-- <div class="book-now">
                                <a href="#" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                            </div>--><!-- /.book-now -->
                        </div> <!--/.top-content -->
                       <!-- <div class="bottom-content collapse show" id="collapseExample" style="">
                            <p><span>Scoot  TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                            <ul class="flight-timeline">
                        
                                <li>
                                    <span>Nov 12 10:55</span>
                        
                                </li>
                                <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                                <li>
                                    <span>Nov 12 15:00</span>
                        
                                </li>
                                <li><span>SIN - Singapore Changi Airport T2</span></li>
                            </ul>
                        </div>--><!-- /.bottom content -->
                    </div><!-- /.flight-list-box -->
                </div><!-- /.flt-dtls-box -->
              
                <div class="flight-list-box rt-mb-30 pt-30">
                    <h4 class="f-size-24 text-capitalize rt-mb-30  rt-semiblod">Passenger Info</h4>
                    <h6 class="text-333 rt-medium">Passenger details</h6>
                    <br>
                    <br>
                    <form action="/stripe" method="POST" class="rt-form rt-line-form flight-lable" id="details-form">
                       @csrf
                        <div class="row">
                            <div class="col-md-6 rt-mb-30 ">
                                <label for="fst-name">First Name</label>
                                <input name="Firstname" type="text" class="form-control" id="firstname" placeholder="Enter Your First Name" fdprocessedid="b0xe4q">
                                <span id="firstname-error" class="error-msg"></span>
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="lst-name">Last Name</label>
                                <input name="Lastname" type="text" class="form-control" id="lst-name" placeholder="Enter Your Last Name" fdprocessedid="bjr5gi">
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <label for="select-1"></label>
                                <select name="nopass" id="select-1" fdprocessedid="8hpd7" onchange="passengers(this)">
                                    <option value="0" disabled="" selected="">no of passengers</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div><!-- /.col-md-6 -->
                            <div class="col-lg-6 rt-mb-30">
                                <div class="row">
                                  <!--  <div class="col-md-6">
                                        <label>Gender</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2s" value="option2">
                                            <label class="form-check-label" for="inlineRadio2s">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2ss" value="option2">
                                            <label class="form-check-label" for="inlineRadio2ss">Male</label>
                                        </div>
                                    </div> --><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="st-date">date</label>
                                        <input name="date" type="date" class="form-control" placeholder="date" id="st-date" fdprocessedid="k71qfy">
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.col-md-6 -->
                           <!-- <div class="col-md-6 rt-mb-30">
                                <label for="select-2">Class</label>
                                <select id="select-2" fdprocessedid="46eyzi">
                                    <option value="1">Room one</option>
                                    <option value="2">Room two</option>
                                    <option value="3">Room three</option>
                                    
                                </select>
                            </div>--><!-- /.col-md-6 -->
                           <!-- <div class="col-md-6 rt-mb-30">
                                <label for="id-number">ID Number</label>
                                <input type="text" placeholder="ID Number" class="form-control" fdprocessedid="uhiwmk">
                            </div> --><!-- /.col-md-6 -->
                            <!--<div class="col-md-6">
                                <p class="f-size-14">Please ensure the ID is valid for at least 6 months
                                after the date of departure.</p>
                            </div>--><!-- /.col-12 -->
                        </div><!-- /.row -->
                        <h6 class="text-333 rt-semiblod">Contact Details</h6> <br>
                        <div class="row">
                            <div class="col-md-6 rt-mb-30">
                                <label for="contact-name">Contact name</label>
                                <input name="contactname" type="text" placeholder="Contact name" id="contact-name" fdprocessedid="2i21gd">
                                
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 rt-mb-30">
                                <label for="mbl-name">Mobile phone</label>
                                <input name="mobileno" type="tel" placeholder="Enter Your Number" id="mbl-name" fdprocessedid="5u0j3e">
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <label for="eml-name">Email</label>
                                <input name="email" type="email" placeholder="Enter Your Email" id="eml-name" fdprocessedid="mr9jd">
                            </div><!-- /.col-md-6 -->
                       </div>
                       <input type='hidden' id="totali" name="total" value="{{$ticket->price}}">
                        <input type='hidden' name="productname" value="Flight Ticket">
                        <input type='hidden' name="ticketid" value="{{$ticket->id}}">
                    </form>
                </div><!-- /.flight-list-box -->
                <!-- /.flight-list-box -->
                <!-- /.flight-list-box -->
            </div><!-- /.col-lg-9 -->
            <div class="col-xl-3 mx-auto mt-5 mt-xl-0">
                <div class="rt-sidebar-group">
                    <div class="rt-widget final-booking">
                        
                        <ul>
                            <li class="clearfix">
                    
                                <span>Passengers</span>
                                <span id="passengers" class="float-right">&#x20B9;{{$ticket->price}} x 1</span>
                            </li>
                             <!--<li class="clearfix">
                    
                               <span>Fare</span>
                                <span class="float-right">$170</span>
                            </li>
                            <li class="clearfix">
                    
                                <span>taxex &amp; Fees</span>
                                <span class="float-right">$33.34</span>
                            </li>-->
                            <li class="clearfix sub-total">
                    
                                <span>Total</span>
                                <span id="total" class="float-right"><small>&#x20B9;</small>{{$ticket->price}}</span>
                            </li>
                            
                        </ul>
                        <div class="text-center rt-mb-30">
                            
                                <input type="button" id="submitbtn" class="rt-btn rt-gradient pill rt-sm" value="Continue Booking"/>
                            
                        </div><!-- /.text-center -->
                        <p class="f-size-12 line-height-12">By proceeding, I acknowledge that I
                            have read and agree to Sky Stream
                            <a href="#">Terms of Use</a> and <a href="#">Privacy Statement.</a></p>
                    </div><!-- /.rt-widget -->

                </div><!-- /.rt-sidebar-group -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<script>
    function passengers(selectobject)
    {
        var value=selectobject.value;
        var total={{$ticket->price}}*selectobject.value;
        document.getElementById("passengers").innerHTML = "&#x20B9;{{$ticket->price}} x "+selectobject.value;
        document.getElementById("total").innerHTML = "<small>&#x20B9;</small>" + total;
        document.getElementById("total").value = total;
        document.getElementById("totali").value = total;
    }

      var form = document.getElementById("details-form");

      document.getElementById("submitbtn").addEventListener("click", function () {
       form.submit();
      });

//----------------form validation----------------------------
var firstname = document.getElementById("firstname");




function validateForm(event) {
  // Validation for each field
  if (!validateName() || !validatePhone() || !validateEmail()) {
    event.preventDefault(); // Prevent form submission if validation fails
    alert('Please fill in all fields correctly before submitting the form.');
  }
}

function validateName() {
  var nameInput = document.getElementById('name');
  var nameError = document.getElementById('nameError');
  var nameRegex = /^[a-zA-Z\s]+$/;

  if (!nameRegex.test(nameInput.value)) {
    nameError.textContent = 'Please enter a valid name (only letters and spaces allowed).';
    return false;
  } else {
    nameError.textContent = '';
    return true;
  }
}

function validatePhone() {
  var phoneInput = document.getElementById('phone');
  var phoneError = document.getElementById('phoneError');
  var phoneRegex = /^\d{10}$/; // Assuming a 10-digit phone number

  if (!phoneRegex.test(phoneInput.value)) {
    phoneError.textContent = 'Please enter a valid 10-digit phone number.';
    return false;
  } else {
    phoneError.textContent = '';
    return true;
  }
}

function validateEmail() {
  var emailInput = document.getElementById('email');
  var emailError = document.getElementById('emailError');
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailRegex.test(emailInput.value)) {
    emailError.textContent = 'Please enter a valid email address.';
    return false;
  } else {
    emailError.textContent = '';
    return true;
  }
}

</script>
@endsection