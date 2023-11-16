@extends('layouts.admin')
@section('content')
<div class="flight-details">
<a href="/admin/flightsform"><button class="add-button">+add flights</button></a>
<div class="card">
   <div class="card-body">
     <p class="card-title mb-0">plane Details</p>
     <div class="table-responsive">
       <table class="table table-striped table-borderless">
         <thead>
           <tr>
             <th>plane id</th>
             <th>plane Name</th>
             <th>no of seats</th>
             <th>flight logo</th>
             <th>Actions</th>
            </tr>  
         </thead>
         <tbody>
         @foreach($planes as $plane)
           <tr>
             <td>{{$plane->planes_id}}</td>
             <td class="font-weight-bold">{{$plane->plane_name}}</td>
             <td>{{$plane->seats}}</td>
             <td>
             <img src="/storage/{{$plane->planelogo}}"/>
             </td>
             <td>
             <form action="/admin/flight/{{$plane->planes_id}}" method="POST">
                  @method('DELETE')
                  @csrf
                  {{ csrf_field() }}
                <button type="submit" class="deletebtn">
                  delete
                </button>
              </form>
             </td>
            </tr>
           @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div>
</div>
@endsection
