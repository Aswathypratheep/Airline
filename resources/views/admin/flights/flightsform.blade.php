 @extends('layouts.admin')
 @section('content')


    @vite(['resources/css/admin/flights.css'])
    

    <div class="form-container">
    <div class="wrapper">
        <form action="/admin/add_flights" class="plane-form" enctype="multipart/form-data" method="POST">
            @csrf
            <h1>Add Planes </h1>
            <div class="input-box">
                <input type="text" placeholder="Plane Name" name="planename" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="no of seats" name="seat" required>
            </div>
            <div class="input-box">
                <input type="file" name="logo" required>
            </div>
            <div class="input-box">
                <input type="submit" value="Add" class="btn">
            </div>
        </form>
    </div>
</div>
 @endsection