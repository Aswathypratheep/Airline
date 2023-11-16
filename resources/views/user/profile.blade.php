@extends('layouts.user')
@section('content')

<html>
<head>
<style>
        body {
	 background-color: #3b2e8f;
	 font-family: 'Open Sans', sans-serif;
}

.h1 {
	font-size: 17px;
	margin: 0;
	font-weight: 600;
}

.h3 {
	font-size: 16px;
	margin: 0;
	font-weight: 700;
}

.h4 {
	font-size: 11px;
	margin: 0;
	font-weight: 400;
}

.h5 {
	font-size: 11px;
	font-weight: 600;
	margin: 25px 0 25px 0;
}

.h6 {
	font-weight: 600;
	margin: 0;
}

.container1 {
	margin: 0 auto;
    width: 300px;
    background-color: white;
    position: relative;
    overflow: hidden;
}

.first {
	margin-top: 70px;
	height: 300px;
}

.second {
	margin-top: 0px;
	height: 120px;
	border-top: 1px solid #3b2e8f;
}

.top {
	top: -10px;
	position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 100%;
    background-color: #3b2e8f;
}
.bottom {
	bottom: -10px;
	position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 100%;
    background-color: #3b2e8f;
}
.left {
	left: -10px;
	position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 100%;
    background-color: #3b2e8f;
}
.right {
	right: -10px;
	position: absolute;
    width: 18px;
    height: 18px;
    border-radius: 100%;
    background-color: #3b2e8f;
}

.spacer {
	padding: 25px 20px 20px 20px;
}

.spacer2 {
	padding: 15px 20px 20px 20px;
}

.spacer > img {
	width: 57px;
	float: left;
	padding-right: 30px;
}

.name-flight {
	float: left;
}

.name-flight > .h3 {
	text-transform: uppercase;
	color: #4b4091;
}

.name-flight > .h4 {
	color: #7c7c7c;
	margin-top: -5px;
}

.h4 > span {
	font-size: 15px;
	font-weight: 700;
	color: #d9118d;
}

.destination {
	margin-top: 70px;
}

.from {
	float: left;
	width: 33%;
	color: #5d6474;
}

.center {
	float: left;
	width: 33%;

}

.i {
	color: #5d6474;
	padding-top: 15px;
	padding-left: 25%;
}

.to {
	float: left;
	width: 33%;
	color: #5d6474;
}

.from > span {
	font-size: 12px;
	font-weight: 600;
}

.to > span {
	font-size: 12px;
	font-weight: 600;
}

.left-side {
	float: left;
	width: 33%;
}

.h5 > span {
	font-weight: 700;
	font-size: 15px;
	color: #da0d8d;
}


.right-side {
	float: right;
	width: 33%;
}

.h5 {
	color: #5e6675;
}

.spacer2 > .h3 {
	color: #4b4091;
	text-transform: uppercase;
	text-align: center;
}

.flight-gate {
	float: left;
	width: 66%;
	margin-top: 15px;
}

.flight-gate > .h5 {
	margin: 0 0 5px 0;
}

.text-barcode > img {
	float: left;
	width: 33%;
	margin-top: 5px;
}

.cancel-btn{
	background-color: red;
	border-radius: 10px;
}

    </style>
	<title>WizzAir ticket</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    @foreach($bookings as $booking)
	<div class="container1 first">
		<div class="top left corner"></div>
	    <div class="top right corner"></div>
	    <div class="bottom left corner"></div>
	    <div class="bottom right corner"></div>
	    <div class="spacer">
	    	<img src="https://p1.picsto.re/Ys0k2.jpg">
	    	<div class="name-flight">
	    		<h3 class="h3">{{$booking->Firstname}}</h3>
	    		<h4 class="h4">Flight: <span>CAS659789</span></h4>
	    	</div>
	    	<div class="destination">
	    		<div class="from">
	    			<h1 class="h1">{{$booking->from}}</h1>
	    			<h6 class="h6">{{$booking->airport_d}}</h6>
	    		</div>
	    		<div class="center">
	    			<i class="material-icons i">flight_takeoff</i>
	    		</div>
	    		<div class="to">
	    			<h1 class="h1">{{$booking->to}}</h1>
	    			<h6 class="h6">{{$booking->airport_a}}</h6>
	    		</div>
	    	</div>
	    	<div class="details">
	    		<div class="left-side">
		    		<h5 class="h5">Date:</br><span>{{$booking->date}}</span></h5>
		    		<h5 class="h5">Gate:</br><span>2B</span></h5>
	    		</div>
	    		<div class="right-side">
		    		<h5 class="h5">Depart:</br><span>{{$booking->departure}}</span></h5>
		    		<h5 class="h5">Seat:</br><span>4A</span></h5>
	    		</div>
	    	</div>
	    </div>
	</div>
	<div class="container1 second">
		<div class="top left"></div>
	    <div class="top right"></div>
	    <div class="bottom left"></div>
	    <div class="bottom right"></div>
	    <div class="spacer2">
	    	<h3 class="h3">{{$booking->Firstname}}</h3>
	    	<div class="text-barcode">
	    		<div class="flight-gate">
	    			<h5 class="h5">Flight: <span>CAS659789</span></h5>
	    			<h5 class="h5">Gate: <span>2B</span></h5>
				<td>
             <form action="/user/{{$booking->pid}}" method="POST">
                  @method('DELETE')
                  @csrf
                  {{ csrf_field() }}
                <button type="submit" class="cancel-btn">
                  Cancel ticket
                </button>
              </form>
             </td>
	    		</div>
	    		<img src="https://p1.picsto.re/jXKTO.jpg">
	    	</div>
	    </div>
	</div>
    @endforeach
</body>
</html>

@endsection