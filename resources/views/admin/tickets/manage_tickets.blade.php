@extends('layouts.admin')
@section('content')
<div class="flight-details">
<a href="/admin/ticketsform"><button class="add-button">add tickets</button></a>
<div class="card">
   <div class="card-body">
   <p class="card-title mb-0">ticket details</p>
     <div class="table-responsive">
       <table class="table table-striped table-borderless">
         <thead>
           <tr>
            <th>flight no</th>
             <th>plane id</th>
             <th>from</th>
             <th>to</th>
             <th>arrival</th>
             <th>departure</th>
             <th>date</th>
             <th>remaining seats</th>
             <th>price</th>
             <th>Action</th>
            </tr>  
         </thead>
         <tbody>
         @foreach($tickets as $ticket)
           <tr>
             <td class="font-weight-bold">{{$ticket->flightno}}</td>
             <td>{{$ticket->plane_id}}</td>
             <td>{{$ticket->place}}</td>
             <td>{{$ticket->p1}}</td>
             <td>{{$ticket->arrival}}</td>
             <td>{{$ticket->departure}}</td>
             <td>{{$ticket->date}}</td>
             <td>{{$ticket->remainingseats}}</td>
             <td>{{$ticket->price}}</td>
             <td>
             <form action="/admin/tickets/{{$ticket->plane_id}}" method="POST">
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