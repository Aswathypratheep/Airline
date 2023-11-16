<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Planes;
use App\Models\places;
use App\Models\tickets;
use App\Models\passenger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function Dashboard(){
        $tickets=tickets::
             join('places', 'tickets.from', '=', 'places.id')
            ->join('places as p1', 'tickets.to', '=', 'p1.id')
            ->join('planes', 'tickets.plane_id', '=', 'planes.planes_id')
            ->select('tickets.*', 'places.place as from','p1.place as to','planes.*')
            ->get();
        $places = places::get();
        return view('user.dashboard',[
            'places' => $places,
            'tickets' => $tickets,
        ]);
    }

    public function usersearch(Request $request)//: RedirectResponse
    {
       
        $tickets=tickets::
             join('places', 'tickets.from', '=', 'places.id')
            ->join('places as p1', 'tickets.to', '=', 'p1.id')
            ->join('planes', 'tickets.plane_id', '=', 'planes.planes_id')
            ->select('tickets.*', 'places.place as from','p1.place as to','planes.*')
            ->where('from',$request->from)
            ->where('to',$request->to)
            ->where('date',$request->date)
            ->get();
       // dd($request);
       // dd($tickets);

        $places = places::get();
        return view('user.dashboard',[
            'places' => $places,
            'tickets' => $tickets,
        ]);
    }

    public function BookingForm(Request $request,$id)//: RedirectResponse
    {
        $ticket = tickets::
           where('tickets.id',$id)
           ->join('places', 'tickets.from', '=', 'places.id')
            ->join('places as p1', 'tickets.to', '=', 'p1.id')
            ->join('planes', 'tickets.plane_id', '=', 'planes.planes_id')
            ->select('tickets.*', 'places.place as from','p1.place as to','planes.*')
           // ->firstWhere('id',$id);
           ->first();
  //dd($ticket);

        return view('user.booking',[
            'ticket' => $ticket,
        ]);
    }

    public function profile()
    {
        $booking = passenger::where('user_id',auth()->user()->id)
                  ->join('tickets','passenger.ticket_id','=','tickets.id')
                 // ->select('tickets.*','passenger.id as pid')
                  ->join('places','tickets.from','=','places.id')
                  ->join('places as p1', 'tickets.to', '=', 'p1.id')
                  ->select('passenger.*','tickets.*','passenger.id as pid','places.place as from','p1.place as to')
                  ->get();
              //   dd($booking);
        return view('user.profile',[
           'bookings' => $booking,
        ]);
    }

    public function deletebooking($id): RedirectResponse
    {
       // dd( passenger::where('id',$id)->get());
        passenger::where('id',$id)->delete();
        return Redirect::route('user.profile');
    }
}
