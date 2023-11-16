<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Planes;
use App\Models\places;
use App\Models\tickets;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $users = User::get();
        $usercount = count($users);
        return view('admin.admin_dashboard',[
            'count'=>$usercount,
            'users'=>$users,
        ]);
    }

    public function LoginDetails(){
        $users = User::get();
        return view('admin.login_details',[
            'users'=>$users
        ]);
    }

    public function viewpassengers(){
        return view('admin.passengers.view_passengers',[
        ]);
    }

    public function placedetails(){
        $places = places::get();
        return view('admin.places.place',[
            'places'=>$places,
        ]);
    }

       
    public function managetickets(){
        $tickets=tickets::
             join('places', 'tickets.from', '=', 'places.id')
            ->join('places as p1', 'tickets.to', '=', 'p1.id')
            ->select('tickets.*', 'places.place as place','p1.place as p1')
             ->get();
        return view('admin.tickets.manage_tickets',[
            'tickets'=>$tickets
        ]);
    }

    public function addtickets(Request $request): RedirectResponse
    {
        $tickets = tickets::create([
           'flightno' => $request->flightno,
           'plane_id' => $request->plane_id,
           'from' => $request->from,
           'to' => $request->to,
           'arrival' => $request->arrival,
           'departure' => $request->departure,
           'date' => $request->date,
           'remainingseats' => $request->remainingseats,
           'price'=>$request->price,
           'airport_a' => $request->airport_a,
           'airport_d' => $request->airport_d,
            
        ]);
        $tickets->save();
        return Redirect::route('admin.ticketform');
    }

    public function ticketsform()
    {
        $plane = Planes::get();
        $places = places::get();
        return view('admin.tickets.ticketsform',
       [
        'planes' => $plane,
        'places' => $places, 
       ]);
    }

    public function viewpayments(){
        return view('admin.payments.view_payments',[
        ]);
    }


    public function manageflights(){
        $planes=Planes::get();
        return view('admin.flights.manage_flights',[
            'planes'=>$planes
        ]);
    }

    public function addflights(Request $request): RedirectResponse
    {
        $file = $request->file('logo');
        $path = $request->file('logo')->store('images','public');
        $plane = Planes::create([
           'plane_name' => $request->planename,
           'seats' => $request->seat,
           'planelogo' => $path,
        ]);
        $plane->save();
        return Redirect::route('admin.flightsform');
    }

    public function deleteflight(Request $request, $id): RedirectResponse
    {
        Planes::where('planes_id',$id)->delete();
        return Redirect::route('admin.manageflights');
    }

    public function addplace(Request $request): RedirectResponse
    {
        $places = places::create([
           'place' => $request->name
        ]);
        $places->save();
        return Redirect::route('admin.placeform');
    }
    
    public function deleteticket(Request $request, $id): RedirectResponse
    {
        tickets::where('id',$id)->delete();
        return Redirect::route('admin.managetickets');
    }

    public function deleteplace(Request $request, $id): RedirectResponse
    {
        Places::where('id',$id)->delete();
        return Redirect::route('admin.placedetails');
    }

}
    
