@extends('layouts.user')

@section('search')
<div class="bredcump-search">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="rt-banner-searchbox flight-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="rt-item_a_first" role="tabpanel" aria-labelledby="rt-item_a_first">
                                    <form action="/user/search" method="POST">
                                        @csrf
                                        <div class="rt-input-group">
                                            <div class="single-input  col-rt-in-3">
                                                <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                                               <option value="1">from</option>
                                               @foreach($places as $place)
                                               <option value="{{$place->id}}">{{$place->place}}</option>
                                               @endforeach
                                           </select>
                                                <span class="input-iconbadge"><img src="/images/home/icons-image/s_icon_1.png" alt=""
                                                   draggable="false"></span>
                                            </div>
                                            <!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <select class="rt-selectactive banner-select" name="to" style="width: 100%">
                                               <option value="1">To</option>
                                               @foreach($places as $place)
                                               <option value="{{$place->id}}">{{$place->place}}</option>
                                               @endforeach
                                           </select>
                                                <span class="input-iconbadge"><img
                                                   src="/images/home/icons-image/s_icon_2.png" alt=""
                                                   draggable="false"></span>
                                            </div>
                                            <!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <input name="date" type="date" class="form-control has-icon" placeholder="Date">
                                            </div>
                                            <!-- /.single-input -->
                                           
                                            <!-- /.single-input -->
                                            <div class="single-input  col-rt-in-1">
                                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </div>
                                            <!-- /.single-input -->
                                        </div>
                                        <!-- /.rt-input-group -->
                                    </form>
                                    <!-- ./ form -->
                                </div>
                                <div class="tab-pane  rtIncative" id="rt-item_a_second" role="tabpanel" aria-labelledby="rt-item_a_second">
                                    <form action="#">
                                        <div class="rt-radio-group">
                                            <div class="dropdown form-check-inline rt-searchlink">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink24" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 Guestes per room
                                             </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink24">
                                                    <a class="dropdown-item" href="#">Room one</a>
                                                    <a class="dropdown-item" href="#">Room two</a>
                                                    <a class="dropdown-item" href="#">Room three</a>
                                                </div>
                                            </div>
                                            <!-- ./dropdown -->
                                        </div>
                                        <!-- /.radio-group -->
                                        <div class="rt-input-group">
                                            <div class="single-input  col-rt-in-3">
                                                <input type="text" class="form-control" placeholder="destination">

                                            </div>
                                            <!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Depart">
                                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                            </div>
                                            <!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <input type="text" class="form-control rt-date-picker has-icon" placeholder="Return">
                                                <span class="input-iconbadge"><i class="icofont-ui-calendar"></i></span>
                                            </div>
                                            <!-- /.single-input -->
                                            <div class="single-input  col-rt-in-3">
                                                <input type="text" class="form-control" placeholder="keywords(optional)">
                                            </div>
                                            <!-- /.single-input -->
                                            <div class="single-input  col-rt-in-1">
                                                <button type="submit"><i class="icofont-search"></i></button>
                                            </div>
                                            <!-- /.single-input -->
                                        </div>
                                        <!-- /.rt-input-group -->
                                    </form>
                                    <!-- ./ form -->
                                </div>
                             
                            </div>
                        </div>
                        <!-- /.rt-banner-searchbox -->

                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
@endsection


@section('content')

<div class="spacer-bottom"></div>
    <!-- /.spacer-bottom -->
    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="rt-BototmTab">
                        <div class="tab-pane show active fade-in-bottom" id="rt-item_b_first" role="tabpanel" aria-labelledby="rt-item_b_first">
                            <div class="row">
                               
                                <!-- /.col-lg-3 -->
                                <div class="col-xl-9 col-lg-10 mx-auto mt-5 mt-xl-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                           <!-- <div class="flight-list-box rt-mb-30">
                                                <form action="#" class="row">
                                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                        <button class="rt-btn pill rt-sm rt-gradient d-block">Recommended</button>
                                                    </div>-->
                                                    <!-- /.col-lg-4
                                                    <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                                                        <select class="rt-selectactive banner-select" name="from" style="width: 100%">
                            <option value="1">Price</option>
                            <option value="2">100</option>
                            <option value="3">100</option>
                            <option value="4">400</option>
                            <option value="5">500</option>
                        </select>
                                                    </div>
                                                   /.col-lg-3 
                                                    <div class="col-lg-3 rt-input-group mini col-md-6  mb-3 mb-md-0">
                                                        <input type="text" class="rt-date-picker form-control" placeholder="Departure Time">
                                                    </div>
                                                     /.col-lg-3 
                                                    <div class="col-lg-3 rt-input-group mini col-md-6 ">
                                                        <input type="text" class="form-control rt-date-picker" placeholder="Arrival Time ">
                                                    </div>
                                                     /.col-lg-3
                                                </form>
                                            </div>-->
                                            <!-- /.flight-list-box -->
                                        </div>

                                        
                                        @foreach($tickets as $ticket)
                                        <!-- /.col-lg-12 -->
                                        <div class="col-lg-12 col-md-6">
                                            <div class="flight-list-box rt-mb-30">
                                                <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                                                    <div class="flight-logo">
                                                        <img src="/storage/{{$ticket->planelogo}}" alt="flt logo" draggable="false">
                                                    </div>
                                                    <!-- /.flight-logo -->
                                                    <div class="pricing">
                                                        <h5>{{$ticket->plane_name}}</h5>
                                                      <!--  <p>TR978 | Airbus A320-212</p>!-->
                                                    </div>
                                                    <!-- /.pricing -->
                                                    <div class="flight-time d-flex justify-content-between align-items-lg-center">
                                                        <div class="left">
                                                            <span class="d-block">{{$ticket->departure}}</span>
                                                            <span class="d-block">{{$ticket->from}}</span>
                                                        </div>
                                                        <!-- /.left -->
                                                        <div class="middle">
                                                            <img src="/images/home/all-img/time-shape-line.png" alt="time shape" draggable="false">
                                                        </div>
                                                        <!-- /.middle -->
                                                        <div class="right">
                                                            <span class="d-block">{{$ticket->arrival}}</span>
                                                            <span class="d-block">{{$ticket->to}}</span>
                                                        </div>
                                                        <!-- /.rght -->
                                                    </div>
                                                    <!-- /.flight-time -->
                                                    <div class="flight-detils">
                                                         <span class="d-block"><ion-icon name="calendar-outline"></ion-icon>{{$ticket->date}}</span>
                                                       <!-- <span class="d-block"><a href="#collapseExample" class="flt-d-clic" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="collapseExample">Flight details <i
                                    class="icofont-simple-down"></i></a></span>!-->
                                                    </div>
                                                    <!-- /.flight-detils -->
                                                    <div class="trip">
                                                        <span class="d-blok">&#x20B9;{{$ticket->price}}</span>
                                                      <!--  <span class="d-block">Roundtrip</span> -->
                                                    </div>
                                                    <!-- /.trip -->
                                                    <div class="book-now">
                                                        <a href="/booking/form/{{$ticket->id}}" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                                                    </div>
                                                    <!-- /.book-now -->
                                                </div>
                                                <!-- /.top-content 
                                                <div class="collapse bottom-content" id="collapseExample">
                                                    <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
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
                                                </div>!-->
                                                <!-- /.bottom content -->
                                            </div>
                                            <!-- /.flight-box -->
                                        </div>
                                        <!-- /.col-lg-12 -->
                                        @endforeach
                                      

                                    </div>
                                    <!-- /.row -->
                                    <!--<nav aria-label="Page navigation example">
                                        <ul class="pagination  rt-paganation justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>-->
                                </div>
                                <!-- /.col-lg-9 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        
                    
                    </div>
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

   
@endsection