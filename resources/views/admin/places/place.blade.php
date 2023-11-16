@extends('layouts.admin')
@section('content')
<div class="flight-details">
<a href="/admin/placeform"><button class="add-button">+ add Place</button></a>
<div class="card">
   <div class="card-body">
   @if(count($places)>0)
     <p class="card-title mb-0">Place Details</p>
     <div class="table-responsive">
       <table class="table table-striped table-borderless">
         <thead>
           <tr>
             <th>place id</th>
             <th>place Name</th>
             <th>Actions</th>
            </tr>  
         </thead>
         <tbody>
         @foreach($places as $place)
           <tr>
             <td>{{$place->id}}</td>
             <td class="font-weight-bold">{{$place->place}}</td>
             <td>
             <form action="/admin/places/{{$place->id}}" method="POST">
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
      @else
      <h1>No places inserted</h1>
      @endif
     </div>
   </div>
 </div>
</div>
@endsection
