@extends('layouts.admin')
 @section('content')


    @vite(['resources/css/admin/flights.css'])
    

    <div class="form-container">
    <div class="wrapper">
        <form action="/admin/addplace" class="plane-form" enctype="multipart/form-data" method="POST">
            @csrf
            <h1>Add Manager</h1>
            <div class="input-box">
                <input type="text" placeholder="place Name" name="name" required>
            </div>
         
            <div class="input-box">
                <input type="submit" value="Add" class="btn">
            </div>
        </form>
    </div>
</div>
 @endsection