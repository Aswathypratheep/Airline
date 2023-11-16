@extends('layouts.admin')
 @section('content')


    @vite(['resources/css/admin/flights.css'])
    

    <div class="form-container">
    <div class="wrapper">
        <form action="/admin/add_tickets" class="plane-form" enctype="multipart/form-data" method="POST">
            @csrf
            <h1>Add tickets </h1>
            <div class="input-box">
                <input type="text" placeholder="flight no" name="flightno" required>
            </div>
            <div class="input-box">
                <select name="plane_id" required>
                <option value="">Plane Id</option>
                 @foreach($planes as $plane)   
                 <option value="{{$plane->planes_id}}">{{$plane->plane_name}}</option>
                 @endforeach
                </select>
            </div>
            <div class="input-box">
                <select name="from" required>
                <option value="">from</option>
                 @foreach($places as $place)   
                 <option value="{{$place->id}}">{{$place->place}}</option>
                 @endforeach
                </select>
            </div>
            <div class="input-box">
                <select name="to" required>
                <option value="">to</option>
                 @foreach($places as $place)   
                 <option value="{{$place->id}}">{{$place->place}}</option>
                 @endforeach
                </select>
            </div>
            <div class="input-box">
                <input type="time" placeholder="arrival" name="arrival" required>
            </div>
            <div class="input-box">
                <input type="time" placeholder="departure" name="departure" required>
            </div>
            <div class="input-box">
                <input type="date" placeholder="date" name="date" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="remaining seats" name="remainingseats" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="price" name="price" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="airport departure" name="airport_d" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="airport arrival" name="airport_a" required>
            </div>
            <div class="input-box">
                <input type="submit" value="Add" class="btn">
            </div>
        </form>
    </div>
</div>
@endsection