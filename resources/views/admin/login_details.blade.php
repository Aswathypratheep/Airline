@extends('layouts.admin')
@section('content')

<div class="card">
   <div class="card-body">
     <p class="card-title mb-0">Login Details</p>
     <div class="table-responsive">
       <table class="table table-striped table-borderless">
         <thead>
           <tr>
             <th>Login id</th>
             <th>Name</th>
             <th>Username</th>
             <th>Role</th>
             <th>Email</th>
           </tr>  
         </thead>
         <tbody>
           @foreach($users as $user)
           <tr>
             <td>{{$user->id}}</td>
             <td class="font-weight-bold">{{$user->name}}</td>
             <td>{{$user->username}}</td>

             @if ($user->role === "admin")
             <td class="font-weight-medium"><div class="badge badge-danger">{{$user->role}}</div></td>
             @elseif ($user->role === "user")
             <td class="font-weight-medium"><div class="badge badge-success">{{$user->role}}</div></td>
             @else
             <td class="font-weight-medium"><div class="badge badge-warning">{{$user->role}}</div></td>
             @endif
             <td>{{$user->email}}</td>
           </tr>
           @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div>
@endsection